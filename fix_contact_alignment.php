<?php
$file = 'resources/views/frontend/pages/contact.blade.php';
$content = file_get_contents($file);

// Fix the overlapping issue by renaming classes that conflict with the global theme CSS
// and adding explicit layout properties.

$search = <<<HTML
                        <div class="info-item" style="display: flex; margin-bottom: 30px;">
                            <div class="icon" style="font-size: 24px; color: #fff; margin-right: 20px;">
                                <i class="ti-location-pin"></i>
                            </div>
                            <div class="text">
                                <h4 style="color: #fff; font-size: 18px; margin-bottom: 5px; font-weight: 600;">Location</h4>
                                <p style="color: rgba(255,255,255,0.8); font-size: 15px;">@foreach(\$settings as \$data) {{\text{\$data->address}}} @endforeach</p>
                            </div>
                        </div>

                        <div class="info-item" style="display: flex; margin-bottom: 30px;">
                            <div class="icon" style="font-size: 24px; color: #fff; margin-right: 20px;">
                                <i class="ti-mobile"></i>
                            </div>
                            <div class="text">
                                <h4 style="color: #fff; font-size: 18px; margin-bottom: 5px; font-weight: 600;">Phone</h4>
                                <p style="color: rgba(255,255,255,0.8); font-size: 15px;">@foreach(\$settings as \$data) {{\text{\$data->phone}}} @endforeach</p>
                            </div>
                        </div>

                        <div class="info-item" style="display: flex;">
                            <div class="icon" style="font-size: 24px; color: #fff; margin-right: 20px;">
                                <i class="ti-email"></i>
                            </div>
                            <div class="text">
                                <h4 style="color: #fff; font-size: 18px; margin-bottom: 5px; font-weight: 600;">Email</h4>
                                <p style="color: rgba(255,255,255,0.8); font-size: 15px;">@foreach(\$settings as \$data) {{\text{\$data->email}}} @endforeach</p>
                            </div>
                        </div>
HTML;

// Note: Using a robust regex replacement just in case exact string match fails due to whitespace
$content = preg_replace('/<div class="info-item".*?<\/div>\s*<\/div>\s*<\/div>/s', <<<HTML
                        <div class="c-info-item" style="display: flex !important; align-items: flex-start !important; margin-bottom: 35px !important; clear: both !important;">
                            <div class="c-icon" style="font-size: 26px !important; color: #fff !important; margin-right: 20px !important; flex-shrink: 0 !important; line-height: 1 !important;">
                                <i class="ti-location-pin"></i>
                            </div>
                            <div class="c-text" style="flex-grow: 1 !important; text-align: left !important;">
                                <h4 style="color: #fff !important; font-size: 18px !important; margin-bottom: 5px !important; font-weight: 600 !important; padding: 0 !important; border: none !important; line-height: 1.2 !important; clear: none !important;">Location</h4>
                                <p style="color: rgba(255,255,255,0.9) !important; font-size: 15px !important; margin: 0 !important; padding: 0 !important; line-height: 1.6 !important;">@foreach(\$settings as \$data) {{\text{\$data->address}}} @endforeach</p>
                            </div>
                        </div>

                        <div class="c-info-item" style="display: flex !important; align-items: flex-start !important; margin-bottom: 35px !important; clear: both !important;">
                            <div class="c-icon" style="font-size: 26px !important; color: #fff !important; margin-right: 20px !important; flex-shrink: 0 !important; line-height: 1 !important;">
                                <i class="ti-mobile"></i>
                            </div>
                            <div class="c-text" style="flex-grow: 1 !important; text-align: left !important;">
                                <h4 style="color: #fff !important; font-size: 18px !important; margin-bottom: 5px !important; font-weight: 600 !important; padding: 0 !important; border: none !important; line-height: 1.2 !important; clear: none !important;">Phone</h4>
                                <p style="color: rgba(255,255,255,0.9) !important; font-size: 15px !important; margin: 0 !important; padding: 0 !important; line-height: 1.6 !important;">@foreach(\$settings as \$data) {{\text{\$data->phone}}} @endforeach</p>
                            </div>
                        </div>

                        <div class="c-info-item" style="display: flex !important; align-items: flex-start !important; clear: both !important;">
                            <div class="c-icon" style="font-size: 26px !important; color: #fff !important; margin-right: 20px !important; flex-shrink: 0 !important; line-height: 1 !important;">
                                <i class="ti-email"></i>
                            </div>
                            <div class="c-text" style="flex-grow: 1 !important; text-align: left !important;">
                                <h4 style="color: #fff !important; font-size: 18px !important; margin-bottom: 5px !important; font-weight: 600 !important; padding: 0 !important; border: none !important; line-height: 1.2 !important; clear: none !important;">Email</h4>
                                <p style="color: rgba(255,255,255,0.9) !important; font-size: 15px !important; margin: 0 !important; padding: 0 !important; line-height: 1.6 !important;">@foreach(\$settings as \$data) {{\text{\$data->email}}} @endforeach</p>
                            </div>
                        </div>
HTML
, $content, 1);

// I noticed the original string had `{{\text{\$data->address}}}` in the replacement. That should just be `{{\$data->address}}`.
// Let's ensure the variables are formatted correctly in blade.
$content = str_replace('\text{$data->address}', '$data->address', $content);
$content = str_replace('\text{$data->phone}', '$data->phone', $content);
$content = str_replace('\text{$data->email}', '$data->email', $content);

file_put_contents($file, $content);
echo "Contact page alignment fixed.\n";
