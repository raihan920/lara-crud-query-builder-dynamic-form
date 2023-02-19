<x-page-title title="Edit Students Record"></x-page-title>
@extends('master')

@section('content')
<h1 class="text-center py-2">Add New Record</h1>
<p>
    <a href="{{ url()->previous() }}" type="button" class="btn btn-dark">Go Back</a>
    <a href="{{ route('students.index') }}" type="button" class="btn btn-primary"><i class="bi bi-house-door"></i>
        Home</a>
</p>
@if (session()->has('message'))
<div class="alert {{ session()->get('alert-type') }} alert-dismissible fade show" role="alert">
    {{-- to print html code within blade template following syntax is used --}}
    {!! session()->get('message') !!}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="col-md-12 col-lg-12">
    <form method="POST" action="{{ route('students.update', $student->id) }}" class="needs-validation" novalidate="">
        @csrf
        @method('PUT')
        <div class="row g-3">
            <div class="col-12">
                <label for="fullName" class="form-label">Full name</label>
                <input type="text" name="name" class="form-control" id="fullName" placeholder="write your full name"
                    value="{{ $student->name }}" required="required">
                <div class="invalid-feedback">
                    Your full name should match your birth certificate name.
                </div>
            </div>

            <div class="col-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com"
                    required="required" value="{{ $student->email }}">
                <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                </div>
            </div>

            <div class="col-12">
                <label for="phoneNumber" class="form-label">Pnone Number</label>
                <input type="text" name="phone_number" class="form-control" id="phoneNumber"
                    placeholder="+880 123465789" value="{{ $student->phone_number }}" required="required">
                <div class="invalid-feedback">
                    Please enter your shipping address.
                </div>
            </div>

            <div class="col-6">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sex" value="male" id="male" @checked(old('sex', $student->sex) == 'male')>
                    <label class="form-check-label" for="male">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sex" id="female" value="female" @checked(old('sex', $student->sex) == 'female')>
                    <label class="form-check-label" for="female">
                        Female
                    </label>
                </div>
            </div>
            <div class="col-6">
                <select class="form-select" aria-label="Select Your Country" name="country">
                    <option >Select Your Country</option>
                    <option value="Afghanistan" @selected($student->country == 'Afghanistan')>Afghanistan</option>
                    <option value="Aland Islands" @selected($student->country == 'Åland Islands')>Åland Islands</option>
                    <option value="Albania" @selected($student->country == 'Albania')>Albania</option>
                    <option value="Algeria" @selected($student->country == 'Algeria')>Algeria</option>
                    <option value="American Samoa" @selected($student->country == 'American Samoa')>American Samoa</option>
                    <option value="Andorra" @selected($student->country == 'Andorra')>Andorra</option>
                    <option value="Angola" @selected($student->country == 'Angola')>Angola</option>
                    <option value="Anguilla" @selected($student->country == 'Anguilla')>Anguilla</option>
                    <option value="Antarctica" @selected($student->country == 'Antarctica')>Antarctica</option>
                    <option value="Antigua and Barbuda" @selected($student->country == 'Antigua & Barbuda')>Antigua & Barbuda</option>
                    <option value="Argentina" @selected($student->country == 'Argentina')>Argentina</option>
                    <option value="Armenia" @selected($student->country == 'Armenia')>Armenia</option>
                    <option value="Aruba" @selected($student->country == 'Aruba')>Aruba</option>
                    <option value="Australia" @selected($student->country == 'Australia')>Australia</option>
                    <option value="Austria" @selected($student->country == 'Austria')>Austria</option>
                    <option value="Azerbaijan" @selected($student->country == 'Azerbaijan')>Azerbaijan</option>
                    <option value="Bahamas" @selected($student->country == 'Bahamas')>Bahamas</option>
                    <option value="Bahrain" @selected($student->country == 'Bahrain')>Bahrain</option>
                    <option value="Bangladesh" @selected($student->country == 'Bangladesh')>Bangladesh</option>
                    <option value="Barbados" @selected($student->country == 'Barbados')>Barbados</option>
                    <option value="Belarus" @selected($student->country == 'Belarus')>Belarus</option>
                    <option value="Belgium" @selected($student->country == 'Belgium')>Belgium</option>
                    <option value="Belize" @selected($student->country == 'Belize')>Belize</option>
                    <option value="Benin" @selected($student->country == 'Benin')>Benin</option>
                    <option value="Bermuda" @selected($student->country == 'Bermuda')>Bermuda</option>
                    <option value="Bhutan" @selected($student->country == 'Bhutan')>Bhutan</option>
                    <option value="Bolivia" @selected($student->country == 'Bolivia')>Bolivia</option>
                    <option value="Bonaire, Sint Eustatius and Saba" @selected($student->country == 'Caribbean Netherlands')>Caribbean Netherlands</option>
                    <option value="Bosnia and Herzegovina" @selected($student->country == 'Bosnia & Herzegovina')>Bosnia & Herzegovina</option>
                    <option value="Botswana" @selected($student->country == 'Botswana')>Botswana</option>
                    <option value="Bouvet Island" @selected($student->country == 'Bouvet Island')>Bouvet Island</option>
                    <option value="Brazil" @selected($student->country == 'Brazil')>Brazil</option>
                    <option value="British Indian Ocean Territory" @selected($student->country == 'British Indian Ocean Territory')>British Indian Ocean Territory</option>
                    <option value="Brunei Darussalam" @selected($student->country == 'Brunei')>Brunei</option>
                    <option value="Bulgaria" @selected($student->country == 'Bulgaria')>Bulgaria</option>
                    <option value="Burkina Faso" @selected($student->country == 'Burkina Faso')>Burkina Faso</option>
                    <option value="Burundi" @selected($student->country == 'Burundi')>Burundi</option>
                    <option value="Cambodia" @selected($student->country == 'Cambodia')>Cambodia</option>
                    <option value="Cameroon" @selected($student->country == 'Cameroon')>Cameroon</option>
                    <option value="Canada" @selected($student->country == 'Canada')>Canada</option>
                    <option value="Cape Verde" @selected($student->country == 'Cape Verde')>Cape Verde</option>
                    <option value="Cayman Islands" @selected($student->country == 'Cayman Islands')>Cayman Islands</option>
                    <option value="Central African Republic" @selected($student->country == 'Central African Republic')>Central African Republic</option>
                    <option value="Chad" @selected($student->country == 'Chad')>Chad</option>
                    <option value="Chile" @selected($student->country == 'Chile')>Chile</option>
                    <option value="China" @selected($student->country == 'China')>China</option>
                    <option value="Christmas Island" @selected($student->country == 'Christmas Island')>Christmas Island</option>
                    <option value="Cocos (Keeling) Islands" @selected($student->country == 'Cocos (Keeling) Islands')>Cocos (Keeling) Islands</option>
                    <option value="Colombia" @selected($student->country == 'Colombia')>Colombia</option>
                    <option value="Comoros" @selected($student->country == 'Comoros')>Comoros</option>
                    <option value="Congo" @selected($student->country == 'Congo - Brazzaville')>Congo - Brazzaville</option>
                    <option value="Congo, Democratic Republic of the Congo" @selected($student->country == 'Congo - Kinshasa')>Congo - Kinshasa</option>
                    <option value="Cook Islands" @selected($student->country == 'Cook Islands')>Cook Islands</option>
                    <option value="Costa Rica" @selected($student->country == 'Costa Rica')>Costa Rica</option>
                    <option value="Cote D'Ivoire" @selected($student->country == 'Côte d’Ivoire')>Côte d’Ivoire</option>
                    <option value="Croatia" @selected($student->country == 'Croatia')>Croatia</option>
                    <option value="Cuba" @selected($student->country == 'Cuba')>Cuba</option>
                    <option value="Curacao" @selected($student->country == 'Curaçao')>Curaçao</option>
                    <option value="Cyprus" @selected($student->country == 'Cyprus')>Cyprus</option>
                    <option value="Czech Republic" @selected($student->country == 'Czechia')>Czechia</option>
                    <option value="Denmark" @selected($student->country == 'Denmark')>Denmark</option>
                    <option value="Djibouti" @selected($student->country == 'Djibouti')>Djibouti</option>
                    <option value="Dominica" @selected($student->country == 'Dominica')>Dominica</option>
                    <option value="Dominican Republic" @selected($student->country == 'Dominican Republic')>Dominican Republic</option>
                    <option value="Ecuador" @selected($student->country == 'Ecuador')>Ecuador</option>
                    <option value="Egypt" @selected($student->country == 'Egypt')>Egypt</option>
                    <option value="El Salvador" @selected($student->country == 'El Salvador')>El Salvador</option>
                    <option value="Equatorial Guinea" @selected($student->country == 'Equatorial Guinea')>Equatorial Guinea</option>
                    <option value="Eritrea" @selected($student->country == 'Eritrea')>Eritrea</option>
                    <option value="Estonia" @selected($student->country == 'Estonia')>Estonia</option>
                    <option value="Ethiopia" @selected($student->country == 'Ethiopia')>Ethiopia</option>
                    <option value="Falkland Islands (Malvinas)" @selected($student->country == 'Falkland Islands (Islas Malvinas)')>Falkland Islands (Islas Malvinas)</option>
                    <option value="Faroe Islands" @selected($student->country == 'Faroe Islands')>Faroe Islands</option>
                    <option value="Fiji" @selected($student->country == 'Fiji')>Fiji</option>
                    <option value="Finland" @selected($student->country == 'Finland')>Finland</option>
                    <option value="France" @selected($student->country == 'France')>France</option>
                    <option value="French Guiana" @selected($student->country == 'French Guiana')>French Guiana</option>
                    <option value="French Polynesia" @selected($student->country == 'French Polynesia')>French Polynesia</option>
                    <option value="French Southern Territories" @selected($student->country == 'French Southern Territories')>French Southern Territories</option>
                    <option value="Gabon" @selected($student->country == 'Gabon')>Gabon</option>
                    <option value="Gambia" @selected($student->country == 'Gambia')>Gambia</option>
                    <option value="Georgia" @selected($student->country == 'Georgia')>Georgia</option>
                    <option value="Germany" @selected($student->country == 'Germany')>Germany</option>
                    <option value="Ghana" @selected($student->country == 'Ghana')>Ghana</option>
                    <option value="Gibraltar" @selected($student->country == 'Gibraltar')>Gibraltar</option>
                    <option value="Greece" @selected($student->country == 'Greece')>Greece</option>
                    <option value="Greenland" @selected($student->country == 'Greenland')>Greenland</option>
                    <option value="Grenada" @selected($student->country == 'Grenada')>Grenada</option>
                    <option value="Guadeloupe" @selected($student->country == 'Guadeloupe')>Guadeloupe</option>
                    <option value="Guam" @selected($student->country == 'Guam')>Guam</option>
                    <option value="Guatemala" @selected($student->country == 'Guatemala')>Guatemala</option>
                    <option value="Guernsey" @selected($student->country == 'Guernsey')>Guernsey</option>
                    <option value="Guinea" @selected($student->country == 'Guinea')>Guinea</option>
                    <option value="Guinea-Bissau" @selected($student->country == 'Guinea-Bissau')>Guinea-Bissau</option>
                    <option value="Guyana" @selected($student->country == 'Guyana')>Guyana</option>
                    <option value="Haiti" @selected($student->country == 'Haiti')>Haiti</option>
                    <option value="Heard Island and Mcdonald Islands" @selected($student->country == 'Heard & McDonald Islands')>Heard & McDonald Islands</option>
                    <option value="Holy See (Vatican City State)" @selected($student->country == 'Vatican City')>Vatican City</option>
                    <option value="Honduras" @selected($student->country == 'Honduras')>Honduras</option>
                    <option value="Hong Kong" @selected($student->country == 'Hong Kong')>Hong Kong</option>
                    <option value="Hungary" @selected($student->country == 'Hungary')>Hungary</option>
                    <option value="Iceland" @selected($student->country == 'Iceland')>Iceland</option>
                    <option value="India" @selected($student->country == 'India')>India</option>
                    <option value="Indonesia" @selected($student->country == 'Indonesia')>Indonesia</option>
                    <option value="Iran, Islamic Republic of" @selected($student->country == 'Iran')>Iran</option>
                    <option value="Iraq" @selected($student->country == 'Iraq')>Iraq</option>
                    <option value="Ireland" @selected($student->country == 'Ireland')>Ireland</option>
                    <option value="Isle of Man" @selected($student->country == 'Isle of Man')>Isle of Man</option>
                    <option value="Israel" @selected($student->country == 'Israel')>Israel</option>
                    <option value="Italy" @selected($student->country == 'Italy')>Italy</option>
                    <option value="Jamaica" @selected($student->country == 'Jamaica')>Jamaica</option>
                    <option value="Japan" @selected($student->country == 'Japan')>Japan</option>
                    <option value="Jersey" @selected($student->country == 'Jersey')>Jersey</option>
                    <option value="Jordan" @selected($student->country == 'Jordan')>Jordan</option>
                    <option value="Kazakhstan" @selected($student->country == 'Kazakhstan')>Kazakhstan</option>
                    <option value="Kenya" @selected($student->country == 'Kenya')>Kenya</option>
                    <option value="Kiribati" @selected($student->country == 'Kiribati')>Kiribati</option>
                    <option value="Korea, Democratic People's Republic of" @selected($student->country == 'North Korea')>North Korea</option>
                    <option value="Korea, Republic of" @selected($student->country == 'South Korea')>South Korea</option>
                    <option value="Kosovo" @selected($student->country == 'Kosovo')>Kosovo</option>
                    <option value="Kuwait" @selected($student->country == 'Kuwait')>Kuwait</option>
                    <option value="Kyrgyzstan" @selected($student->country == 'Kyrgyzstan')>Kyrgyzstan</option>
                    <option value="Lao People's Democratic Republic" @selected($student->country == 'Laos')>Laos</option>
                    <option value="Latvia" @selected($student->country == 'Latvia')>Latvia</option>
                    <option value="Lebanon" @selected($student->country == 'Lebanon')>Lebanon</option>
                    <option value="Lesotho" @selected($student->country == 'Lesotho')>Lesotho</option>
                    <option value="Liberia" @selected($student->country == 'Liberia')>Liberia</option>
                    <option value="Libyan Arab Jamahiriya" @selected($student->country == 'Libya')>Libya</option>
                    <option value="Liechtenstein" @selected($student->country == 'Liechtenstein')>Liechtenstein</option>
                    <option value="Lithuania" @selected($student->country == 'Lithuania')>Lithuania</option>
                    <option value="Luxembourg" @selected($student->country == 'Luxembourg')>Luxembourg</option>
                    <option value="Macao" @selected($student->country == 'Macao')>Macao</option>
                    <option value="Macedonia, the Former Yugoslav Republic of" @selected($student->country == 'North Macedonia')>North Macedonia</option>
                    <option value="Madagascar" @selected($student->country == 'Madagascar')>Madagascar</option>
                    <option value="Malawi" @selected($student->country == 'Malawi')>Malawi</option>
                    <option value="Malaysia" @selected($student->country == 'Malaysia')>Malaysia</option>
                    <option value="Maldives" @selected($student->country == 'Maldives')>Maldives</option>
                    <option value="Mali" @selected($student->country == 'Mali')>Mali</option>
                    <option value="Malta" @selected($student->country == 'Malta')>Malta</option>
                    <option value="Marshall Islands" @selected($student->country == 'Marshall Islands')>Marshall Islands</option>
                    <option value="Martinique" @selected($student->country == 'Martinique')>Martinique</option>
                    <option value="Mauritania" @selected($student->country == 'Mauritania')>Mauritania</option>
                    <option value="Mauritius" @selected($student->country == 'Mauritius')>Mauritius</option>
                    <option value="Mayotte" @selected($student->country == 'Mayotte')>Mayotte</option>
                    <option value="Mexico" @selected($student->country == 'Mexico')>Mexico</option>
                    <option value="Micronesia, Federated States of" @selected($student->country == 'Micronesia')>Micronesia</option>
                    <option value="Moldova, Republic of" @selected($student->country == 'Moldova')>Moldova</option>
                    <option value="Monaco" @selected($student->country == 'Monaco')>Monaco</option>
                    <option value="Mongolia" @selected($student->country == 'Mongolia')>Mongolia</option>
                    <option value="Montenegro" @selected($student->country == 'Montenegro')>Montenegro</option>
                    <option value="Montserrat" @selected($student->country == 'Montserrat')>Montserrat</option>
                    <option value="Morocco" @selected($student->country == 'Morocco')>Morocco</option>
                    <option value="Mozambique" @selected($student->country == 'Mozambique')>Mozambique</option>
                    <option value="Myanmar" @selected($student->country == 'Myanmar (Burma)')>Myanmar (Burma)</option>
                    <option value="Namibia" @selected($student->country == 'Namibia')>Namibia</option>
                    <option value="Nauru" @selected($student->country == 'Nauru')>Nauru</option>
                    <option value="Nepal" @selected($student->country == 'Nepal')>Nepal</option>
                    <option value="Netherlands" @selected($student->country == 'Netherlands')>Netherlands</option>
                    <option value="Netherlands Antilles" @selected($student->country == 'Curaçao')>Curaçao</option>
                    <option value="New Caledonia" @selected($student->country == 'New Caledonia')>New Caledonia</option>
                    <option value="New Zealand" @selected($student->country == 'New Zealand')>New Zealand</option>
                    <option value="Nicaragua" @selected($student->country == 'Nicaragua')>Nicaragua</option>
                    <option value="Niger" @selected($student->country == 'Niger')>Niger</option>
                    <option value="Nigeria" @selected($student->country == 'Nigeria')>Nigeria</option>
                    <option value="Niue" @selected($student->country == 'Niue')>Niue</option>
                    <option value="Norfolk Island" @selected($student->country == 'Norfolk Island')>Norfolk Island</option>
                    <option value="Northern Mariana Islands" @selected($student->country == 'Northern Mariana Islands')>Northern Mariana Islands</option>
                    <option value="Norway" @selected($student->country == 'Norway')>Norway</option>
                    <option value="Oman" @selected($student->country == 'Oman')>Oman</option>
                    <option value="Pakistan" @selected($student->country == 'Pakistan')>Pakistan</option>
                    <option value="Palau" @selected($student->country == 'Palau')>Palau</option>
                    <option value="Palestinian Territory, Occupied" @selected($student->country == 'Palestine')>Palestine</option>
                    <option value="Panama" @selected($student->country == 'Panama')>Panama</option>
                    <option value="Papua New Guinea" @selected($student->country == 'Papua New Guinea')>Papua New Guinea</option>
                    <option value="Paraguay" @selected($student->country == 'Paraguay')>Paraguay</option>
                    <option value="Peru" @selected($student->country == 'Peru')>Peru</option>
                    <option value="Philippines" @selected($student->country == 'Philippines')>Philippines</option>
                    <option value="Pitcairn" @selected($student->country == 'Pitcairn Islands')>Pitcairn Islands</option>
                    <option value="Poland" @selected($student->country == 'Poland')>Poland</option>
                    <option value="Portugal" @selected($student->country == 'Portugal')>Portugal</option>
                    <option value="Puerto Rico" @selected($student->country == 'Puerto Rico')>Puerto Rico</option>
                    <option value="Qatar" @selected($student->country == 'Qatar')>Qatar</option>
                    <option value="Reunion" @selected($student->country == 'Réunion')>Réunion</option>
                    <option value="Romania" @selected($student->country == 'Romania')>Romania</option>
                    <option value="Russian Federation" @selected($student->country == 'Russia')>Russia</option>
                    <option value="Rwanda" @selected($student->country == 'Rwanda')>Rwanda</option>
                    <option value="Saint Barthelemy" @selected($student->country == 'St. Barthélemy')>St. Barthélemy</option>
                    <option value="Saint Helena" @selected($student->country == 'St. Helena')>St. Helena</option>
                    <option value="Saint Kitts and Nevis" @selected($student->country == 'St. Kitts & Nevis')>St. Kitts & Nevis</option>
                    <option value="Saint Lucia" @selected($student->country == 'St. Lucia')>St. Lucia</option>
                    <option value="Saint Martin" @selected($student->country == 'St. Martin')>St. Martin</option>
                    <option value="Saint Pierre and Miquelon" @selected($student->country == 'St. Pierre & Miquelon')>St. Pierre & Miquelon</option>
                    <option value="Saint Vincent and the Grenadines" @selected($student->country == 'St. Vincent & Grenadines')>St. Vincent & Grenadines</option>
                    <option value="Samoa" @selected($student->country == 'Samoa')>Samoa</option>
                    <option value="San Marino" @selected($student->country == 'San Marino')>San Marino</option>
                    <option value="Sao Tome and Principe" @selected($student->country == 'São Tomé & Príncipe')>São Tomé & Príncipe</option>
                    <option value="Saudi Arabia" @selected($student->country == 'Saudi Arabia')>Saudi Arabia</option>
                    <option value="Senegal" @selected($student->country == 'Senegal')>Senegal</option>
                    <option value="Serbia" @selected($student->country == 'Serbia')>Serbia</option>
                    <option value="Serbia and Montenegro" @selected($student->country == 'Serbia')>Serbia</option>
                    <option value="Seychelles" @selected($student->country == 'Seychelles')>Seychelles</option>
                    <option value="Sierra Leone" @selected($student->country == 'Sierra Leone')>Sierra Leone</option>
                    <option value="Singapore" @selected($student->country == 'Singapore')>Singapore</option>
                    <option value="Sint Maarten" @selected($student->country == 'Sint Maarten')>Sint Maarten</option>
                    <option value="Slovakia" @selected($student->country == 'Slovakia')>Slovakia</option>
                    <option value="Slovenia" @selected($student->country == 'Slovenia')>Slovenia</option>
                    <option value="Solomon Islands" @selected($student->country == 'Solomon Islands')>Solomon Islands</option>
                    <option value="Somalia" @selected($student->country == 'Somalia')>Somalia</option>
                    <option value="South Africa" @selected($student->country == 'South Africa')>South Africa</option>
                    <option value="South Georgia and the South Sandwich Islands" @selected($student->country == 'South Georgia & South Sandwich Islands')>South Georgia & South Sandwich Islands</option>
                    <option value="South Sudan" @selected($student->country == 'South Sudan')>South Sudan</option>
                    <option value="Spain" @selected($student->country == 'Spain')>Spain</option>
                    <option value="Sri Lanka" @selected($student->country == 'Sri Lanka')>Sri Lanka</option>
                    <option value="Sudan" @selected($student->country == 'Sudan')>Sudan</option>
                    <option value="Suriname" @selected($student->country == 'Suriname')>Suriname</option>
                    <option value="Svalbard and Jan Mayen" @selected($student->country == 'Svalbard & Jan Mayen')>Svalbard & Jan Mayen</option>
                    <option value="Swaziland" @selected($student->country == 'Eswatini')>Eswatini</option>
                    <option value="Sweden" @selected($student->country == 'Sweden')>Sweden</option>
                    <option value="Switzerland" @selected($student->country == 'Switzerland')>Switzerland</option>
                    <option value="Syrian Arab Republic" @selected($student->country == 'Syria')>Syria</option>
                    <option value="Taiwan, Province of China" @selected($student->country == 'Taiwan')>Taiwan</option>
                    <option value="Tajikistan" @selected($student->country == 'Tajikistan')>Tajikistan</option>
                    <option value="Tanzania, United Republic of" @selected($student->country == 'Tanzania')>Tanzania</option>
                    <option value="Thailand" @selected($student->country == 'Thailand')>Thailand</option>
                    <option value="Timor-Leste" @selected($student->country == 'Timor-Leste')>Timor-Leste</option>
                    <option value="Togo" @selected($student->country == 'Togo')>Togo</option>
                    <option value="Tokelau" @selected($student->country == 'Tokelau')>Tokelau</option>
                    <option value="Tonga" @selected($student->country == 'Tonga')>Tonga</option>
                    <option value="Trinidad and Tobago" @selected($student->country == 'Trinidad & Tobago')>Trinidad & Tobago</option>
                    <option value="Tunisia" @selected($student->country == 'Tunisia')>Tunisia</option>
                    <option value="Turkey" @selected($student->country == 'Turkey')>Turkey</option>
                    <option value="Turkmenistan" @selected($student->country == 'Turkmenistan')>Turkmenistan</option>
                    <option value="Turks and Caicos Islands" @selected($student->country == 'Turks & Caicos Islands')>Turks & Caicos Islands</option>
                    <option value="Tuvalu" @selected($student->country == 'Tuvalu')>Tuvalu</option>
                    <option value="Uganda" @selected($student->country == 'Uganda')>Uganda</option>
                    <option value="Ukraine" @selected($student->country == 'Ukraine')>Ukraine</option>
                    <option value="United Arab Emirates" @selected($student->country == 'United Arab Emirates')>United Arab Emirates</option>
                    <option value="United Kingdom" @selected($student->country == 'United Kingdom')>United Kingdom</option>
                    <option value="United States" @selected($student->country == 'United States')>United States</option>
                    <option value="United States Minor Outlying Islands" @selected($student->country == 'U.S. Outlying Islands')>U.S. Outlying Islands</option>
                    <option value="Uruguay" @selected($student->country == 'Uruguay')>Uruguay</option>
                    <option value="Uzbekistan" @selected($student->country == 'Uzbekistan')>Uzbekistan</option>
                    <option value="Vanuatu" @selected($student->country == 'Vanuatu')>Vanuatu</option>
                    <option value="Venezuela" @selected($student->country == 'Venezuela')>Venezuela</option>
                    <option value="Viet Nam" @selected($student->country == 'Vietnam')>Vietnam</option>
                    <option value="Virgin Islands, British" @selected($student->country == 'British Virgin Islands')>British Virgin Islands</option>
                    <option value="Virgin Islands, U.s." @selected($student->country == 'U.S. Virgin Islands')>U.S. Virgin Islands</option>
                    <option value="Wallis and Futuna" @selected($student->country == 'Wallis & Futuna')>Wallis & Futuna</option>
                    <option value="Western Sahara" @selected($student->country == 'Western Sahara')>Western Sahara</option>
                    <option value="Yemen" @selected($student->country == 'Yemen')>Yemen</option>
                    <option value="Zambia" @selected($student->country == 'Zambia')>Zambia</option>
                    <option value="Zimbabwe" @selected($student->country == 'Zimbabwe')>Zimbabwe</option>


                </select>
            </div>

            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" name="comment" id="comment" rows="4">{{ $student->comment }}</textarea>
                <label for="comment">Comments</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" name="testify" id="testify" @checked(old('testify', $student->testify))>
                <label class="form-check-label" for="testify">
                    I hereby testify that all the given information is true to the best of my knowledge.
                </label>
            </div>

        </div>
        <hr>
        <button class="w-100 btn btn-primary btn-lg" type="submit">Update Data</button>
    </form>
</div>
@endsection
