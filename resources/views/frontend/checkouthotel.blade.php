@extends('frontend.layouts.app')

@section('content')
    <!-- ================================
                                                                                                                                                                                                                                                                                                                                                                    START BREADCRUMB AREA
                                                                                                                                                                                                                                                                                                                                                                ================================= -->
    <section class="breadcrumb-area bread-bg-10">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content text-center">
                            <div class="section-heading">
                                <h2 class="sec__title text-white">Checkout</h2>
                            </div>
                            <span class="arrow-blink">
                                <i class="la la-arrow-down"></i>
                            </span>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end breadcrumb-wrap -->
        <div class="bread-svg-box">
            <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
                <polygon points="100 0 50 10 0 0 0 10 100 10"></polygon>
            </svg>
        </div><!-- end bread-svg -->
    </section><!-- end breadcrumb-area -->
    <!-- ================================
                                                                                                                                                                                                                                                                                                                                                                    END BREADCRUMB AREA
                                                                                                                                                                                                                                                                                                                                                                ================================= -->

    <!-- ================================
                                                                                                                                                                                                                                                                                                                                                                    START BOOKING AREA
                                                                                                                                                                                                                                                                                                                                                                ================================= -->
    <section class="booking-area padding-top-100px padding-bottom-70px">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <div class="form-box">
                        <div class="form-title-wrap">
                            <h3 class="title">Booking Submission</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content ">
                            <div class="contact-form-action">

                                <div class="row">
                                    <div class="col-lg-12 responsive-column">
                                        <div class="input-box">
                                            <label class="label-text">Name</label>
                                            <div class="form-group">
                                                <span class="la la-user form-icon"></span>
                                                <input class="form-control" type="text" name="name" placeholder="name">
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-6 -->
                                    {{-- <div class="col-lg-6 responsive-column">
                                                <div class="input-box">
                                                    <label class="label-text">Last Name</label>
                                                    <div class="form-group">
                                                        <span class="la la-user form-icon"></span>
                                                        <input class="form-control" type="text" name="text"
                                                            placeholder="Last name">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 --> --}}
                                    <div class="col-lg-6 responsive-column">
                                        <div class="input-box">
                                            <label class="label-text">Your Email</label>
                                            <div class="form-group">
                                                <span class="la la-envelope-o form-icon"></span>
                                                <input class="form-control" type="email" name="email"
                                                    placeholder="Email address">
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6 responsive-column">
                                        <div class="input-box">
                                            <label class="label-text">Phone Number</label>
                                            <div class="form-group">
                                                <span class="la la-phone form-icon"></span>
                                                <input class="form-control" type="text" name="phone"
                                                    placeholder="Phone Number">
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-6 -->
                                    {{-- <div class="col-lg-12 responsive-column">
                                            <div class="input-box">
                                                <label class="label-text">Address Line</label>
                                                <div class="form-group">
                                                    <span class="la la-map-marked form-icon"></span>
                                                    <input class="form-control" type="text" name="address"
                                                        placeholder="Address line">
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-12 --> --}}
                                    {{-- <div class="col-lg-6 responsive-column">
                                                <div class="input-box">
                                                    <label class="label-text">Country</label>
                                                    <div class="form-group">
                                                        <div class="select-contain w-auto">
                                                            <select class="select-contain-select">
                                                                <option value="select-country">Select country</option>
                                                                <option value="Afghanistan">Afghanistan</option>
                                                                <option value="Åland Islands">Åland Islands</option>
                                                                <option value="Albania">Albania</option>
                                                                <option value="Algeria">Algeria</option>
                                                                <option value="American Samoa">American Samoa</option>
                                                                <option value="Andorra">Andorra</option>
                                                                <option value="Angola">Angola</option>
                                                                <option value="Anguilla">Anguilla</option>
                                                                <option value="Antarctica">Antarctica</option>
                                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                                <option value="Argentina">Argentina</option>
                                                                <option value="Armenia">Armenia</option>
                                                                <option value="Aruba">Aruba</option>
                                                                <option value="Australia">Australia</option>
                                                                <option value="Austria">Austria</option>
                                                                <option value="Azerbaijan">Azerbaijan</option>
                                                                <option value="Bahamas">Bahamas</option>
                                                                <option value="Bahrain">Bahrain</option>
                                                                <option value="Bangladesh">Bangladesh</option>
                                                                <option value="Barbados">Barbados</option>
                                                                <option value="Belarus">Belarus</option>
                                                                <option value="Belgium">Belgium</option>
                                                                <option value="Belize">Belize</option>
                                                                <option value="Benin">Benin</option>
                                                                <option value="Bermuda">Bermuda</option>
                                                                <option value="Bhutan">Bhutan</option>
                                                                <option value="Bolivia">Bolivia</option>
                                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina
                                                                </option>
                                                                <option value="Botswana">Botswana</option>
                                                                <option value="Bouvet Island">Bouvet Island</option>
                                                                <option value="Brazil">Brazil</option>
                                                                <option value="British Indian Ocean Territory">British Indian
                                                                    Ocean Territory</option>
                                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                                <option value="Bulgaria">Bulgaria</option>
                                                                <option value="Burkina Faso">Burkina Faso</option>
                                                                <option value="Burundi">Burundi</option>
                                                                <option value="Cambodia">Cambodia</option>
                                                                <option value="Cameroon">Cameroon</option>
                                                                <option value="Canada">Canada</option>
                                                                <option value="Cape Verde">Cape Verde</option>
                                                                <option value="Cayman Islands">Cayman Islands</option>
                                                                <option value="Central African Republic">Central African
                                                                    Republic</option>
                                                                <option value="Chad">Chad</option>
                                                                <option value="Chile">Chile</option>
                                                                <option value="China">China</option>
                                                                <option value="Christmas Island">Christmas Island</option>
                                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands
                                                                </option>
                                                                <option value="Colombia">Colombia</option>
                                                                <option value="Comoros">Comoros</option>
                                                                <option value="Congo">Congo</option>
                                                                <option value="Congo, The Democratic Republic of The">Congo, The
                                                                    Democratic Republic of The</option>
                                                                <option value="Cook Islands">Cook Islands</option>
                                                                <option value="Costa Rica">Costa Rica</option>
                                                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                                <option value="Croatia">Croatia</option>
                                                                <option value="Cuba">Cuba</option>
                                                                <option value="Cyprus">Cyprus</option>
                                                                <option value="Czech Republic">Czech Republic</option>
                                                                <option value="Denmark">Denmark</option>
                                                                <option value="Djibouti">Djibouti</option>
                                                                <option value="Dominica">Dominica</option>
                                                                <option value="Dominican Republic">Dominican Republic</option>
                                                                <option value="Ecuador">Ecuador</option>
                                                                <option value="Egypt">Egypt</option>
                                                                <option value="El Salvador">El Salvador</option>
                                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                <option value="Eritrea">Eritrea</option>
                                                                <option value="Estonia">Estonia</option>
                                                                <option value="Ethiopia">Ethiopia</option>
                                                                <option value="Falkland Islands (Malvinas)">Falkland Islands
                                                                    (Malvinas)</option>
                                                                <option value="Faroe Islands">Faroe Islands</option>
                                                                <option value="Fiji">Fiji</option>
                                                                <option value="Finland">Finland</option>
                                                                <option value="France">France</option>
                                                                <option value="French Guiana">French Guiana</option>
                                                                <option value="French Polynesia">French Polynesia</option>
                                                                <option value="French Southern Territories">French Southern
                                                                    Territories</option>
                                                                <option value="Gabon">Gabon</option>
                                                                <option value="Gambia">Gambia</option>
                                                                <option value="Georgia">Georgia</option>
                                                                <option value="Germany">Germany</option>
                                                                <option value="Ghana">Ghana</option>
                                                                <option value="Gibraltar">Gibraltar</option>
                                                                <option value="Greece">Greece</option>
                                                                <option value="Greenland">Greenland</option>
                                                                <option value="Grenada">Grenada</option>
                                                                <option value="Guadeloupe">Guadeloupe</option>
                                                                <option value="Guam">Guam</option>
                                                                <option value="Guatemala">Guatemala</option>
                                                                <option value="Guernsey">Guernsey</option>
                                                                <option value="Guinea">Guinea</option>
                                                                <option value="Guinea-bissau">Guinea-bissau</option>
                                                                <option value="Guyana">Guyana</option>
                                                                <option value="Haiti">Haiti</option>
                                                                <option value="Heard Island and Mcdonald Islands">Heard Island
                                                                    and Mcdonald Islands</option>
                                                                <option value="Holy See (Vatican City State)">Holy See (Vatican
                                                                    City State)</option>
                                                                <option value="Honduras">Honduras</option>
                                                                <option value="Hong Kong">Hong Kong</option>
                                                                <option value="Hungary">Hungary</option>
                                                                <option value="Iceland">Iceland</option>
                                                                <option value="India">India</option>
                                                                <option value="Indonesia">Indonesia</option>
                                                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic
                                                                    of</option>
                                                                <option value="Iraq">Iraq</option>
                                                                <option value="Ireland">Ireland</option>
                                                                <option value="Isle of Man">Isle of Man</option>
                                                                <option value="Israel">Israel</option>
                                                                <option value="Italy">Italy</option>
                                                                <option value="Jamaica">Jamaica</option>
                                                                <option value="Japan">Japan</option>
                                                                <option value="Jersey">Jersey</option>
                                                                <option value="Jordan">Jordan</option>
                                                                <option value="Kazakhstan">Kazakhstan</option>
                                                                <option value="Kenya">Kenya</option>
                                                                <option value="Kiribati">Kiribati</option>
                                                                <option value="Korea, Democratic People's Republic of">Korea,
                                                                    Democratic People's Republic of</option>
                                                                <option value="Korea, Republic of">Korea, Republic of</option>
                                                                <option value="Kuwait">Kuwait</option>
                                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                <option value="Lao People's Democratic Republic">Lao People's
                                                                    Democratic Republic</option>
                                                                <option value="Latvia">Latvia</option>
                                                                <option value="Lebanon">Lebanon</option>
                                                                <option value="Lesotho">Lesotho</option>
                                                                <option value="Liberia">Liberia</option>
                                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya
                                                                </option>
                                                                <option value="Liechtenstein">Liechtenstein</option>
                                                                <option value="Lithuania">Lithuania</option>
                                                                <option value="Luxembourg">Luxembourg</option>
                                                                <option value="Macao">Macao</option>
                                                                <option value="Macedonia, The Former Yugoslav Republic of">
                                                                    Macedonia, The Former Yugoslav Republic of</option>
                                                                <option value="Madagascar">Madagascar</option>
                                                                <option value="Malawi">Malawi</option>
                                                                <option value="Malaysia">Malaysia</option>
                                                                <option value="Maldives">Maldives</option>
                                                                <option value="Mali">Mali</option>
                                                                <option value="Malta">Malta</option>
                                                                <option value="Marshall Islands">Marshall Islands</option>
                                                                <option value="Martinique">Martinique</option>
                                                                <option value="Mauritania">Mauritania</option>
                                                                <option value="Mauritius">Mauritius</option>
                                                                <option value="Mayotte">Mayotte</option>
                                                                <option value="Mexico">Mexico</option>
                                                                <option value="Micronesia, Federated States of">Micronesia,
                                                                    Federated States of</option>
                                                                <option value="Moldova, Republic of">Moldova, Republic of
                                                                </option>
                                                                <option value="Monaco">Monaco</option>
                                                                <option value="Mongolia">Mongolia</option>
                                                                <option value="Montenegro">Montenegro</option>
                                                                <option value="Montserrat">Montserrat</option>
                                                                <option value="Morocco">Morocco</option>
                                                                <option value="Mozambique">Mozambique</option>
                                                                <option value="Myanmar">Myanmar</option>
                                                                <option value="Namibia">Namibia</option>
                                                                <option value="Nauru">Nauru</option>
                                                                <option value="Nepal">Nepal</option>
                                                                <option value="Netherlands">Netherlands</option>
                                                                <option value="Netherlands Antilles">Netherlands Antilles
                                                                </option>
                                                                <option value="New Caledonia">New Caledonia</option>
                                                                <option value="New Zealand">New Zealand</option>
                                                                <option value="Nicaragua">Nicaragua</option>
                                                                <option value="Niger">Niger</option>
                                                                <option value="Nigeria">Nigeria</option>
                                                                <option value="Niue">Niue</option>
                                                                <option value="Norfolk Island">Norfolk Island</option>
                                                                <option value="Northern Mariana Islands">Northern Mariana
                                                                    Islands</option>
                                                                <option value="Norway">Norway</option>
                                                                <option value="Oman">Oman</option>
                                                                <option value="Pakistan">Pakistan</option>
                                                                <option value="Palau">Palau</option>
                                                                <option value="Palestinian Territory, Occupied">Palestinian
                                                                    Territory, Occupied</option>
                                                                <option value="Panama">Panama</option>
                                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                                <option value="Paraguay">Paraguay</option>
                                                                <option value="Peru">Peru</option>
                                                                <option value="Philippines">Philippines</option>
                                                                <option value="Pitcairn">Pitcairn</option>
                                                                <option value="Poland">Poland</option>
                                                                <option value="Portugal">Portugal</option>
                                                                <option value="Puerto Rico">Puerto Rico</option>
                                                                <option value="Qatar">Qatar</option>
                                                                <option value="Reunion">Reunion</option>
                                                                <option value="Romania">Romania</option>
                                                                <option value="Russian Federation">Russian Federation</option>
                                                                <option value="Rwanda">Rwanda</option>
                                                                <option value="Saint Helena">Saint Helena</option>
                                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis
                                                                </option>
                                                                <option value="Saint Lucia">Saint Lucia</option>
                                                                <option value="Saint Pierre and Miquelon">Saint Pierre and
                                                                    Miquelon</option>
                                                                <option value="Saint Vincent and The Grenadines">Saint Vincent
                                                                    and The Grenadines</option>
                                                                <option value="Samoa">Samoa</option>
                                                                <option value="San Marino">San Marino</option>
                                                                <option value="Sao Tome and Principe">Sao Tome and Principe
                                                                </option>
                                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                                <option value="Senegal">Senegal</option>
                                                                <option value="Serbia">Serbia</option>
                                                                <option value="Seychelles">Seychelles</option>
                                                                <option value="Sierra Leone">Sierra Leone</option>
                                                                <option value="Singapore">Singapore</option>
                                                                <option value="Slovakia">Slovakia</option>
                                                                <option value="Slovenia">Slovenia</option>
                                                                <option value="Solomon Islands">Solomon Islands</option>
                                                                <option value="Somalia">Somalia</option>
                                                                <option value="South Africa">South Africa</option>
                                                                <option value="South Georgia and The South Sandwich Islands">
                                                                    South Georgia and The South Sandwich Islands</option>
                                                                <option value="Spain">Spain</option>
                                                                <option value="Sri Lanka">Sri Lanka</option>
                                                                <option value="Sudan">Sudan</option>
                                                                <option value="Suriname">Suriname</option>
                                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen
                                                                </option>
                                                                <option value="Swaziland">Swaziland</option>
                                                                <option value="Sweden">Sweden</option>
                                                                <option value="Switzerland">Switzerland</option>
                                                                <option value="Syrian Arab Republic">Syrian Arab Republic
                                                                </option>
                                                                <option value="Taiwan, Province of China">Taiwan, Province of
                                                                    China</option>
                                                                <option value="Tajikistan">Tajikistan</option>
                                                                <option value="Tanzania, United Republic of">Tanzania, United
                                                                    Republic of</option>
                                                                <option value="Thailand">Thailand</option>
                                                                <option value="Timor-leste">Timor-leste</option>
                                                                <option value="Togo">Togo</option>
                                                                <option value="Tokelau">Tokelau</option>
                                                                <option value="Tonga">Tonga</option>
                                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                                <option value="Tunisia">Tunisia</option>
                                                                <option value="Turkey">Turkey</option>
                                                                <option value="Turkmenistan">Turkmenistan</option>
                                                                <option value="Turks and Caicos Islands">Turks and Caicos
                                                                    Islands</option>
                                                                <option value="Tuvalu">Tuvalu</option>
                                                                <option value="Uganda">Uganda</option>
                                                                <option value="Ukraine">Ukraine</option>
                                                                <option value="United Arab Emirates">United Arab Emirates
                                                                </option>
                                                                <option value="United Kingdom">United Kingdom</option>
                                                                <option value="United States">United States</option>
                                                                <option value="United States Minor Outlying Islands">United
                                                                    States Minor Outlying Islands</option>
                                                                <option value="Uruguay">Uruguay</option>
                                                                <option value="Uzbekistan">Uzbekistan</option>
                                                                <option value="Vanuatu">Vanuatu</option>
                                                                <option value="Venezuela">Venezuela</option>
                                                                <option value="Viet Nam">Viet Nam</option>
                                                                <option value="Virgin Islands, British">Virgin Islands, British
                                                                </option>
                                                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.
                                                                </option>
                                                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                                <option value="Western Sahara">Western Sahara</option>
                                                                <option value="Yemen">Yemen</option>
                                                                <option value="Zambia">Zambia</option>
                                                                <option value="Zimbabwe">Zimbabwe</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 --> --}}
                                    {{-- <div class="col-lg-6 responsive-column">
                                                <div class="input-box">
                                                    <label class="label-text">Country Code</label>
                                                    <div class="form-group">
                                                        <div class="select-contain w-auto">
                                                            <select class="select-contain-select">
                                                                <option value="country-code">Select country code</option>
                                                                <option value="1">United Kingdom (+44)</option>
                                                                <option value="2">United States (+1)</option>
                                                                <option value="3">Bangladesh (+880)</option>
                                                                <option value="4">Brazil (+55)</option>
                                                                <option value="5">China (+86)</option>
                                                                <option value="6">India (+91)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 --> --}}
                                    <div class="col-lg-12">
                                        <div class="input-box">
                                            <div class="form-group mb-0">
                                                <div class="custom-checkbox mb-0">
                                                    <input type="checkbox" id="receiveChb">
                                                    <label for="receiveChb">I want to receive Trizen's promotional
                                                        offers in the future</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-12 -->
                                </div>

                            </div><!-- end contact-form-action -->
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->
                    <div class="form-box">
                        <div class="form-title-wrap">
                            <h3 class="title">Your Card Information</h3>
                        </div><!-- form-title-wrap -->
                        <div class="form-content">
                            <div class="section-tab check-mark-tab text-center pb-4">
                                <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="credit-card-tab" data-toggle="tab"
                                            href="#credit-card" role="tab" aria-controls="credit-card"
                                            aria-selected="false">
                                            <i class="la la-check icon-element"></i>
                                            <img src="/images/payment-img.png" alt="">
                                            <span class="d-block pt-2">Payment with credit card</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="paypal-tab" data-toggle="tab" href="#paypal"
                                            role="tab" aria-controls="paypal" aria-selected="true">
                                            <i class="la la-check icon-element"></i>
                                            <img src="/images/paypal.png" alt="">
                                            <span class="d-block pt-2">Payment with PayPal</span>
                                        </a>
                                    </li>
                                    {{-- <li class="nav-item">
                                            <a class="nav-link" id="payoneer-tab" data-toggle="tab" href="#payoneer"
                                                role="tab" aria-controls="payoneer" aria-selected="true">
                                                <i class="la la-check icon-element"></i>
                                                <img src="images/payoneer.png" alt="">
                                                <span class="d-block pt-2">Payment with payoneer</span>
                                            </a>
                                        </li> --}}
                                </ul>
                            </div><!-- end section-tab -->
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="credit-card" role="tabpanel"
                                    aria-labelledby="credit-card-tab">
                                    <div class="contact-form-action">

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="input-box">
                                                    <label class="label-text">Card Holder Name</label>
                                                    <div class="form-group">
                                                        <span class="la la-credit-card form-icon"></span>
                                                        <input class="form-control" type="text" name="text"
                                                            placeholder="Card holder name">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-6">
                                                <div class="input-box">
                                                    <label class="label-text">Card Number</label>
                                                    <div class="form-group">
                                                        <span class="la la-credit-card form-icon"></span>
                                                        <input class="form-control" type="text" name="text"
                                                            placeholder="Card number">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="input-box">
                                                            <label class="label-text">Expiry Month</label>
                                                            <div class="form-group">
                                                                <span class="la la-credit-card form-icon"></span>
                                                                <input class="form-control" type="text" name="text"
                                                                    placeholder="MM">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="input-box">
                                                            <label class="label-text">Expiry Year</label>
                                                            <div class="form-group">
                                                                <span class="la la-credit-card form-icon"></span>
                                                                <input class="form-control" type="text" name="text"
                                                                    placeholder="YY">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-6">
                                                <div class="input-box">
                                                    <label class="label-text">CVV</label>
                                                    <div class="form-group">
                                                        <span class="la la-pencil form-icon"></span>
                                                        <input class="form-control" type="text" name="text"
                                                            placeholder="CVV">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-12">
                                                <div class="input-box">
                                                    <div class="form-group">
                                                        <div class="custom-checkbox">
                                                            <input type="checkbox" id="agreechb">
                                                            <label for="agreechb">By continuing, you agree to the <a
                                                                    href="#">Terms and Conditions</a>.</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                            <div class="col-lg-12">
                                                <div class="btn-box">
                                                    <button class="theme-btn" type="submit">Confirm
                                                        Booking</button>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                        </div>

                                    </div><!-- end contact-form-action -->
                                </div><!-- end tab-pane-->
                                <div class="tab-pane fade" id="paypal" role="tabpanel" aria-labelledby="paypal-tab">
                                    <div class="contact-form-action">
                                        <form method="post">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="input-box">
                                                        <label class="label-text">Email Address</label>
                                                        <div class="form-group">
                                                            <span class="la la-envelope form-icon"></span>
                                                            <input class="form-control" type="email" name="email"
                                                                placeholder="Enter email address">
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6">
                                                    <div class="input-box">
                                                        <label class="label-text">Password</label>
                                                        <div class="form-group">
                                                            <span class="la la-lock form-icon"></span>
                                                            <input class="form-control" type="text" name="text"
                                                                placeholder="Enter password">
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-12">
                                                    <div class="btn-box">
                                                        <a href="{{ route('processTransaction') }}"
                                                            class="btn btn-primary mt-3">Pay via Paypal</a>
                                                        @if (\Session::has('error'))
                                                            <div class="alert alert-danger">{{ \Session::get('error') }}
                                                            </div>
                                                            {{ \Session::forget('error') }}
                                                        @endif
                                                        @if (\Session::has('success'))
                                                            <div class="alert alert-success">
                                                                {{ \Session::get('success') }}</div>
                                                            {{ \Session::forget('success') }}
                                                        @endif
                                                    </div>
                                                </div><!-- end col-lg-12 -->
                                            </div>
                                        </form>
                                    </div><!-- end contact-form-action -->

                                </div><!-- end tab-pane-->
                                {{-- <div class="tab-pane fade" id="payoneer" role="tabpanel" aria-labelledby="payoneer-tab">
                                        <div class="contact-form-action">
                                            <form method="post">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="input-box">
                                                            <label class="label-text">Email Address</label>
                                                            <div class="form-group">
                                                                <span class="la la-envelope form-icon"></span>
                                                                <input class="form-control" type="email" name="email"
                                                                    placeholder="Enter email address">
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-6 -->
                                                    <div class="col-lg-6">
                                                        <div class="input-box">
                                                            <label class="label-text">Password</label>
                                                            <div class="form-group">
                                                                <span class="la la-lock form-icon"></span>
                                                                <input class="form-control" type="text" name="text"
                                                                    placeholder="Enter password">
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-6 -->
                                                    <div class="col-lg-12">

                                                        <div id="paypal-button-container"></div>

                                                    </div><!-- end col-lg-12 -->
                                                </div>
                                            </form>
                                        </div><!-- end contact-form-action -->
                                    </div><!-- end tab-pane--> --}}
                            </div><!-- end tab-content -->
                        </div><!-- end form-content -->
                    </div><!-- end form-box -->

                </div><!-- end col-lg-8 -->
                <div class="col-lg-4">

                    <div class="form-box booking-detail-form">
                        <div class="form-title-wrap">
                            <h3 class="title">Your Booking</h3>
                        </div><!-- end form-title-wrap -->

                        <div class="form-content">

                            <div class="card-item shadow-none radius-none mb-0">
                                @foreach (\App\Models\Booking::latest()->take(1)->get()
        as $key => $booking)
                                    <div class="card-img pb-4">
                                        <a href="room-details.html" class="d-block">
                                            <img src="{{ asset($booking->hotel->photo) }}" alt=" room-img">
                                        </a>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h3 class="card-title">{{ $booking->hotel->name }}</h3>
                                                <p class="card-meta">{{ $booking->hotel->address }}</p>
                                            </div>
                                            <div>
                                                <a href="room-details.html" class="btn ml-1"><i
                                                        class="la la-edit" data-toggle="tooltip" data-placement="top"
                                                        title="Edit"></i></a>
                                            </div>
                                        </div>
                                        <div class="section-block"></div>
                                        <ul class="list-items list-items-2 list-items-flush py-2">
                                            <li class="font-size-15"><span class="w-auto d-block mb-n1"><i
                                                        class="la la-calendar mr-1 font-size-17"></i>From<i
                                                        class="la la-calendar mr-1 font-size-17"></i>To
                                                </span>{{ $booking->daterange }}
                                            </li>
                                        </ul>
                                        <h3 class="card-title pb-3">Order Details</h3>
                                        <div class="section-block"></div>
                                        <ul class="list-items list-items-2 py-3">
                                            <li><span>Room Type:</span></li>

                                            <li><span>Room:</span> {{ $booking->Nbrooms }}
                                            </li>
                                            <li>
                                                <span>Guests:</span> {{ $booking->total_adults }}adults
                                            </li>
                                            <li>
                                                <span>Guests:</span> {{ $booking->total_children }} children
                                            </li>

                                        </ul>
                                        <div class="section-block"></div>
                                        <ul class="list-items list-items-2 pt-3">
                                            <li><span>Sub Total:</span>$240</li>
                                            <li><span>Taxes And Fees:</span>$5</li>
                                            <li><span>Total Price:</span>{{ $booking->hotel->price }} $</li>
                                        </ul>
                                    </div>
                                @endforeach
                            </div><!-- end card-item -->

                        </div><!-- end form-content -->

                    </div><!-- end form-box -->

                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end booking-area -->
    <!-- ================================
                                                                                                                                                                                                                                                                                                                                                                    END BOOKING AREA
                                                                                                                                                                                                                                                                                                                                                                ================================= -->

    <div class="section-block"></div>

    <!-- ================================
                                                                                                                                                                                                                                                                                                                                                                    START INFO AREA
                                                                                                                                                                                                                                                                                                                                                                ================================= -->
    <section class="info-area info-bg padding-top-90px padding-bottom-70px">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 responsive-column">
                    <a href="#" class="icon-box icon-layout-2 d-flex">
                        <div class="info-icon flex-shrink-0 bg-rgb text-color-2">
                            <i class="la la-phone"></i>
                        </div><!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">Need Help? Contact us</h4>
                            <p class="info__desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing
                            </p>
                        </div><!-- end info-content -->
                    </a><!-- end icon-box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <a href="#" class="icon-box icon-layout-2 d-flex">
                        <div class="info-icon flex-shrink-0 bg-rgb-2 text-color-3">
                            <i class="la la-money"></i>
                        </div><!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">Payments</h4>
                            <p class="info__desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing
                            </p>
                        </div><!-- end info-content -->
                    </a><!-- end icon-box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column">
                    <a href="#" class="icon-box icon-layout-2 d-flex">
                        <div class="info-icon flex-shrink-0 bg-rgb-3 text-color-4">
                            <i class="la la-times"></i>
                        </div><!-- end info-icon-->
                        <div class="info-content">
                            <h4 class="info__title">Cancel Policy</h4>
                            <p class="info__desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing
                            </p>
                        </div><!-- end info-content -->
                    </a><!-- end icon-box -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end info-area -->
    <!-- ================================
                                                                                                                                                                                                                                                                                                                                                                    END INFO AREA
                                                                                                                                                                                                                                                                                                                                                                ================================= -->

    <!-- ================================
                                                                                                                                                                                                                                                                                                                                                                    START CTA AREA
                                                                                                                                                                                                                                                                                                                                                                ================================= -->
    <section class="cta-area subscriber-area section-bg-2 padding-top-60px padding-bottom-60px">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="section-heading">
                        <p class="sec__desc text-white-50 pb-1">Newsletter sign up</p>
                        <h2 class="sec__title font-size-30 text-white">Subscribe to Get Special Offers</h2>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-7 -->
                <div class="col-lg-5">
                    <div class="subscriber-box">
                        <div class="contact-form-action">
                            <form action="#">
                                <div class="input-box">
                                    <label class="label-text text-white">Enter email address</label>
                                    <div class="form-group mb-0">
                                        <span class="la la-envelope form-icon"></span>
                                        <input class="form-control" type="email" name="email"
                                            placeholder="Email address">
                                        <button class="theme-btn theme-btn-small submit-btn"
                                            type="submit">Subscribe</button>
                                        <span class="font-size-14 pt-1 text-white-50"><i class="la la-lock mr-1"></i>Don't
                                            worry your information is safe with us.</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-5 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end cta-area -->
    <!-- ================================
                                                                                                                                                                                                                                                                                                                                                                    END CTA AREA
                                                                                                                                                                                                                                                                                                                                                                ================================= -->
@endsection

@section('scripts')
    <script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_SANDBOX_CLIENT_ID') }}"></script>
@endsection
