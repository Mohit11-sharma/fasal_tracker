```html
<!DOCTYPE html>
<html lang="hi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasal Tracker - लॉगिन OTP</title>
</head>

<body style="margin:0; padding:0; background-color:#f4f6f8; font-family:Arial, Helvetica, sans-serif; color:#333333;">

    <!-- Main Wrapper -->
    <table width="100%" cellpadding="0" cellspacing="0" border="0"
        style="background-color:#f4f6f8; padding:40px 15px;">

        <tr>
            <td align="center">

                <!-- Email Container -->
                <table width="600" cellpadding="0" cellspacing="0" border="0"
                    style="max-width:600px; width:100%; background-color:#ffffff; border-radius:10px; overflow:hidden; border:1px solid #e5e7eb;">

                    <!-- Header -->
                    <tr>
                        <td align="center"
                            style="background-color:#1f2937; padding:28px 20px;">

                            <h1 style="margin:0; color:#d3ef94; font-size:28px; font-weight:700;">
                                Fasal Tracker
                            </h1>

                            <p style="margin:8px 0 0; color:#d1d5db; font-size:14px;">
                                फसल खरीद प्रबंधन प्रणाली
                            </p>

                        </td>
                    </tr>


                    <!-- Content -->
                    <tr>
                        <td style="padding:40px 35px;">

                            <!-- Heading -->
                            <h2 style="margin:0 0 12px; color:#1f2937; font-size:22px;">
                                लॉगिन सत्यापन
                            </h2>

                            <p style="margin:0 0 20px; color:#4b5563; font-size:14px; line-height:1.7;">
                                नमस्कार,
                            </p>

                            <p style="margin:0 0 25px; color:#4b5563; font-size:14px; line-height:1.7;">
                                आपके
                                <strong style="color:#1f2937;">Fasal Tracker</strong>
                                खाते में लॉगिन करने के लिए एक सत्यापन कोड (OTP) भेजा गया है।
                                लॉगिन पूरा करने के लिए नीचे दिया गया OTP दर्ज करें।
                            </p>


                            <!-- OTP Box -->
                            <table width="100%" cellpadding="0" cellspacing="0" border="0"
                                style="margin:25px 0;">

                                <tr>
                                    <td align="center"
                                        style="background-color:#f7fbe9; border:1px solid #d3ef94; border-radius:8px; padding:25px 15px;">

                                        <p style="margin:0 0 10px; color:#6b7280; font-size:11px; text-transform:uppercase; letter-spacing:2px; font-weight:bold;">
                                            आपका लॉगिन OTP
                                        </p>

                                        <div style="font-size:38px; line-height:1.2; font-weight:700; color:#1f2937; letter-spacing:8px;">
                                            {{ $details['otp'] }}
                                        </div>

                                        <p style="margin:12px 0 0; color:#6b7280; font-size:12px;">
                                            इस OTP को लॉगिन पेज पर दर्ज करें
                                        </p>

                                    </td>
                                </tr>

                            </table>


                            <!-- Validity -->
                            <table width="100%" cellpadding="0" cellspacing="0" border="0"
                                style="margin:25px 0;">

                                <tr>

                                    <td width="45"
                                        style="vertical-align:top; padding:15px 10px 15px 15px; background-color:#fff8e6; border-left:4px solid #f59e0b;">

                                        <div style="font-size:20px;">
                                            ⏱
                                        </div>

                                    </td>

                                    <td style="background-color:#fff8e6; padding:15px 15px 15px 5px;">

                                        <p style="margin:0 0 5px; color:#92400e; font-size:13px; font-weight:bold;">
                                            OTP की वैधता
                                        </p>

                                        <p style="margin:0; color:#78350f; font-size:13px; line-height:1.5;">
                                            यह OTP
                                            <strong>10 मिनट</strong>
                                            तक मान्य है और इसका उपयोग केवल एक बार किया जा सकता है।
                                        </p>

                                    </td>

                                </tr>

                            </table>


                            <!-- Security Notice -->
                            <table width="100%" cellpadding="0" cellspacing="0" border="0"
                                style="margin:25px 0;">

                                <tr>

                                    <td width="45"
                                        style="vertical-align:top; padding:15px 10px 15px 15px; background-color:#eff6ff; border-left:4px solid #3b82f6;">

                                        <div style="font-size:20px;">
                                            🔒
                                        </div>

                                    </td>

                                    <td style="background-color:#eff6ff; padding:15px 15px 15px 5px;">

                                        <p style="margin:0 0 5px; color:#1e40af; font-size:13px; font-weight:bold;">
                                            अपना OTP सुरक्षित रखें
                                        </p>

                                        <p style="margin:0; color:#1e3a8a; font-size:13px; line-height:1.5;">
                                            अपना OTP किसी अन्य व्यक्ति के साथ साझा न करें।
                                            Fasal Tracker की टीम आपसे कभी भी आपका OTP या पासवर्ड नहीं मांगेगी।
                                        </p>

                                    </td>

                                </tr>

                            </table>


                            <!-- Login Information -->
                            <table width="100%" cellpadding="0" cellspacing="0" border="0"
                                style="margin:25px 0;">

                                <tr>

                                    <td style="background-color:#f9fafb; border:1px solid #e5e7eb; border-radius:8px; padding:16px;">

                                        <p style="margin:0 0 6px; color:#374151; font-size:13px; font-weight:bold;">
                                            🔐 लॉगिन सुरक्षा
                                        </p>

                                        <p style="margin:0; color:#6b7280; font-size:12px; line-height:1.6;">
                                            यदि आपने स्वयं लॉगिन का अनुरोध किया है, तो इस OTP का उपयोग करके
                                            अपना लॉगिन पूरा करें।
                                        </p>

                                    </td>

                                </tr>

                            </table>


                            <!-- Not Requested -->
                            <p style="margin:25px 0 0; color:#6b7280; font-size:13px; line-height:1.7;">
                                यदि आपने लॉगिन का अनुरोध नहीं किया है, तो इस ईमेल को अनदेखा कर दें।
                                आपकी जानकारी सुरक्षित है।
                            </p>


                            <!-- Divider -->
                            <table width="100%" cellpadding="0" cellspacing="0" border="0"
                                style="margin:30px 0 20px;">

                                <tr>
                                    <td style="border-top:1px solid #e5e7eb; font-size:0; line-height:0;">
                                        &nbsp;
                                    </td>
                                </tr>

                            </table>


                            <!-- Thank You -->
                            <p style="margin:0; color:#6b7280; font-size:13px; line-height:1.6; text-align:center;">
                                Fasal Tracker का उपयोग करने के लिए
                                <strong style="color:#1f2937;">धन्यवाद।</strong>
                            </p>

                        </td>
                    </tr>


                    <!-- Footer -->
                    <tr>
                        <td align="center"
                            style="background-color:#f9fafb; border-top:1px solid #e5e7eb; padding:20px;">

                            <p style="margin:0 0 6px; color:#6b7280; font-size:12px;">
                                © {{ date('Y') }} Fasal Tracker
                            </p>

                            <p style="margin:0 0 6px; color:#9ca3af; font-size:11px;">
                                फसल खरीद प्रबंधन प्रणाली
                            </p>

                            <p style="margin:0; color:#9ca3af; font-size:11px;">
                                यह एक स्वचालित ईमेल है। कृपया इस ईमेल का उत्तर न दें।
                            </p>

                        </td>
                    </tr>

                </table>

            </td>
        </tr>

    </table>

</body>

</html>
```
