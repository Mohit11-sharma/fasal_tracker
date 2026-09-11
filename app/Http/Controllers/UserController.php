<?php

namespace App\Http\Controllers;

use App\Jobs\FarmerLoginOtpJob;
use App\Jobs\FarmerRegisterOtpJob;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'email|unique:users,email',
            'mobile_no' => 'required|regex:/^[6-9][0-9]{9}$/|unique:users,mobile_no',
        ], [
            'name.regex' => 'नाम में केवल अक्षर डालें।',
            'email.unique' => 'यह ईमेल पहले से पंजीकृत है।',
            'mobile_no.phone' => 'कृपया सही मोबाइल नंबर दर्ज करें।',
            'mobile_no.unique' => 'यह मोबाइल नंबर पहले से पंजीकृत है।',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()->first(),
            ], 422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile_no' => $request->mobile_no,
            'aadhar_number' => $request->aadhar_number,
            'state' => $request->state,
            'district' => $request->district,
            'village' => $request->village,
            'pincode' => $request->pincode,
            'preferred_language' => $request->preferred_language,
            'farmer_image' => $request->farmer_image,
            'role' => $request->role,
            'farmer_id' => 'FARMER'.strtoupper(Str::random(8)),
            'remember_token' => Str::random(60),
        ]);

        $otp = rand(100000, 999999);
        $user->update([
            'otp' => $otp,
            // 'otp_expired_at' => Carbon::now()->addMinutes(int)(env('OTP_EXPIRE_MINUTES', 10)),
            'otp_expired_at' => Carbon::now()->addMinutes((int) env('OTP_EXPIRE_MINUTES', 10)),
        ]);

        FarmerRegisterOtpJob::dispatch([
            'email' => $user->email,
            'otp' => $otp,
        ]);

        return response()->json([
            'message' => 'पंजीकरण सफल रहा। सत्यापन के लिए आपके ईमेल पर OTP भेज दिया गया है।',
            'data' => [
                'success' => true,
                'user_id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'mobile_no' => $user->mobile_no,
                'aadhar_number' => $user->aadhar_number,
                'state' => $user->state,
                'district' => $user->district,
                'village' => $user->village,
                'pincode' => $user->pincode,
                'preferred_language' => $user->preferred_language,
                'farmer_image' => $user->farmer_image,
                'role' => $user->role,
                'farmer_id' => $user->farmer_id,
                'remember_token' => Str::random(60),
            ],
        ], 201);
    }

    public function sendOtp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'farmer_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first(),
            ], 422);
        }

        $user = User::where('farmer_id', $request->farmer_id)->first();
        if (! $user) {
            return response()->json([
                'success' => false,
                'message' => 'No account found with this Farmer ID.',
            ], 404);
        }

        $otp = rand(100000, 999999);
        $user->update([
            'otp' => $otp,
            // 'otp_expired_at' => Carbon::now()->addMinutes(env('OTP_EXPIRE_MINUTES', 10)),
            'otp_expired_at' => Carbon::now()->addMinutes((int) env('OTP_EXPIRE_MINUTES', 10)),
        ]);

        FarmerLoginOtpJob::dispatch([
            'email' => $user->email,
            'otp' => $otp,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'OTP sent to your registered email.',
        ]);
    }

    // public function verifyOtp(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'phone' => 'required|numeric',
    //         'otp' => 'required|numeric',
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json([
    //             'success' => false,
    //             'message' => $validator->errors()->first(),
    //         ], 422);
    //     }

    //     $user = Customer::where('phone', $request->phone)->first();
    //     if (! $user) {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Customer not found.',
    //         ], 404);
    //     }

    //     if ($user->otp != $request->otp) {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Invalid OTP. Please try again.',
    //         ], 400);
    //     }

    //     if (Carbon::now()->gt($user->otp_expired_at)) {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'OTP has expired. Please request a new one.',
    //         ], 400);
    //     }

    //     $wasUnverified = ! $user->is_verified;

    //     $accessToken = $user->createToken('API Token')->plainTextToken;

    //     $user->otp = null;
    //     $user->otp_expired_at = null;
    //     $user->is_verified = 1;
    //     $user->save();

    //     if ($wasUnverified) {
    //         CustomerRegisterJob::dispatch([
    //             'email' => $user->email,
    //             'phone' => $user->phone,
    //         ]);
    //     }

    //     $redirect = session('url.intended', route('storehome'));

    //     return response()->json([
    //         'success' => true,
    //         'message' => 'Verification successful. Welcome!',
    //         'auth_token' => $accessToken,
    //         'user' => [
    //             'id' => $user->id,
    //             'name' => $user->full_name,
    //             'email' => $user->email,
    //             'phone' => $user->phone,
    //         ],
    //         'redirect' => $redirect,
    //     ])->cookie('auth_token', $accessToken, 60 * 24 * 30, '/', null, false, false);
    // }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
