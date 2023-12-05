<!DOCTYPE html>
<html>

@include('invoice.main.head')


<body>
    <div class="main_wrap">
        @include('invoice.main.sidebar')
        @include('invoice.main.header')
        <div class="content-wrap">
            <div class="inner-content">
                <div class="outer-width" data-aos="fade-down">
                    <div class="role-name">
                        <div class="invoice-tabs">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-invoice-details-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-invoice-details" type="button" role="tab"
                                        aria-controls="pills-invoice-details" aria-selected="true">Invoice
                                        Details</button>
                                </li>
                                 

                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-invoice-details" role="tabpanel"
                                    aria-labelledby="pills-invoice-details-tab" tabindex="0">
                                    <div class="box-shadow-1 border-5 p-30 outer-width">
                                        <div class="inner-box">
                                            <div class="invoice-heading">
                                                <h2>Invoice</h2>
                                                <input type="text" class="form-control" value="Invoice">
                                            </div>
                                            <div class="invoice-sub-heading">
                                                <button type="submit"> <i class="fas fa-plus-square"></i> Add Sub
                                                    Title</button>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter subtitle here....">

                                            </div>
                                            <div class="logo-dates-wrap">
                                                <div class="dates-detail">
                                                    <ul>
                                                        <li>
                                                            <div class="label-wrap">
                                                                <label class="">Invoice No<span
                                                                        class="astric inside-label">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    value="Invoice No">
                                                                <span class="astric outside-label">*</span>
                                                            </div>
                                                            <div class="input-wrap">
                                                                <input type="text" class="form-control" value="A00001">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="label-wrap">
                                                                <label class="">Invoice Date<span
                                                                        class="astric inside-label">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    value="Invoice Date">
                                                                <span class="astric outside-label">*</span>
                                                            </div>
                                                            <div class="input-wrap">
                                                                <div class="input-group">
                                                                    <i class="fas fa-calendar-week"></i>
                                                                    <input type="text"
                                                                        class="datepicker_input form-control datepicker-input"
                                                                        placeholder="30/08/2023" required=""
                                                                        aria-label="From Date">
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="label-wrap">
                                                                <label class="">Due Date<span
                                                                        class="astric inside-label">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    value="Due Date">
                                                                <span class="astric outside-label">*</span>
                                                            </div>
                                                            <div class="input-wrap">
                                                                <div class="input-group">
                                                                    <i class="fas fa-calendar-week"></i>
                                                                    <input type="text"
                                                                        class="datepicker_input form-control datepicker-input"
                                                                        placeholder="30/08/2023" required=""
                                                                        aria-label="From Date">
                                                                </div>
                                                            </div>
                                                            <div class="changeduedate">
                                                                <a class="common-link" data-bs-toggle="modal"
                                                                    data-bs-target="#changeduedate"><i
                                                                        class="fas fa-cog"></i></a>
                                                                <a class="common-link"><i class="fas fa-times"></i></a>
                                                            </div>
                                                        </li>

                                                        <div class="add-field">
                                                            <button type="button"> <i class="fas fa-plus-square"></i>Add
                                                                More Fields</button>
                                                        </div>
                                                    </ul>

                                                </div>
                                                <div class="business-logo">
                                                    <div class="uploadFile" style="margin-right: 10px;">
                                                        <div class="upload-wrap">
                                                            <i class="fas fa-image"></i>
                                                            <p class="upload-files"> Add Business Logo</p>
                                                        </div>
                                                        <input type="file" class="inputfile form-control" accept=".jpg, .jpeg, .png" name="file" id="fileInput">
                                                    </div>
                                                    <div class="image-preview">
                                                        <img id="previewImage" src="#" alt="Preview" style="display: none; max-width: 50%; max-height: 50%; object-fit: cover;">
                                                    </div>
                                                </div>
                                            </div>
                                      
                                            <div class="table-items">
                                                <ul id="myContainer">
                                                    <li>
                                                        <div class="input-flds">
                                                            <div class="item-list first-item-list">
                                                                <span class="itemname head-list">Item</span>
                                                                <input type="text" class="form-control itemname"
                                                                    placeholder="Item Name">
                                                            </div>
                                                            <div class="item-list">
                                                             <span class="head-list">GST Rate</span>
                                                                <div class="cstm-input">
                                                                    <input type="text" class="form-control gst-rate"
                                                                        placeholder="">
                                                                    <span>%</span>
                                                                </div>
                                                            </div>
                                                            <div class="item-list">
                                                             <span class="head-list">Quantity</span>

                                                                <div class="cstm-input">
                                                                    <input type="number" class="form-control quantity"
                                                                        placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="item-list">
                                                             <span class="head-list">Rate</span>
                                                                <div class="cstm-input">
                                                                    <input type="number" class="form-control rate"
                                                                        placeholder="">
                                                                    <span>$</span>
                                                                </div>
                                                            </div>
                                                            <div class="item-list">
                                                             <span class="head-list">Amount</span>
                                                                <div class="cstm-input">
                                                                    <input type="number" class="form-control amount"
                                                                        placeholder="">
                                                                    <span>$</span>
                                                                </div>
                                                            </div>
                                                            <div class="item-list">
                                                             <span class="head-list">IGST</span>
                                                                <div class="cstm-input">
                                                                    <input type="number" class="form-control igst"
                                                                        placeholder="">
                                                                    <span>$</span>
                                                                </div>
                                                            </div>
                                                            <div class="item-list">
                                                             <span class="head-list">TOTAL</span>

                                                                <div class="cstm-input">
                                                                    <input type="number" class="form-control total"
                                                                        placeholder="">
                                                                    <span>$</span>
                                                                </div>
                                                            </div>                                                        
                                                            <div class="item-list">
                                                             <span class="head-list"></span>
                                                                <a href="" class="cross_icon"><i
                                                                        class="fas fa-times"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="descri-thumb-row">
                                                            <div class="add-field description">
                                                                <button type="button"> <i class="fas fa-plus-square"></i>Add
                                                                    Description</button>
                                                                <textarea class="form-control" style="height:200px"></textarea>
                                                            </div>
                                                            <div class="add-field thumbnail">
                                                                <button type="button"> <i class="fas fa-image"></i>Add
                                                                    Thumbnail</button>
                                                                <div class="uploadFile">
                                                                    <div class="upload-wrap">
                                                                        <i class="fas fa-plus-square"></i>
                                                                        <p class="upload-files"> Upload Thumbnail</p>
                                                                    </div>
                                                                    <!-- <span class="filename">No File Chosen</span> -->
                                                                    <input type="file" class="inputfile form-control" name="file">
                                                                </div>
                                                            </div>
                                                            <div class="add-field new-line">
                                                                <button type="button" id="appendButton"> <i class="fas fa-plus-square"></i>Add new
                                                                    Line</button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="total-amount">
                                                <div class="sub-total">
                                                    <p>Amount<span>$9.10</span></p>
                                                    <p>IGST<span>$1.00</span></p>
                                                </div>
                                                <div class="grand_total">
                                                    <p>Total <span>$10.18</span></p>
                                                </div>
                                                <div class="in-words">
                                                    <p>Total (In words) 
                                                        <!-- <a href="" class="cross_icon"><i class="fas fa-times"></i></a> -->
                                                            </p>
                                                    <p class="amount-in-words">One Dolloar and Eighteen Cents Only</p>
                                                </div>

                                                <div class="mb-100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 
                            </div>
                            <div class="steps-btn">
                                <a href="create-invoice.html" class="green-btn border-btn">Save As Draft</a>
                                <a href="create-invoice.html" class="green-btn">Save & Continue</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- edit bank deatil modal -->
    <div class="modal fade common-modal" id="add_bank_dtl" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="heading">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Bank Account</h1>
                        <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <img src="assets/image/close.png">
                        </button>
                    </div>
                    <hr class="cstm-line">
                    <div class="bank-details">
                        <p class="modal-cstm-titiles">Bank Details*</p>
                        <!-- Bank Details*    -->
                        <form class="add_new_account">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Country</label>
                                        <select class="form-control drop-select">
                                            <option value="">Select Country</option>
                                            <option value="1">Afghanistan</option>
                                            <option value="2">Albania</option>
                                            <option value="3">Algeria</option>
                                            <option value="4">American Samoa
                                            </option>
                                            <option value="5">Andorra</option>
                                            <option value="6">Angola</option>
                                            <option value="7">Anguilla</option>
                                            <option value="8">Antarctica</option>
                                            <option value="9">Antigua And Barbuda
                                            </option>
                                            <option value="10">Argentina</option>
                                            <option value="11">Armenia</option>
                                            <option value="12">Aruba</option>
                                            <option value="13">Australia</option>
                                            <option value="14">Austria</option>
                                            <option value="15">Azerbaijan</option>
                                            <option value="16">Bahamas The</option>
                                            <option value="17">Bahrain</option>
                                            <option value="18">Bangladesh</option>
                                            <option value="19">Barbados</option>
                                            <option value="20">Belarus</option>
                                            <option value="21">Belgium</option>
                                            <option value="22">Belize</option>
                                            <option value="23">Benin</option>
                                            <option value="24">Bermuda</option>
                                            <option value="25">Bhutan</option>
                                            <option value="26">Bolivia</option>
                                            <option value="27">Bosnia and
                                                Herzegovina
                                            </option>
                                            <option value="28">Botswana</option>
                                            <option value="29">Bouvet Island
                                            </option>
                                            <option value="30">Brazil</option>
                                            <option value="31">British Indian Ocean
                                                Territory</option>
                                            <option value="32">Brunei</option>
                                            <option value="33">Bulgaria</option>
                                            <option value="34">Burkina Faso</option>
                                            <option value="35">Burundi</option>
                                            <option value="36">Cambodia</option>
                                            <option value="37">Cameroon</option>
                                            <option value="38">Canada</option>
                                            <option value="39">Cape Verde</option>
                                            <option value="40">Cayman Islands
                                            </option>
                                            <option value="41">Central African
                                                Republic
                                            </option>
                                            <option value="42">Chad</option>
                                            <option value="43">Chile</option>
                                            <option value="44">China</option>
                                            <option value="45">Christmas Island
                                            </option>
                                            <option value="46">Cocos (Keeling)
                                                Islands
                                            </option>
                                            <option value="47">Colombia</option>
                                            <option value="48">Comoros</option>
                                            <option value="49">Republic Of The Congo
                                            </option>
                                            <option value="50">Democratic Republic
                                                Of The
                                                Congo</option>
                                            <option value="51">Cook Islands</option>
                                            <option value="52">Costa Rica</option>
                                            <option value="53">Cote D'Ivoire (Ivory
                                                Coast)
                                            </option>
                                            <option value="54">Croatia (Hrvatska)
                                            </option>
                                            <option value="55">Cuba</option>
                                            <option value="56">Cyprus</option>
                                            <option value="57">Czech Republic
                                            </option>
                                            <option value="58">Denmark</option>
                                            <option value="59">Djibouti</option>
                                            <option value="60">Dominica</option>
                                            <option value="61">Dominican Republic
                                            </option>
                                            <option value="62">East Timor</option>
                                            <option value="63">Ecuador</option>
                                            <option value="64">Egypt</option>
                                            <option value="65">El Salvador</option>
                                            <option value="66">Equatorial Guinea
                                            </option>
                                            <option value="67">Eritrea</option>
                                            <option value="68">Estonia</option>
                                            <option value="69">Ethiopia</option>
                                            <option value="70">External Territories
                                                of
                                                Australia</option>
                                            <option value="71">Falkland Islands
                                            </option>
                                            <option value="72">Faroe Islands
                                            </option>
                                            <option value="73">Fiji Islands</option>
                                            <option value="74">Finland</option>
                                            <option value="75">France</option>
                                            <option value="76">French Guiana
                                            </option>
                                            <option value="77">French Polynesia
                                            </option>
                                            <option value="78">French Southern
                                                Territories
                                            </option>
                                            <option value="79">Gabon</option>
                                            <option value="80">Gambia The</option>
                                            <option value="81">Georgia</option>
                                            <option value="82">Germany</option>
                                            <option value="83">Ghana</option>
                                            <option value="84">Gibraltar</option>
                                            <option value="85">Greece</option>
                                            <option value="86">Greenland</option>
                                            <option value="87">Grenada</option>
                                            <option value="88">Guadeloupe</option>
                                            <option value="89">Guam</option>
                                            <option value="90">Guatemala</option>
                                            <option value="91">Guernsey and Alderney
                                            </option>
                                            <option value="92">Guinea</option>
                                            <option value="93">Guinea-Bissau
                                            </option>
                                            <option value="94">Guyana</option>
                                            <option value="95">Haiti</option>
                                            <option value="96">Heard and McDonald
                                                Islands
                                            </option>
                                            <option value="97">Honduras</option>
                                            <option value="98">Hong Kong S.A.R.
                                            </option>
                                            <option value="99">Hungary</option>
                                            <option value="100">Iceland</option>
                                            <option value="101">India</option>
                                            <option value="102">Indonesia</option>
                                            <option value="103">Iran</option>
                                            <option value="104">Iraq</option>
                                            <option value="105">Ireland</option>
                                            <option value="106">Israel</option>
                                            <option value="107">Italy</option>
                                            <option value="108">Jamaica</option>
                                            <option value="109">Japan</option>
                                            <option value="110">Jersey</option>
                                            <option value="111">Jordan</option>
                                            <option value="112">Kazakhstan</option>
                                            <option value="113">Kenya</option>
                                            <option value="114">Kiribati</option>
                                            <option value="115">Korea North</option>
                                            <option value="116">Korea South</option>
                                            <option value="117">Kuwait</option>
                                            <option value="118">Kyrgyzstan</option>
                                            <option value="119">Laos</option>
                                            <option value="120">Latvia</option>
                                            <option value="121">Lebanon</option>
                                            <option value="122">Lesotho</option>
                                            <option value="123">Liberia</option>
                                            <option value="124">Libya</option>
                                            <option value="125">Liechtenstein
                                            </option>
                                            <option value="126">Lithuania</option>
                                            <option value="127">Luxembourg</option>
                                            <option value="128">Macau S.A.R.
                                            </option>
                                            <option value="129">Macedonia</option>
                                            <option value="130">Madagascar</option>
                                            <option value="131">Malawi</option>
                                            <option value="132">Malaysia</option>
                                            <option value="133">Maldives</option>
                                            <option value="134">Mali</option>
                                            <option value="135">Malta</option>
                                            <option value="136">Man (Isle of)
                                            </option>
                                            <option value="137">Marshall Islands
                                            </option>
                                            <option value="138">Martinique</option>
                                            <option value="139">Mauritania</option>
                                            <option value="140">Mauritius</option>
                                            <option value="141">Mayotte</option>
                                            <option value="142">Mexico</option>
                                            <option value="143">Micronesia</option>
                                            <option value="144">Moldova</option>
                                            <option value="145">Monaco</option>
                                            <option value="146">Mongolia</option>
                                            <option value="147">Montserrat</option>
                                            <option value="148">Morocco</option>
                                            <option value="149">Mozambique</option>
                                            <option value="150">Myanmar</option>
                                            <option value="151">Namibia</option>
                                            <option value="152">Nauru</option>
                                            <option value="153">Nepal</option>
                                            <option value="154">Netherlands Antilles
                                            </option>
                                            <option value="155">Netherlands The
                                            </option>
                                            <option value="156">New Caledonia
                                            </option>
                                            <option value="157">New Zealand</option>
                                            <option value="158">Nicaragua</option>
                                            <option value="159">Niger</option>
                                            <option value="160">Nigeria</option>
                                            <option value="161">Niue</option>
                                            <option value="162">Norfolk Island
                                            </option>
                                            <option value="163">Northern Mariana
                                                Islands
                                            </option>
                                            <option value="164">Norway</option>
                                            <option value="165">Oman</option>
                                            <option value="166">Pakistan</option>
                                            <option value="167">Palau</option>
                                            <option value="168">Palestinian
                                                Territory
                                                Occupied</option>
                                            <option value="169">Panama</option>
                                            <option value="170">Papua new Guinea
                                            </option>
                                            <option value="171">Paraguay</option>
                                            <option value="172">Peru</option>
                                            <option value="173">Philippines</option>
                                            <option value="174">Pitcairn Island
                                            </option>
                                            <option value="175">Poland</option>
                                            <option value="176">Portugal</option>
                                            <option value="177">Puerto Rico</option>
                                            <option value="178">Qatar</option>
                                            <option value="179">Reunion</option>
                                            <option value="180">Romania</option>
                                            <option value="181">Russia</option>
                                            <option value="182">Rwanda</option>
                                            <option value="183">Saint Helena
                                            </option>
                                            <option value="184">Saint Kitts And
                                                Nevis
                                            </option>
                                            <option value="185">Saint Lucia</option>
                                            <option value="186">Saint Pierre and
                                                Miquelon
                                            </option>
                                            <option value="187">Saint Vincent And
                                                The
                                                Grenadines</option>
                                            <option value="188">Samoa</option>
                                            <option value="189">San Marino</option>
                                            <option value="190">Sao Tome and
                                                Principe
                                            </option>
                                            <option value="191">Saudi Arabia
                                            </option>
                                            <option value="192">Senegal</option>
                                            <option value="193">Serbia</option>
                                            <option value="194">Seychelles</option>
                                            <option value="195">Sierra Leone
                                            </option>
                                            <option value="196">Singapore</option>
                                            <option value="197">Slovakia</option>
                                            <option value="198">Slovenia</option>
                                            <option value="199">Smaller Territories
                                                of the
                                                UK</option>
                                            <option value="200">Solomon Islands
                                            </option>
                                            <option value="201">Somalia</option>
                                            <option value="202">South Africa
                                            </option>
                                            <option value="203">South Georgia
                                            </option>
                                            <option value="204">South Sudan</option>
                                            <option value="205">Spain</option>
                                            <option value="206">Sri Lanka</option>
                                            <option value="207">Sudan</option>
                                            <option value="208">Suriname</option>
                                            <option value="209">Svalbard And Jan
                                                Mayen
                                                Islands</option>
                                            <option value="210">Swaziland</option>
                                            <option value="211">Sweden</option>
                                            <option value="212">Switzerland</option>
                                            <option value="213">Syria</option>
                                            <option value="214">Taiwan</option>
                                            <option value="215">Tajikistan</option>
                                            <option value="216">Tanzania</option>
                                            <option value="217">Thailand</option>
                                            <option value="218">Togo</option>
                                            <option value="219">Tokelau</option>
                                            <option value="220">Tonga</option>
                                            <option value="221">Trinidad And Tobago
                                            </option>
                                            <option value="222">Tunisia</option>
                                            <option value="223">Turkey</option>
                                            <option value="224">Turkmenistan
                                            </option>
                                            <option value="225">Turks And Caicos
                                                Islands
                                            </option>
                                            <option value="226">Tuvalu</option>
                                            <option value="227">Uganda</option>
                                            <option value="228">Ukraine</option>
                                            <option value="229">United Arab Emirates
                                            </option>
                                            <option value="230">United Kingdom
                                            </option>
                                            <option value="231">United States
                                            </option>
                                            <option value="232">United States Minor
                                                Outlying
                                                Islands</option>
                                            <option value="233">Uruguay</option>
                                            <option value="234">Uzbekistan</option>
                                            <option value="235">Vanuatu</option>
                                            <option value="236">Vatican City State
                                                (Holy
                                                See)</option>
                                            <option value="237">Venezuela</option>
                                            <option value="238">Vietnam</option>
                                            <option value="239">Virgin Islands
                                                (British)
                                            </option>
                                            <option value="240">Virgin Islands (US)
                                            </option>
                                            <option value="241">Wallis And Futuna
                                                Islands
                                            </option>
                                            <option value="242">Western Sahara
                                            </option>
                                            <option value="243">Yemen</option>
                                            <option value="244">Yugoslavia</option>
                                            <option value="245">Zambia</option>
                                            <option value="246">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Bank<span class="astric inside-label">*</span></label>
                                        <input type="text" value="" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Account Number<span
                                                class="astric inside-label">*</span></label>
                                        <input type="number" value="" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Confirm Account Number<span
                                                class="astric inside-label">*</span></label>
                                        <input type="number" value="" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="mb-3">
                                        <label class="form-label">IBAN</label>
                                        <input type="number" value="" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="mb-3">
                                        <label class="form-label">SWIFT Code</label>
                                        <input type="text" value="" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Account Holder Name<span
                                                class="astric inside-label">*</span></label>
                                        <input type="text" value="" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Your Phone Number<span
                                                class="astric inside-label">*</span></label>
                                        <input type="text" value="" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Currency</label>
                                        <select class="form-control drop-select">
                                            <option>Afghan Afghani(AFN, Af)</option>
                                            <option>Albanian Lek(ALL, L)</option>
                                            <option>Algerian Dinar(DZD, DA)</option>
                                            <option>Angola(AOA, Kz)</option>
                                            <option>Antarctica(AAD, $)</option>
                                            <option>Argentine Peso(ARS,AR$)</option>
                                            <option>Armenian Dram(AMD, AMD)</option>
                                            <option>Aruba(AWG, Afl)</option>
                                            <option>Australian Dollar(AUD, A$)</option>
                                            <option>Azerbaijani Manat(AZN, manat)</option>
                                            <option>Bahamas(BSD, B$)</option>
                                            <option>Bahraini Dinar(BHD, BD)</option>
                                            <option>Bangladeshi Taka(BDT, Tk)</option>
                                            <option>Barbados(BBD, Bds$)</option>
                                            <option>Belarusian Ruble(BYR, Br)</option>
                                            <option>Belize Dollar(BZD, BZ$)</option>
                                            <option>Bermuda Dollar(BMD, $)</option>
                                            <option>Bhutan(BTN, Nu.)</option>
                                            <option>Bolivian Boliviano(BOB, Bs)</option>
                                            <option>Bosnia-Herzegovina Convertible Mark(BAM, KM)
                                            </option>
                                            <option>Botswanan Pula(BWP, P)</option>
                                            <option>Brazilian Real(BRL, R$)</option>
                                            <option>British Pound Sterling(GBP, £)</option>
                                            <option>Brunei Dollar(BND, B$)</option>
                                            <option>Bulgarian Lev(BGN, BGN)</option>
                                            <option>Burundian Franc(BIF, FBu)</option>
                                            <option>Cambodian Riel(KHR, KHR)</option>
                                            <option>Canadian Dollar(CAD, CA$)</option>
                                            <option>Cape Verdean Escudo(CVE, CV$)</option>
                                            <option>Cayman Islands(KYD, $)</option>
                                            <option>CFA Franc BCEAO(XOF, CFA)</option>
                                            <option>CFA Franc BEAC (XAF, FCFA)</option>
                                            <option>Chilean Peso(CLP, CL$)</option>
                                            <option>Chinese Yuan(CNY, CN¥)</option>
                                            <option>Colombian Peso(COP, CO$)</option>
                                            <option>Comorian Franc(KMF, CF)</option>
                                            <option>Congolese Franc(CDF, FC)</option>
                                            <option>Costa Rican Colón(CRC, ₡)</option>
                                            <option>Croatian Kuna(HRK, kn)</option>
                                            <option>Cuba(CUP, $)</option>
                                            <option>Czech Republic Koruna(CZK, Kč)</option>
                                            <option>Danish Krone(DKK, kr.)</option>
                                            <option>Djiboutian Franc(DJF, Fdj)</option>
                                            <option>Dominican Peso(DOP, RD$)</option>
                                            <option>Egypt(GYD, G$)</option>
                                            <option>Egyptian Pound(EGP, E£)</option>
                                            <option>Eritrean Nakfa(ERN, Nfk)</option>
                                            <option>Estonian Kroon(EEK, Ekr)</option>
                                            <option>Ethiopian Birr(ETB, Br)</option>
                                            <option>Euro(EUR, €)</option>
                                            <option>Falkland Islands(FKP, £)</option>
                                            <option>Fiji(FJD, FJ$)</option>
                                            <option>French Polynesia(XPF, F)</option>
                                            <option>Gambia(GMD, D)</option>
                                            <option>Georgian Lari(GEL, GEL)</option>
                                            <option>Ghanaian Cedi(GHS, GH₵)</option>
                                            <option>Gibraltar(GIP, £)</option>
                                            <option>Grenada(XCD, $)</option>
                                            <option>Guatemalan Quetzal(GTQ, Q)</option>
                                            <option>Guinean Franc(GNF, FG)</option>
                                            <option>Haiti(HTG, G)</option>
                                            <option>Honduran Lempira(HNL, HNL)</option>
                                            <option>Hong Kong Dollar(HKD, HK$)</option>
                                            <option>Hungarian Forint(HUF, Ft)</option>
                                            <option>Icelandic Króna(ISK, kr)</option>
                                            <option>Indian Rupee(INR, ₹)</option>
                                            <option>Indonesian Rupiah(IDR, Rp)</option>
                                            <option>Iranian Rial(IRR, IRR)</option>
                                            <option>Iraqi Dinar(IQD, IQD)</option>
                                            <option>Israeli New Sheqel(ILS, ₪)</option>
                                            <option>Jamaican Dollar(JMD, J$)</option>
                                            <option>Japanese Yen(JPY, ¥)</option>
                                            <option>Jordanian Dinar(JOD, JD)</option>
                                            <option>Kazakhstani Tenge(KZT, KZT)</option>
                                            <option>Kenyan Shilling(KES, Ksh)</option>
                                            <option>Kuwaiti Dinar(KWD, KD)</option>
                                            <option>Kyrgyzstan(KGS, )</option>
                                            <option>Lao People"s Democratic Republic(LAK, ₭)
                                            </option>
                                            <option>Latvian Lats(LVL, Ls)</option>
                                            <option>Lebanese Pound(LBP, L£)</option>
                                            <option>Lesotho(LSL, L)</option>
                                            <option>Liberia(LRD, LD$)</option>
                                            <option>Libyan Dinar(LYD, LD)</option>
                                            <option>Lithuanian Litas(LTL, Lt)</option>
                                            <option>Macanese Pataca(MOP, MOP$)</option>
                                            <option>Macedonian Denar(MKD, den)</option>
                                            <option>Malagasy Ariary(MGA, MGA)</option>
                                            <option>Malawi(MWK, K)</option>
                                            <option>Malaysian Ringgit(MYR, RM)</option>
                                            <option>Maldives(MVR, MR)</option>
                                            <option>Mauritania(MRO, UM)</option>
                                            <option>Mauritian Rupee(MUR, MURs)</option>
                                            <option>Mexican Peso(MXN, MX$)</option>
                                            <option>Moldovan Leu(MDL, MDL)</option>
                                            <option>Mongolia(MNT, ₮)</option>
                                            <option>Moroccan Dirham(MAD, MAD)</option>
                                            <option>Mozambican Metical(MZN, MTn)</option>
                                            <option>Myanma Kyat(MMK, K)</option>
                                            <option>Namibian Dollar(NAD, N$)</option>
                                            <option>Nepalese Rupee(NPR, Rs)</option>
                                            <option>New Taiwan Dollar(TWD, NT$)</option>
                                            <option>New Zealand Dollar(NZD, NZ$)</option>
                                            <option>Nicaraguan Córdoba(NIO, C$)</option>
                                            <option>Nigerian Naira(NGN, ₦)</option>
                                            <option>North Korea(KPW, ₩)</option>
                                            <option>Norwegian Krone(NOK, Nkr)</option>
                                            <option>Omani Rial(OMR, R.O.)</option>
                                            <option>Pakistani Rupee(PKR, PKRs)</option>
                                            <option>Panamanian Balboa(PAB, B/.)</option>
                                            <option>Papua New Guinea(PGK, K)</option>
                                            <option>Paraguayan Guarani(PYG, ₲)</option>
                                            <option>Peruvian Nuevo Sol(PEN, S/.)</option>
                                            <option>Philippine Peso(PHP, ₱)</option>
                                            <option>Polish Zloty(PLN, zł)</option>
                                            <option>Qatari Rial(QAR, QR)</option>
                                            <option>Refrens Credits(RC, 🅲)</option>
                                            <option>Romanian Leu(RON, RON)</option>
                                            <option>Russian Ruble(RUB, RUB)</option>
                                            <option>Rwandan Franc(RWF, RF)</option>
                                            <option>Saint Helena(SHP, £)</option>
                                            <option>Samoa(WST, WS)</option>
                                            <option>Sao Tome And Principe(STD, Db)</option>
                                            <option>Saudi Riyal(SAR, SAR)</option>
                                            <option>Serbian Dinar(RSD, din.)</option>
                                            <option>Seychelles(SCR, SR)</option>
                                            <option>Sierra Leone(SLL, Le)</option>
                                            <option>Singapore Dollar(SGD, S$)</option>
                                            <option>Sint Maarten(ANG, NAƒ)</option>
                                            <option>Solomon Islands(SBD, SI$)</option>
                                            <option>Somali Shilling(SOS, Sh.So)</option>
                                            <option>South African Rand (ZAR, R)</option>
                                            <option>South Korean Won(KRW, ₩)</option>
                                            <option>South Sudan(SSP, SS£)</option>
                                            <option>Sri Lankan Rupee(LKR, Rs)</option>
                                            <option>Sudanese Pound(SDG, SDG)</option>
                                            <option>Suriname(SRD, SS£)</option>
                                            <option>Swaziland(SZL, L)</option>
                                            <option>Swedish Krona(SEK, Skr)</option>
                                            <option>Swiss Franc(CHF, CHF)</option>
                                            <option>Syrian Pound(SYP, £S)</option>
                                            <option>Tajikistan(TJS, SM)</option>
                                            <option>Tanzanian Shilling(TZS, TSh)</option>
                                            <option>Thai Baht(THB, ฿)</option>
                                            <option>Tongan Paʻanga(TOP, T$)</option>
                                            <option>Trinidad and Tobago Dollar(TTD, TT$)</option>
                                            <option>Tunisian Dinar(TND, DT)</option>
                                            <option>Turkish Lira(TRY, TL)</option>
                                            <option>Turkmenistan(TMT, T)</option>
                                            <option>Ugandan Shilling(UGX, USh)</option>
                                            <option>Ukrainian Hryvnia(UAH, ₴)</option>
                                            <option>United Arab Emirates Dirham(AED, AED)</option>
                                            <option>Uruguayan Peso(UYU, $U)</option>
                                            <option>US Dollar(USD, $)</option>
                                            <option>Uzbekistan Som(UZS, UZS)</option>
                                            <option>Vanuatu(VUV, £)</option>
                                            <option>Venezuelan Bolívar(VEF, Bs.F.)</option>
                                            <option>Vietnamese Dong(VND, ₫)</option>
                                            <option>Yemeni Rial (YER,YR)(YER, YR)</option>
                                            <option>Zambian Kwacha (ZMK, ZK)</option>
                                            <option>Zambian Kwacha (ZMW, ZK)</option>
                                            <option>Zimbabwean dollar (ZWL, ZWL$)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="btns-wrap mt-3">
                                        <button class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                                        <button class="btn btn-save" data-bs-dismiss="modal">Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- edit bank deatil modal -->
    <div class="modal fade common-modal" id="edit_bank_dtl" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="heading">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Bank Account</h1>
                        <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <img src="assets/image/close.png">
                        </button>
                    </div>
                    <hr class="cstm-line">
                    <div class="bank-details">


                        <p class="edit-account">Bank Accounts<a class="">
                                <a class="edit-bank-dtl add-new-bank" data-bs-dismiss="modal" data-bs-toggle="modal"
                                    data-bs-target="#add_bank_dtl">Add New Bank Account</a></p>
                        <ul class="saved-bank-list">
                            <li>
                                <div class="bank-wrap">
                                    <div class="bank-dtl-wrap">
                                        <p class="bank-name">SBI <a class="edit-bank-dtl add-new-bank"
                                                data-bs-dismiss="modal" data-bs-toggle="modal"
                                                data-bs-target="#add_bank_dtl"><i class="fas fa-pen"></i></a>
                                        </p>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="flexSwitchCheckDefault">
                                            <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                        </div>
                                    </div>
                                    <div class="d-flex acc-detls">
                                        <p class="bold-text">Account holder Name:<span class="light-text">Shubam
                                                sharma</span></p>
                                        <p class="bold-text">Account No:<span class="light-text">7878787878</span></p>
                                        <p class="bold-text">IFSC:<span class="light-text">SBIN0003901</span></p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- add business modal -->
    <div class="modal fade common-modal common-modal-css" id="addbusinesspop" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="heading">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Business Details</h1>
                    <button type="button" class="btn close_btn" data-bs-dismiss="modal" aria-label="Close">
                        <img src="assets/image/close.png">
                    </button>
                </div>
                <hr class="cstm-line">
                <form>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="mb-3">
                                <label class="form-label">Your Name/Business Name</label>
                                <input type="text" value="" class="form-control"
                                placeholder="If you're a freelancer, add your personal name">
                                <span class="small-text">Official Name used across Accounting documents and reports.</span>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 brand-name-fld">

                            <label class="form-label">Brand or Display name</label>
                            <input type="text" value="" class="form-control"
                                placeholder="Business Name (Required)">
                            <span class="small-text">This name will be shown publicly on your
                                profile.</span>

                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="mb-3">
                                <div class="add-field">
                                    <button type="button"> <i class="fas fa-plus-square"></i>Add Brand or Display name</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="mb-3">
                                <label class="form-label">What describes you best?*</label>
                                <div class="client-type-wrap">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios11" value="option1">
                                        <label class="form-check-label" for="exampleRadios11">
                                            Individual/Freelancer
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios11" value="option1">
                                        <label class="form-check-label" for="exampleRadios11">
                                            Team/Agency/Company
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="mb-3">
                              
                                <label class="form-label">In Business Since</label>
                                <div class="input-wrap">
                                    <div class="input-group">
                                        <i class="fas fa-calendar-week"></i>
                                        <input type="text"
                                            class="datepicker_input form-control datepicker-input"
                                            placeholder="30/08/2023" required=""
                                            aria-label="From Date">
                                    </div>
                                </div>
                                <span class="small-text">Growing entrepreneur or an established business? Let people know!</span>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="mb-3"> 
                                <label class="form-label">Phone Number</label>
                                <input type="number" value="" class="form-control"
                              >
                                <span class="small-text">Contact phone number associated with your business</span>
                            </div>
                        </div>
                    
                    
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="mb-3">
                                <label class="form-label">Country</label>
                                <select class="form-control drop-select">
                                    <option value="">Select Country</option>
                                    <option value="1">Afghanistan</option>
                                    <option value="2">Albania</option>
                                    <option value="3">Algeria</option>
                                    <option value="4">American Samoa
                                    </option>
                                    <option value="5">Andorra</option>
                                    <option value="6">Angola</option>
                                    <option value="7">Anguilla</option>
                                    <option value="8">Antarctica</option>
                                    <option value="9">Antigua And Barbuda
                                    </option>
                                    <option value="10">Argentina</option>
                                    <option value="11">Armenia</option>
                                    <option value="12">Aruba</option>
                                    <option value="13">Australia</option>
                                    <option value="14">Austria</option>
                                    <option value="15">Azerbaijan</option>
                                    <option value="16">Bahamas The</option>
                                    <option value="17">Bahrain</option>
                                    <option value="18">Bangladesh</option>
                                    <option value="19">Barbados</option>
                                    <option value="20">Belarus</option>
                                    <option value="21">Belgium</option>
                                    <option value="22">Belize</option>
                                    <option value="23">Benin</option>
                                    <option value="24">Bermuda</option>
                                    <option value="25">Bhutan</option>
                                    <option value="26">Bolivia</option>
                                    <option value="27">Bosnia and
                                        Herzegovina
                                    </option>
                                    <option value="28">Botswana</option>
                                    <option value="29">Bouvet Island
                                    </option>
                                    <option value="30">Brazil</option>
                                    <option value="31">British Indian Ocean
                                        Territory</option>
                                    <option value="32">Brunei</option>
                                    <option value="33">Bulgaria</option>
                                    <option value="34">Burkina Faso</option>
                                    <option value="35">Burundi</option>
                                    <option value="36">Cambodia</option>
                                    <option value="37">Cameroon</option>
                                    <option value="38">Canada</option>
                                    <option value="39">Cape Verde</option>
                                    <option value="40">Cayman Islands
                                    </option>
                                    <option value="41">Central African
                                        Republic
                                    </option>
                                    <option value="42">Chad</option>
                                    <option value="43">Chile</option>
                                    <option value="44">China</option>
                                    <option value="45">Christmas Island
                                    </option>
                                    <option value="46">Cocos (Keeling)
                                        Islands
                                    </option>
                                    <option value="47">Colombia</option>
                                    <option value="48">Comoros</option>
                                    <option value="49">Republic Of The Congo
                                    </option>
                                    <option value="50">Democratic Republic
                                        Of The
                                        Congo</option>
                                    <option value="51">Cook Islands</option>
                                    <option value="52">Costa Rica</option>
                                    <option value="53">Cote D'Ivoire (Ivory
                                        Coast)
                                    </option>
                                    <option value="54">Croatia (Hrvatska)
                                    </option>
                                    <option value="55">Cuba</option>
                                    <option value="56">Cyprus</option>
                                    <option value="57">Czech Republic
                                    </option>
                                    <option value="58">Denmark</option>
                                    <option value="59">Djibouti</option>
                                    <option value="60">Dominica</option>
                                    <option value="61">Dominican Republic
                                    </option>
                                    <option value="62">East Timor</option>
                                    <option value="63">Ecuador</option>
                                    <option value="64">Egypt</option>
                                    <option value="65">El Salvador</option>
                                    <option value="66">Equatorial Guinea
                                    </option>
                                    <option value="67">Eritrea</option>
                                    <option value="68">Estonia</option>
                                    <option value="69">Ethiopia</option>
                                    <option value="70">External Territories
                                        of
                                        Australia</option>
                                    <option value="71">Falkland Islands
                                    </option>
                                    <option value="72">Faroe Islands
                                    </option>
                                    <option value="73">Fiji Islands</option>
                                    <option value="74">Finland</option>
                                    <option value="75">France</option>
                                    <option value="76">French Guiana
                                    </option>
                                    <option value="77">French Polynesia
                                    </option>
                                    <option value="78">French Southern
                                        Territories
                                    </option>
                                    <option value="79">Gabon</option>
                                    <option value="80">Gambia The</option>
                                    <option value="81">Georgia</option>
                                    <option value="82">Germany</option>
                                    <option value="83">Ghana</option>
                                    <option value="84">Gibraltar</option>
                                    <option value="85">Greece</option>
                                    <option value="86">Greenland</option>
                                    <option value="87">Grenada</option>
                                    <option value="88">Guadeloupe</option>
                                    <option value="89">Guam</option>
                                    <option value="90">Guatemala</option>
                                    <option value="91">Guernsey and Alderney
                                    </option>
                                    <option value="92">Guinea</option>
                                    <option value="93">Guinea-Bissau
                                    </option>
                                    <option value="94">Guyana</option>
                                    <option value="95">Haiti</option>
                                    <option value="96">Heard and McDonald
                                        Islands
                                    </option>
                                    <option value="97">Honduras</option>
                                    <option value="98">Hong Kong S.A.R.
                                    </option>
                                    <option value="99">Hungary</option>
                                    <option value="100">Iceland</option>
                                    <option value="101">India</option>
                                    <option value="102">Indonesia</option>
                                    <option value="103">Iran</option>
                                    <option value="104">Iraq</option>
                                    <option value="105">Ireland</option>
                                    <option value="106">Israel</option>
                                    <option value="107">Italy</option>
                                    <option value="108">Jamaica</option>
                                    <option value="109">Japan</option>
                                    <option value="110">Jersey</option>
                                    <option value="111">Jordan</option>
                                    <option value="112">Kazakhstan</option>
                                    <option value="113">Kenya</option>
                                    <option value="114">Kiribati</option>
                                    <option value="115">Korea North</option>
                                    <option value="116">Korea South</option>
                                    <option value="117">Kuwait</option>
                                    <option value="118">Kyrgyzstan</option>
                                    <option value="119">Laos</option>
                                    <option value="120">Latvia</option>
                                    <option value="121">Lebanon</option>
                                    <option value="122">Lesotho</option>
                                    <option value="123">Liberia</option>
                                    <option value="124">Libya</option>
                                    <option value="125">Liechtenstein
                                    </option>
                                    <option value="126">Lithuania</option>
                                    <option value="127">Luxembourg</option>
                                    <option value="128">Macau S.A.R.
                                    </option>
                                    <option value="129">Macedonia</option>
                                    <option value="130">Madagascar</option>
                                    <option value="131">Malawi</option>
                                    <option value="132">Malaysia</option>
                                    <option value="133">Maldives</option>
                                    <option value="134">Mali</option>
                                    <option value="135">Malta</option>
                                    <option value="136">Man (Isle of)
                                    </option>
                                    <option value="137">Marshall Islands
                                    </option>
                                    <option value="138">Martinique</option>
                                    <option value="139">Mauritania</option>
                                    <option value="140">Mauritius</option>
                                    <option value="141">Mayotte</option>
                                    <option value="142">Mexico</option>
                                    <option value="143">Micronesia</option>
                                    <option value="144">Moldova</option>
                                    <option value="145">Monaco</option>
                                    <option value="146">Mongolia</option>
                                    <option value="147">Montserrat</option>
                                    <option value="148">Morocco</option>
                                    <option value="149">Mozambique</option>
                                    <option value="150">Myanmar</option>
                                    <option value="151">Namibia</option>
                                    <option value="152">Nauru</option>
                                    <option value="153">Nepal</option>
                                    <option value="154">Netherlands Antilles
                                    </option>
                                    <option value="155">Netherlands The
                                    </option>
                                    <option value="156">New Caledonia
                                    </option>
                                    <option value="157">New Zealand</option>
                                    <option value="158">Nicaragua</option>
                                    <option value="159">Niger</option>
                                    <option value="160">Nigeria</option>
                                    <option value="161">Niue</option>
                                    <option value="162">Norfolk Island
                                    </option>
                                    <option value="163">Northern Mariana
                                        Islands
                                    </option>
                                    <option value="164">Norway</option>
                                    <option value="165">Oman</option>
                                    <option value="166">Pakistan</option>
                                    <option value="167">Palau</option>
                                    <option value="168">Palestinian
                                        Territory
                                        Occupied</option>
                                    <option value="169">Panama</option>
                                    <option value="170">Papua new Guinea
                                    </option>
                                    <option value="171">Paraguay</option>
                                    <option value="172">Peru</option>
                                    <option value="173">Philippines</option>
                                    <option value="174">Pitcairn Island
                                    </option>
                                    <option value="175">Poland</option>
                                    <option value="176">Portugal</option>
                                    <option value="177">Puerto Rico</option>
                                    <option value="178">Qatar</option>
                                    <option value="179">Reunion</option>
                                    <option value="180">Romania</option>
                                    <option value="181">Russia</option>
                                    <option value="182">Rwanda</option>
                                    <option value="183">Saint Helena
                                    </option>
                                    <option value="184">Saint Kitts And
                                        Nevis
                                    </option>
                                    <option value="185">Saint Lucia</option>
                                    <option value="186">Saint Pierre and
                                        Miquelon
                                    </option>
                                    <option value="187">Saint Vincent And
                                        The
                                        Grenadines</option>
                                    <option value="188">Samoa</option>
                                    <option value="189">San Marino</option>
                                    <option value="190">Sao Tome and
                                        Principe
                                    </option>
                                    <option value="191">Saudi Arabia
                                    </option>
                                    <option value="192">Senegal</option>
                                    <option value="193">Serbia</option>
                                    <option value="194">Seychelles</option>
                                    <option value="195">Sierra Leone
                                    </option>
                                    <option value="196">Singapore</option>
                                    <option value="197">Slovakia</option>
                                    <option value="198">Slovenia</option>
                                    <option value="199">Smaller Territories
                                        of the
                                        UK</option>
                                    <option value="200">Solomon Islands
                                    </option>
                                    <option value="201">Somalia</option>
                                    <option value="202">South Africa
                                    </option>
                                    <option value="203">South Georgia
                                    </option>
                                    <option value="204">South Sudan</option>
                                    <option value="205">Spain</option>
                                    <option value="206">Sri Lanka</option>
                                    <option value="207">Sudan</option>
                                    <option value="208">Suriname</option>
                                    <option value="209">Svalbard And Jan
                                        Mayen
                                        Islands</option>
                                    <option value="210">Swaziland</option>
                                    <option value="211">Sweden</option>
                                    <option value="212">Switzerland</option>
                                    <option value="213">Syria</option>
                                    <option value="214">Taiwan</option>
                                    <option value="215">Tajikistan</option>
                                    <option value="216">Tanzania</option>
                                    <option value="217">Thailand</option>
                                    <option value="218">Togo</option>
                                    <option value="219">Tokelau</option>
                                    <option value="220">Tonga</option>
                                    <option value="221">Trinidad And Tobago
                                    </option>
                                    <option value="222">Tunisia</option>
                                    <option value="223">Turkey</option>
                                    <option value="224">Turkmenistan
                                    </option>
                                    <option value="225">Turks And Caicos
                                        Islands
                                    </option>
                                    <option value="226">Tuvalu</option>
                                    <option value="227">Uganda</option>
                                    <option value="228">Ukraine</option>
                                    <option value="229">United Arab Emirates
                                    </option>
                                    <option value="230">United Kingdom
                                    </option>
                                    <option value="231">United States
                                    </option>
                                    <option value="232">United States Minor
                                        Outlying
                                        Islands</option>
                                    <option value="233">Uruguay</option>
                                    <option value="234">Uzbekistan</option>
                                    <option value="235">Vanuatu</option>
                                    <option value="236">Vatican City State
                                        (Holy
                                        See)</option>
                                    <option value="237">Venezuela</option>
                                    <option value="238">Vietnam</option>
                                    <option value="239">Virgin Islands
                                        (British)
                                    </option>
                                    <option value="240">Virgin Islands (US)
                                    </option>
                                    <option value="241">Wallis And Futuna
                                        Islands
                                    </option>
                                    <option value="242">Western Sahara
                                    </option>
                                    <option value="243">Yemen</option>
                                    <option value="244">Yugoslavia</option>
                                    <option value="245">Zambia</option>
                                    <option value="246">Zimbabwe</option>
                                </select>
                            </div>
                        </div>

                        
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="mb-3">
                                <label class="form-label">Currency</label>
                                <select class="form-control drop-select">
                                    <option value="">Indian</option>
                                    <option value="">Indian</option>
                                    <option value="">Indian</option>
                                    <option value="">Indian</option>
                                    <option value="">Indian</option>
                                    <option value="">Indian</option>
                                </select>
                            </div>
                        </div>
                       
                       
                       
                    </div>
                </form>
                <!-- <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Basic Information
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                            <div class="uploadFile">
                                                <div class="upload-wrap">
                                                    <i class="fas fa-image"></i>
                                                    <p class="upload-files"> Profile Image/Business Logo</p>
                                                    <span>Upload a professional picture if you are a
                                                        freelancer</span>
                                                </div>
                                                <input type="file" class="inputfile form-control" name="file">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Country</label>
                                                <select class="form-control drop-select">
                                                    <option value="">Select Country</option>
                                                    <option value="1">Afghanistan</option>
                                                    <option value="2">Albania</option>
                                                    <option value="3">Algeria</option>
                                                    <option value="4">American Samoa
                                                    </option>
                                                    <option value="5">Andorra</option>
                                                    <option value="6">Angola</option>
                                                    <option value="7">Anguilla</option>
                                                    <option value="8">Antarctica</option>
                                                    <option value="9">Antigua And Barbuda
                                                    </option>
                                                    <option value="10">Argentina</option>
                                                    <option value="11">Armenia</option>
                                                    <option value="12">Aruba</option>
                                                    <option value="13">Australia</option>
                                                    <option value="14">Austria</option>
                                                    <option value="15">Azerbaijan</option>
                                                    <option value="16">Bahamas The</option>
                                                    <option value="17">Bahrain</option>
                                                    <option value="18">Bangladesh</option>
                                                    <option value="19">Barbados</option>
                                                    <option value="20">Belarus</option>
                                                    <option value="21">Belgium</option>
                                                    <option value="22">Belize</option>
                                                    <option value="23">Benin</option>
                                                    <option value="24">Bermuda</option>
                                                    <option value="25">Bhutan</option>
                                                    <option value="26">Bolivia</option>
                                                    <option value="27">Bosnia and
                                                        Herzegovina
                                                    </option>
                                                    <option value="28">Botswana</option>
                                                    <option value="29">Bouvet Island
                                                    </option>
                                                    <option value="30">Brazil</option>
                                                    <option value="31">British Indian Ocean
                                                        Territory</option>
                                                    <option value="32">Brunei</option>
                                                    <option value="33">Bulgaria</option>
                                                    <option value="34">Burkina Faso</option>
                                                    <option value="35">Burundi</option>
                                                    <option value="36">Cambodia</option>
                                                    <option value="37">Cameroon</option>
                                                    <option value="38">Canada</option>
                                                    <option value="39">Cape Verde</option>
                                                    <option value="40">Cayman Islands
                                                    </option>
                                                    <option value="41">Central African
                                                        Republic
                                                    </option>
                                                    <option value="42">Chad</option>
                                                    <option value="43">Chile</option>
                                                    <option value="44">China</option>
                                                    <option value="45">Christmas Island
                                                    </option>
                                                    <option value="46">Cocos (Keeling)
                                                        Islands
                                                    </option>
                                                    <option value="47">Colombia</option>
                                                    <option value="48">Comoros</option>
                                                    <option value="49">Republic Of The Congo
                                                    </option>
                                                    <option value="50">Democratic Republic
                                                        Of The
                                                        Congo</option>
                                                    <option value="51">Cook Islands</option>
                                                    <option value="52">Costa Rica</option>
                                                    <option value="53">Cote D'Ivoire (Ivory
                                                        Coast)
                                                    </option>
                                                    <option value="54">Croatia (Hrvatska)
                                                    </option>
                                                    <option value="55">Cuba</option>
                                                    <option value="56">Cyprus</option>
                                                    <option value="57">Czech Republic
                                                    </option>
                                                    <option value="58">Denmark</option>
                                                    <option value="59">Djibouti</option>
                                                    <option value="60">Dominica</option>
                                                    <option value="61">Dominican Republic
                                                    </option>
                                                    <option value="62">East Timor</option>
                                                    <option value="63">Ecuador</option>
                                                    <option value="64">Egypt</option>
                                                    <option value="65">El Salvador</option>
                                                    <option value="66">Equatorial Guinea
                                                    </option>
                                                    <option value="67">Eritrea</option>
                                                    <option value="68">Estonia</option>
                                                    <option value="69">Ethiopia</option>
                                                    <option value="70">External Territories
                                                        of
                                                        Australia</option>
                                                    <option value="71">Falkland Islands
                                                    </option>
                                                    <option value="72">Faroe Islands
                                                    </option>
                                                    <option value="73">Fiji Islands</option>
                                                    <option value="74">Finland</option>
                                                    <option value="75">France</option>
                                                    <option value="76">French Guiana
                                                    </option>
                                                    <option value="77">French Polynesia
                                                    </option>
                                                    <option value="78">French Southern
                                                        Territories
                                                    </option>
                                                    <option value="79">Gabon</option>
                                                    <option value="80">Gambia The</option>
                                                    <option value="81">Georgia</option>
                                                    <option value="82">Germany</option>
                                                    <option value="83">Ghana</option>
                                                    <option value="84">Gibraltar</option>
                                                    <option value="85">Greece</option>
                                                    <option value="86">Greenland</option>
                                                    <option value="87">Grenada</option>
                                                    <option value="88">Guadeloupe</option>
                                                    <option value="89">Guam</option>
                                                    <option value="90">Guatemala</option>
                                                    <option value="91">Guernsey and Alderney
                                                    </option>
                                                    <option value="92">Guinea</option>
                                                    <option value="93">Guinea-Bissau
                                                    </option>
                                                    <option value="94">Guyana</option>
                                                    <option value="95">Haiti</option>
                                                    <option value="96">Heard and McDonald
                                                        Islands
                                                    </option>
                                                    <option value="97">Honduras</option>
                                                    <option value="98">Hong Kong S.A.R.
                                                    </option>
                                                    <option value="99">Hungary</option>
                                                    <option value="100">Iceland</option>
                                                    <option value="101">India</option>
                                                    <option value="102">Indonesia</option>
                                                    <option value="103">Iran</option>
                                                    <option value="104">Iraq</option>
                                                    <option value="105">Ireland</option>
                                                    <option value="106">Israel</option>
                                                    <option value="107">Italy</option>
                                                    <option value="108">Jamaica</option>
                                                    <option value="109">Japan</option>
                                                    <option value="110">Jersey</option>
                                                    <option value="111">Jordan</option>
                                                    <option value="112">Kazakhstan</option>
                                                    <option value="113">Kenya</option>
                                                    <option value="114">Kiribati</option>
                                                    <option value="115">Korea North</option>
                                                    <option value="116">Korea South</option>
                                                    <option value="117">Kuwait</option>
                                                    <option value="118">Kyrgyzstan</option>
                                                    <option value="119">Laos</option>
                                                    <option value="120">Latvia</option>
                                                    <option value="121">Lebanon</option>
                                                    <option value="122">Lesotho</option>
                                                    <option value="123">Liberia</option>
                                                    <option value="124">Libya</option>
                                                    <option value="125">Liechtenstein
                                                    </option>
                                                    <option value="126">Lithuania</option>
                                                    <option value="127">Luxembourg</option>
                                                    <option value="128">Macau S.A.R.
                                                    </option>
                                                    <option value="129">Macedonia</option>
                                                    <option value="130">Madagascar</option>
                                                    <option value="131">Malawi</option>
                                                    <option value="132">Malaysia</option>
                                                    <option value="133">Maldives</option>
                                                    <option value="134">Mali</option>
                                                    <option value="135">Malta</option>
                                                    <option value="136">Man (Isle of)
                                                    </option>
                                                    <option value="137">Marshall Islands
                                                    </option>
                                                    <option value="138">Martinique</option>
                                                    <option value="139">Mauritania</option>
                                                    <option value="140">Mauritius</option>
                                                    <option value="141">Mayotte</option>
                                                    <option value="142">Mexico</option>
                                                    <option value="143">Micronesia</option>
                                                    <option value="144">Moldova</option>
                                                    <option value="145">Monaco</option>
                                                    <option value="146">Mongolia</option>
                                                    <option value="147">Montserrat</option>
                                                    <option value="148">Morocco</option>
                                                    <option value="149">Mozambique</option>
                                                    <option value="150">Myanmar</option>
                                                    <option value="151">Namibia</option>
                                                    <option value="152">Nauru</option>
                                                    <option value="153">Nepal</option>
                                                    <option value="154">Netherlands Antilles
                                                    </option>
                                                    <option value="155">Netherlands The
                                                    </option>
                                                    <option value="156">New Caledonia
                                                    </option>
                                                    <option value="157">New Zealand</option>
                                                    <option value="158">Nicaragua</option>
                                                    <option value="159">Niger</option>
                                                    <option value="160">Nigeria</option>
                                                    <option value="161">Niue</option>
                                                    <option value="162">Norfolk Island
                                                    </option>
                                                    <option value="163">Northern Mariana
                                                        Islands
                                                    </option>
                                                    <option value="164">Norway</option>
                                                    <option value="165">Oman</option>
                                                    <option value="166">Pakistan</option>
                                                    <option value="167">Palau</option>
                                                    <option value="168">Palestinian
                                                        Territory
                                                        Occupied</option>
                                                    <option value="169">Panama</option>
                                                    <option value="170">Papua new Guinea
                                                    </option>
                                                    <option value="171">Paraguay</option>
                                                    <option value="172">Peru</option>
                                                    <option value="173">Philippines</option>
                                                    <option value="174">Pitcairn Island
                                                    </option>
                                                    <option value="175">Poland</option>
                                                    <option value="176">Portugal</option>
                                                    <option value="177">Puerto Rico</option>
                                                    <option value="178">Qatar</option>
                                                    <option value="179">Reunion</option>
                                                    <option value="180">Romania</option>
                                                    <option value="181">Russia</option>
                                                    <option value="182">Rwanda</option>
                                                    <option value="183">Saint Helena
                                                    </option>
                                                    <option value="184">Saint Kitts And
                                                        Nevis
                                                    </option>
                                                    <option value="185">Saint Lucia</option>
                                                    <option value="186">Saint Pierre and
                                                        Miquelon
                                                    </option>
                                                    <option value="187">Saint Vincent And
                                                        The
                                                        Grenadines</option>
                                                    <option value="188">Samoa</option>
                                                    <option value="189">San Marino</option>
                                                    <option value="190">Sao Tome and
                                                        Principe
                                                    </option>
                                                    <option value="191">Saudi Arabia
                                                    </option>
                                                    <option value="192">Senegal</option>
                                                    <option value="193">Serbia</option>
                                                    <option value="194">Seychelles</option>
                                                    <option value="195">Sierra Leone
                                                    </option>
                                                    <option value="196">Singapore</option>
                                                    <option value="197">Slovakia</option>
                                                    <option value="198">Slovenia</option>
                                                    <option value="199">Smaller Territories
                                                        of the
                                                        UK</option>
                                                    <option value="200">Solomon Islands
                                                    </option>
                                                    <option value="201">Somalia</option>
                                                    <option value="202">South Africa
                                                    </option>
                                                    <option value="203">South Georgia
                                                    </option>
                                                    <option value="204">South Sudan</option>
                                                    <option value="205">Spain</option>
                                                    <option value="206">Sri Lanka</option>
                                                    <option value="207">Sudan</option>
                                                    <option value="208">Suriname</option>
                                                    <option value="209">Svalbard And Jan
                                                        Mayen
                                                        Islands</option>
                                                    <option value="210">Swaziland</option>
                                                    <option value="211">Sweden</option>
                                                    <option value="212">Switzerland</option>
                                                    <option value="213">Syria</option>
                                                    <option value="214">Taiwan</option>
                                                    <option value="215">Tajikistan</option>
                                                    <option value="216">Tanzania</option>
                                                    <option value="217">Thailand</option>
                                                    <option value="218">Togo</option>
                                                    <option value="219">Tokelau</option>
                                                    <option value="220">Tonga</option>
                                                    <option value="221">Trinidad And Tobago
                                                    </option>
                                                    <option value="222">Tunisia</option>
                                                    <option value="223">Turkey</option>
                                                    <option value="224">Turkmenistan
                                                    </option>
                                                    <option value="225">Turks And Caicos
                                                        Islands
                                                    </option>
                                                    <option value="226">Tuvalu</option>
                                                    <option value="227">Uganda</option>
                                                    <option value="228">Ukraine</option>
                                                    <option value="229">United Arab Emirates
                                                    </option>
                                                    <option value="230">United Kingdom
                                                    </option>
                                                    <option value="231">United States
                                                    </option>
                                                    <option value="232">United States Minor
                                                        Outlying
                                                        Islands</option>
                                                    <option value="233">Uruguay</option>
                                                    <option value="234">Uzbekistan</option>
                                                    <option value="235">Vanuatu</option>
                                                    <option value="236">Vatican City State
                                                        (Holy
                                                        See)</option>
                                                    <option value="237">Venezuela</option>
                                                    <option value="238">Vietnam</option>
                                                    <option value="239">Virgin Islands
                                                        (British)
                                                    </option>
                                                    <option value="240">Virgin Islands (US)
                                                    </option>
                                                    <option value="241">Wallis And Futuna
                                                        Islands
                                                    </option>
                                                    <option value="242">Western Sahara
                                                    </option>
                                                    <option value="243">Yemen</option>
                                                    <option value="244">Yugoslavia</option>
                                                    <option value="245">Zambia</option>
                                                    <option value="246">Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Your Name/Business Name</label>
                                                <input type="text" value="" class="form-control"
                                                    placeholder="Business Name (Required)">
                                                <span class="small-text">Official name of your business. Use your
                                                    personal name if you are a freelancer.</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 brand-name-fld">

                                            <label class="form-label">Brand or Display name</label>
                                            <input type="text" value="" class="form-control"
                                                placeholder="Business Name (Required)">
                                            <span class="small-text">This name will be shown publicly on your
                                                profile.</span>

                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="mb-3">
                                                <div class="add-field">
                                                    <button type="button"> <i class="fas fa-plus-square"></i>Add
                                                        More Fields</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Profile Information
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="mt-3">
                                            <label class="form-label">What describes you best?</label>
                                            <div class="client-type-wrap">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="exampleRadios" id="exampleRadios11" value="option1">
                                                    <label class="form-check-label" for="exampleRadios11">
                                                        Individual/Freelancer
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="exampleRadios" id="exampleRadios11" value="option1">
                                                    <label class="form-check-label" for="exampleRadios11">
                                                        Team/Agency/Company
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                        <div class="mb-3">
                                            <label class="form-label">Set your Profile URL
                                                <span class="small-text">Set a URL for your new profile. Help people
                                                    find you online </span>
                                            </label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">@</span>
                                                <input type="text" class="form-control" placeholder="Username"
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                        <div class="mb-3">
                                            <label class="form-label">In Business Since
                                                <span class="small-text">Month and Year of when you started the
                                                    business</span>
                                            </label>
                                            <select id="multiple" class="js-states form-control" multiple>
                                                <option>Logo Design</option>
                                                <option>UI Designer</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Tell us more about your business
                                                <span class="small-text"> Everything that people should know about
                                                    your business</span>
                                            </label>
                                            <textarea class="form-control" style="height:120px"></textarea>

                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Address <span>(optional)</span>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-3">
                                        <div class="mb-3">
                                            <label class="form-label">Select Country</label>
                                            <select class="form-control drop-select">
                                                <option value="">Select Country</option>
                                                <option value="1">Afghanistan</option>
                                                <option value="2">Albania</option>
                                                <option value="3">Algeria</option>
                                                <option value="4">American Samoa
                                                </option>
                                                <option value="5">Andorra</option>
                                                <option value="6">Angola</option>
                                                <option value="7">Anguilla</option>
                                                <option value="8">Antarctica</option>
                                                <option value="9">Antigua And Barbuda
                                                </option>
                                                <option value="10">Argentina</option>
                                                <option value="11">Armenia</option>
                                                <option value="12">Aruba</option>
                                                <option value="13">Australia</option>
                                                <option value="14">Austria</option>
                                                <option value="15">Azerbaijan</option>
                                                <option value="16">Bahamas The</option>
                                                <option value="17">Bahrain</option>
                                                <option value="18">Bangladesh</option>
                                                <option value="19">Barbados</option>
                                                <option value="20">Belarus</option>
                                                <option value="21">Belgium</option>
                                                <option value="22">Belize</option>
                                                <option value="23">Benin</option>
                                                <option value="24">Bermuda</option>
                                                <option value="25">Bhutan</option>
                                                <option value="26">Bolivia</option>
                                                <option value="27">Bosnia and
                                                    Herzegovina
                                                </option>
                                                <option value="28">Botswana</option>
                                                <option value="29">Bouvet Island
                                                </option>
                                                <option value="30">Brazil</option>
                                                <option value="31">British Indian Ocean
                                                    Territory</option>
                                                <option value="32">Brunei</option>
                                                <option value="33">Bulgaria</option>
                                                <option value="34">Burkina Faso</option>
                                                <option value="35">Burundi</option>
                                                <option value="36">Cambodia</option>
                                                <option value="37">Cameroon</option>
                                                <option value="38">Canada</option>
                                                <option value="39">Cape Verde</option>
                                                <option value="40">Cayman Islands
                                                </option>
                                                <option value="41">Central African
                                                    Republic
                                                </option>
                                                <option value="42">Chad</option>
                                                <option value="43">Chile</option>
                                                <option value="44">China</option>
                                                <option value="45">Christmas Island
                                                </option>
                                                <option value="46">Cocos (Keeling)
                                                    Islands
                                                </option>
                                                <option value="47">Colombia</option>
                                                <option value="48">Comoros</option>
                                                <option value="49">Republic Of The Congo
                                                </option>
                                                <option value="50">Democratic Republic
                                                    Of The
                                                    Congo</option>
                                                <option value="51">Cook Islands</option>
                                                <option value="52">Costa Rica</option>
                                                <option value="53">Cote D'Ivoire (Ivory
                                                    Coast)
                                                </option>
                                                <option value="54">Croatia (Hrvatska)
                                                </option>
                                                <option value="55">Cuba</option>
                                                <option value="56">Cyprus</option>
                                                <option value="57">Czech Republic
                                                </option>
                                                <option value="58">Denmark</option>
                                                <option value="59">Djibouti</option>
                                                <option value="60">Dominica</option>
                                                <option value="61">Dominican Republic
                                                </option>
                                                <option value="62">East Timor</option>
                                                <option value="63">Ecuador</option>
                                                <option value="64">Egypt</option>
                                                <option value="65">El Salvador</option>
                                                <option value="66">Equatorial Guinea
                                                </option>
                                                <option value="67">Eritrea</option>
                                                <option value="68">Estonia</option>
                                                <option value="69">Ethiopia</option>
                                                <option value="70">External Territories
                                                    of
                                                    Australia</option>
                                                <option value="71">Falkland Islands
                                                </option>
                                                <option value="72">Faroe Islands
                                                </option>
                                                <option value="73">Fiji Islands</option>
                                                <option value="74">Finland</option>
                                                <option value="75">France</option>
                                                <option value="76">French Guiana
                                                </option>
                                                <option value="77">French Polynesia
                                                </option>
                                                <option value="78">French Southern
                                                    Territories
                                                </option>
                                                <option value="79">Gabon</option>
                                                <option value="80">Gambia The</option>
                                                <option value="81">Georgia</option>
                                                <option value="82">Germany</option>
                                                <option value="83">Ghana</option>
                                                <option value="84">Gibraltar</option>
                                                <option value="85">Greece</option>
                                                <option value="86">Greenland</option>
                                                <option value="87">Grenada</option>
                                                <option value="88">Guadeloupe</option>
                                                <option value="89">Guam</option>
                                                <option value="90">Guatemala</option>
                                                <option value="91">Guernsey and Alderney
                                                </option>
                                                <option value="92">Guinea</option>
                                                <option value="93">Guinea-Bissau
                                                </option>
                                                <option value="94">Guyana</option>
                                                <option value="95">Haiti</option>
                                                <option value="96">Heard and McDonald
                                                    Islands
                                                </option>
                                                <option value="97">Honduras</option>
                                                <option value="98">Hong Kong S.A.R.
                                                </option>
                                                <option value="99">Hungary</option>
                                                <option value="100">Iceland</option>
                                                <option value="101">India</option>
                                                <option value="102">Indonesia</option>
                                                <option value="103">Iran</option>
                                                <option value="104">Iraq</option>
                                                <option value="105">Ireland</option>
                                                <option value="106">Israel</option>
                                                <option value="107">Italy</option>
                                                <option value="108">Jamaica</option>
                                                <option value="109">Japan</option>
                                                <option value="110">Jersey</option>
                                                <option value="111">Jordan</option>
                                                <option value="112">Kazakhstan</option>
                                                <option value="113">Kenya</option>
                                                <option value="114">Kiribati</option>
                                                <option value="115">Korea North</option>
                                                <option value="116">Korea South</option>
                                                <option value="117">Kuwait</option>
                                                <option value="118">Kyrgyzstan</option>
                                                <option value="119">Laos</option>
                                                <option value="120">Latvia</option>
                                                <option value="121">Lebanon</option>
                                                <option value="122">Lesotho</option>
                                                <option value="123">Liberia</option>
                                                <option value="124">Libya</option>
                                                <option value="125">Liechtenstein
                                                </option>
                                                <option value="126">Lithuania</option>
                                                <option value="127">Luxembourg</option>
                                                <option value="128">Macau S.A.R.
                                                </option>
                                                <option value="129">Macedonia</option>
                                                <option value="130">Madagascar</option>
                                                <option value="131">Malawi</option>
                                                <option value="132">Malaysia</option>
                                                <option value="133">Maldives</option>
                                                <option value="134">Mali</option>
                                                <option value="135">Malta</option>
                                                <option value="136">Man (Isle of)
                                                </option>
                                                <option value="137">Marshall Islands
                                                </option>
                                                <option value="138">Martinique</option>
                                                <option value="139">Mauritania</option>
                                                <option value="140">Mauritius</option>
                                                <option value="141">Mayotte</option>
                                                <option value="142">Mexico</option>
                                                <option value="143">Micronesia</option>
                                                <option value="144">Moldova</option>
                                                <option value="145">Monaco</option>
                                                <option value="146">Mongolia</option>
                                                <option value="147">Montserrat</option>
                                                <option value="148">Morocco</option>
                                                <option value="149">Mozambique</option>
                                                <option value="150">Myanmar</option>
                                                <option value="151">Namibia</option>
                                                <option value="152">Nauru</option>
                                                <option value="153">Nepal</option>
                                                <option value="154">Netherlands Antilles
                                                </option>
                                                <option value="155">Netherlands The
                                                </option>
                                                <option value="156">New Caledonia
                                                </option>
                                                <option value="157">New Zealand</option>
                                                <option value="158">Nicaragua</option>
                                                <option value="159">Niger</option>
                                                <option value="160">Nigeria</option>
                                                <option value="161">Niue</option>
                                                <option value="162">Norfolk Island
                                                </option>
                                                <option value="163">Northern Mariana
                                                    Islands
                                                </option>
                                                <option value="164">Norway</option>
                                                <option value="165">Oman</option>
                                                <option value="166">Pakistan</option>
                                                <option value="167">Palau</option>
                                                <option value="168">Palestinian
                                                    Territory
                                                    Occupied</option>
                                                <option value="169">Panama</option>
                                                <option value="170">Papua new Guinea
                                                </option>
                                                <option value="171">Paraguay</option>
                                                <option value="172">Peru</option>
                                                <option value="173">Philippines</option>
                                                <option value="174">Pitcairn Island
                                                </option>
                                                <option value="175">Poland</option>
                                                <option value="176">Portugal</option>
                                                <option value="177">Puerto Rico</option>
                                                <option value="178">Qatar</option>
                                                <option value="179">Reunion</option>
                                                <option value="180">Romania</option>
                                                <option value="181">Russia</option>
                                                <option value="182">Rwanda</option>
                                                <option value="183">Saint Helena
                                                </option>
                                                <option value="184">Saint Kitts And
                                                    Nevis
                                                </option>
                                                <option value="185">Saint Lucia</option>
                                                <option value="186">Saint Pierre and
                                                    Miquelon
                                                </option>
                                                <option value="187">Saint Vincent And
                                                    The
                                                    Grenadines</option>
                                                <option value="188">Samoa</option>
                                                <option value="189">San Marino</option>
                                                <option value="190">Sao Tome and
                                                    Principe
                                                </option>
                                                <option value="191">Saudi Arabia
                                                </option>
                                                <option value="192">Senegal</option>
                                                <option value="193">Serbia</option>
                                                <option value="194">Seychelles</option>
                                                <option value="195">Sierra Leone
                                                </option>
                                                <option value="196">Singapore</option>
                                                <option value="197">Slovakia</option>
                                                <option value="198">Slovenia</option>
                                                <option value="199">Smaller Territories
                                                    of the
                                                    UK</option>
                                                <option value="200">Solomon Islands
                                                </option>
                                                <option value="201">Somalia</option>
                                                <option value="202">South Africa
                                                </option>
                                                <option value="203">South Georgia
                                                </option>
                                                <option value="204">South Sudan</option>
                                                <option value="205">Spain</option>
                                                <option value="206">Sri Lanka</option>
                                                <option value="207">Sudan</option>
                                                <option value="208">Suriname</option>
                                                <option value="209">Svalbard And Jan
                                                    Mayen
                                                    Islands</option>
                                                <option value="210">Swaziland</option>
                                                <option value="211">Sweden</option>
                                                <option value="212">Switzerland</option>
                                                <option value="213">Syria</option>
                                                <option value="214">Taiwan</option>
                                                <option value="215">Tajikistan</option>
                                                <option value="216">Tanzania</option>
                                                <option value="217">Thailand</option>
                                                <option value="218">Togo</option>
                                                <option value="219">Tokelau</option>
                                                <option value="220">Tonga</option>
                                                <option value="221">Trinidad And Tobago
                                                </option>
                                                <option value="222">Tunisia</option>
                                                <option value="223">Turkey</option>
                                                <option value="224">Turkmenistan
                                                </option>
                                                <option value="225">Turks And Caicos
                                                    Islands
                                                </option>
                                                <option value="226">Tuvalu</option>
                                                <option value="227">Uganda</option>
                                                <option value="228">Ukraine</option>
                                                <option value="229">United Arab Emirates
                                                </option>
                                                <option value="230">United Kingdom
                                                </option>
                                                <option value="231">United States
                                                </option>
                                                <option value="232">United States Minor
                                                    Outlying
                                                    Islands</option>
                                                <option value="233">Uruguay</option>
                                                <option value="234">Uzbekistan</option>
                                                <option value="235">Vanuatu</option>
                                                <option value="236">Vatican City State
                                                    (Holy
                                                    See)</option>
                                                <option value="237">Venezuela</option>
                                                <option value="238">Vietnam</option>
                                                <option value="239">Virgin Islands
                                                    (British)
                                                </option>
                                                <option value="240">Virgin Islands (US)
                                                </option>
                                                <option value="241">Wallis And Futuna
                                                    Islands
                                                </option>
                                                <option value="242">Western Sahara
                                                </option>
                                                <option value="243">Yemen</option>
                                                <option value="244">Yugoslavia</option>
                                                <option value="245">Zambia</option>
                                                <option value="246">Zimbabwe</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-3">
                                        <div class="mb-3">
                                            <label class="form-label">State / Province</label>
                                            <select class="form-control drop-select">
                                                <option>Select State / Province</option>
                                                <option value="42"> Badakhshan </option>
                                                <option value="43"> Badgis </option>
                                                <option value="44"> Baglan </option>
                                                <option value="45"> Balkh </option>
                                                <option value="46"> Bamiyan </option>
                                                <option value="47"> Farah </option>
                                                <option value="48"> Faryab </option>
                                                <option value="49"> Gawr </option>
                                                <option value="50"> Gazni </option>
                                                <option value="51"> Herat </option>
                                                <option value="52"> Hilmand </option>
                                                <option value="53"> Jawzjan </option>
                                                <option value="54"> Kabul </option>
                                                <option value="55"> Kapisa </option>
                                                <option value="56"> Khawst </option>
                                                <option value="57"> Kunar </option>
                                                <option value="58"> Lagman </option>
                                                <option value="59"> Lawghar </option>
                                                <option value="60"> Nangarhar </option>
                                                <option value="61"> Nimruz </option>
                                                <option value="62"> Nuristan </option>
                                                <option value="63"> Paktika </option>
                                                <option value="64"> Paktiya </option>
                                                <option value="65"> Parwan </option>
                                                <option value="66"> Qandahar </option>
                                                <option value="67"> Qunduz </option>
                                                <option value="68"> Samangan </option>
                                                <option value="69"> Sar-e Pul </option>
                                                <option value="70"> Takhar </option>
                                                <option value="71"> Uruzgan </option>
                                                <option value="72"> Wardag </option>
                                                <option value="73"> Zabul </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="mb-3">
                                            <label class="form-label">City</label>
                                            <select class="form-control drop-select">
                                                <option>Select city</option>
                                                <option value="42"> Badakhshan </option>
                                                <option value="43"> Badgis </option>
                                                <option value="44"> Baglan </option>
                                                <option value="45"> Balkh </option>
                                                <option value="46"> Bamiyan </option>
                                                <option value="47"> Farah </option>
                                                <option value="48"> Faryab </option>
                                                <option value="49"> Gawr </option>
                                                <option value="50"> Gazni </option>
                                                <option value="51"> Herat </option>
                                                <option value="52"> Hilmand </option>
                                                <option value="53"> Jawzjan </option>
                                                <option value="54"> Kabul </option>
                                                <option value="55"> Kapisa </option>
                                                <option value="56"> Khawst </option>
                                                <option value="57"> Kunar </option>
                                                <option value="58"> Lagman </option>
                                                <option value="59"> Lawghar </option>
                                                <option value="60"> Nangarhar </option>
                                                <option value="61"> Nimruz </option>
                                                <option value="62"> Nuristan </option>
                                                <option value="63"> Paktika </option>
                                                <option value="64"> Paktiya </option>
                                                <option value="65"> Parwan </option>
                                                <option value="66"> Qandahar </option>
                                                <option value="67"> Qunduz </option>
                                                <option value="68"> Samangan </option>
                                                <option value="69"> Sar-e Pul </option>
                                                <option value="70"> Takhar </option>
                                                <option value="71"> Uruzgan </option>
                                                <option value="72"> Wardag </option>
                                                <option value="73"> Zabul </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Postal Code / Zip Code</label>
                                            <input type="text" value="" class="form-control"
                                                placeholder="Postal Code / Zip Code">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Street Address
                                                <span class="small-text">Your postal address. Helps us increase
                                                    visibility of your profile in relevant geography</span>
                                            </label>
                                            <input type="text" value="" class="form-control"
                                                placeholder="Street Address">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Online Presence
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form>
                                <div class="row">
                                    <div class="d-flex social-links">
                                        <h2>Link Your Social Accounts</h2>
                                        <ul>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-behance-square"></i></a></li>
                                            <li><a href="#"><i class="fab fa-github"></i></a></li>
                                            <li><a href="#"><i class="fab fa-medium"></i></a></li>
                                            <li><a href="#"><i class="fab fa-dribbble-square"></i></a></li>
                                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fas fa-link"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                        <div class="mb-1">
                                            <div class="lable-grp">
                                                <label class="form-label">Website</label>
                                                <input type="link" value="" class="form-control"
                                                    placeholder="https://www.yoursite.com">
                                                <span class="icon"><a href="#"><i
                                                            class="fas fa-trash-alt"></i></a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                        <div class="mb-1">
                                            <div class="lable-grp">
                                                <label class="form-label">Website</label>
                                                <input type="link" value="" class="form-control"
                                                    placeholder="https://www.yoursite.com">
                                                <span class="icon"><a href="#"><i
                                                            class="fas fa-trash-alt"></i></a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                        <div class="mb-1">
                                            <div class="lable-grp">
                                                <label class="form-label">Website</label>
                                                <input type="link" value="" class="form-control"
                                                    placeholder="https://www.yoursite.com">
                                                <span class="icon"><a href="#"><i
                                                            class="fas fa-trash-alt"></i></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                </div> -->
                <div class="row">
                    <div class="col-12">
                        <form class="mt-3 mb-2">
                            <button type="button" class="save-btn" data-bs-dismiss="modal">Save and
                                Continue</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- <div class="modal fade common-modal common-modal-css" id="addbusinesspop" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="heading">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Create Your Business Profile</h1>
                        <button type="button" class="btn close_btn" data-bs-dismiss="modal" aria-label="Close">
                            <img src="assets/image/close.png">
                        </button>
                    </div>
                    <hr class="cstm-line">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Basic Information
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                                <div class="uploadFile">
                                                    <div class="upload-wrap">
                                                        <i class="fas fa-image"></i>
                                                        <p class="upload-files"> Profile Image/Business Logo</p>
                                                        <span>Upload a professional picture if you are a
                                                            freelancer</span>
                                                    </div>
                                                    <input type="file" class="inputfile form-control" name="file">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Country</label>
                                                    <select class="form-control drop-select">
                                                        <option value="">Select Country</option>
                                                        <option value="1">Afghanistan</option>
                                                        <option value="2">Albania</option>
                                                        <option value="3">Algeria</option>
                                                        <option value="4">American Samoa
                                                        </option>
                                                        <option value="5">Andorra</option>
                                                        <option value="6">Angola</option>
                                                        <option value="7">Anguilla</option>
                                                        <option value="8">Antarctica</option>
                                                        <option value="9">Antigua And Barbuda
                                                        </option>
                                                        <option value="10">Argentina</option>
                                                        <option value="11">Armenia</option>
                                                        <option value="12">Aruba</option>
                                                        <option value="13">Australia</option>
                                                        <option value="14">Austria</option>
                                                        <option value="15">Azerbaijan</option>
                                                        <option value="16">Bahamas The</option>
                                                        <option value="17">Bahrain</option>
                                                        <option value="18">Bangladesh</option>
                                                        <option value="19">Barbados</option>
                                                        <option value="20">Belarus</option>
                                                        <option value="21">Belgium</option>
                                                        <option value="22">Belize</option>
                                                        <option value="23">Benin</option>
                                                        <option value="24">Bermuda</option>
                                                        <option value="25">Bhutan</option>
                                                        <option value="26">Bolivia</option>
                                                        <option value="27">Bosnia and
                                                            Herzegovina
                                                        </option>
                                                        <option value="28">Botswana</option>
                                                        <option value="29">Bouvet Island
                                                        </option>
                                                        <option value="30">Brazil</option>
                                                        <option value="31">British Indian Ocean
                                                            Territory</option>
                                                        <option value="32">Brunei</option>
                                                        <option value="33">Bulgaria</option>
                                                        <option value="34">Burkina Faso</option>
                                                        <option value="35">Burundi</option>
                                                        <option value="36">Cambodia</option>
                                                        <option value="37">Cameroon</option>
                                                        <option value="38">Canada</option>
                                                        <option value="39">Cape Verde</option>
                                                        <option value="40">Cayman Islands
                                                        </option>
                                                        <option value="41">Central African
                                                            Republic
                                                        </option>
                                                        <option value="42">Chad</option>
                                                        <option value="43">Chile</option>
                                                        <option value="44">China</option>
                                                        <option value="45">Christmas Island
                                                        </option>
                                                        <option value="46">Cocos (Keeling)
                                                            Islands
                                                        </option>
                                                        <option value="47">Colombia</option>
                                                        <option value="48">Comoros</option>
                                                        <option value="49">Republic Of The Congo
                                                        </option>
                                                        <option value="50">Democratic Republic
                                                            Of The
                                                            Congo</option>
                                                        <option value="51">Cook Islands</option>
                                                        <option value="52">Costa Rica</option>
                                                        <option value="53">Cote D'Ivoire (Ivory
                                                            Coast)
                                                        </option>
                                                        <option value="54">Croatia (Hrvatska)
                                                        </option>
                                                        <option value="55">Cuba</option>
                                                        <option value="56">Cyprus</option>
                                                        <option value="57">Czech Republic
                                                        </option>
                                                        <option value="58">Denmark</option>
                                                        <option value="59">Djibouti</option>
                                                        <option value="60">Dominica</option>
                                                        <option value="61">Dominican Republic
                                                        </option>
                                                        <option value="62">East Timor</option>
                                                        <option value="63">Ecuador</option>
                                                        <option value="64">Egypt</option>
                                                        <option value="65">El Salvador</option>
                                                        <option value="66">Equatorial Guinea
                                                        </option>
                                                        <option value="67">Eritrea</option>
                                                        <option value="68">Estonia</option>
                                                        <option value="69">Ethiopia</option>
                                                        <option value="70">External Territories
                                                            of
                                                            Australia</option>
                                                        <option value="71">Falkland Islands
                                                        </option>
                                                        <option value="72">Faroe Islands
                                                        </option>
                                                        <option value="73">Fiji Islands</option>
                                                        <option value="74">Finland</option>
                                                        <option value="75">France</option>
                                                        <option value="76">French Guiana
                                                        </option>
                                                        <option value="77">French Polynesia
                                                        </option>
                                                        <option value="78">French Southern
                                                            Territories
                                                        </option>
                                                        <option value="79">Gabon</option>
                                                        <option value="80">Gambia The</option>
                                                        <option value="81">Georgia</option>
                                                        <option value="82">Germany</option>
                                                        <option value="83">Ghana</option>
                                                        <option value="84">Gibraltar</option>
                                                        <option value="85">Greece</option>
                                                        <option value="86">Greenland</option>
                                                        <option value="87">Grenada</option>
                                                        <option value="88">Guadeloupe</option>
                                                        <option value="89">Guam</option>
                                                        <option value="90">Guatemala</option>
                                                        <option value="91">Guernsey and Alderney
                                                        </option>
                                                        <option value="92">Guinea</option>
                                                        <option value="93">Guinea-Bissau
                                                        </option>
                                                        <option value="94">Guyana</option>
                                                        <option value="95">Haiti</option>
                                                        <option value="96">Heard and McDonald
                                                            Islands
                                                        </option>
                                                        <option value="97">Honduras</option>
                                                        <option value="98">Hong Kong S.A.R.
                                                        </option>
                                                        <option value="99">Hungary</option>
                                                        <option value="100">Iceland</option>
                                                        <option value="101">India</option>
                                                        <option value="102">Indonesia</option>
                                                        <option value="103">Iran</option>
                                                        <option value="104">Iraq</option>
                                                        <option value="105">Ireland</option>
                                                        <option value="106">Israel</option>
                                                        <option value="107">Italy</option>
                                                        <option value="108">Jamaica</option>
                                                        <option value="109">Japan</option>
                                                        <option value="110">Jersey</option>
                                                        <option value="111">Jordan</option>
                                                        <option value="112">Kazakhstan</option>
                                                        <option value="113">Kenya</option>
                                                        <option value="114">Kiribati</option>
                                                        <option value="115">Korea North</option>
                                                        <option value="116">Korea South</option>
                                                        <option value="117">Kuwait</option>
                                                        <option value="118">Kyrgyzstan</option>
                                                        <option value="119">Laos</option>
                                                        <option value="120">Latvia</option>
                                                        <option value="121">Lebanon</option>
                                                        <option value="122">Lesotho</option>
                                                        <option value="123">Liberia</option>
                                                        <option value="124">Libya</option>
                                                        <option value="125">Liechtenstein
                                                        </option>
                                                        <option value="126">Lithuania</option>
                                                        <option value="127">Luxembourg</option>
                                                        <option value="128">Macau S.A.R.
                                                        </option>
                                                        <option value="129">Macedonia</option>
                                                        <option value="130">Madagascar</option>
                                                        <option value="131">Malawi</option>
                                                        <option value="132">Malaysia</option>
                                                        <option value="133">Maldives</option>
                                                        <option value="134">Mali</option>
                                                        <option value="135">Malta</option>
                                                        <option value="136">Man (Isle of)
                                                        </option>
                                                        <option value="137">Marshall Islands
                                                        </option>
                                                        <option value="138">Martinique</option>
                                                        <option value="139">Mauritania</option>
                                                        <option value="140">Mauritius</option>
                                                        <option value="141">Mayotte</option>
                                                        <option value="142">Mexico</option>
                                                        <option value="143">Micronesia</option>
                                                        <option value="144">Moldova</option>
                                                        <option value="145">Monaco</option>
                                                        <option value="146">Mongolia</option>
                                                        <option value="147">Montserrat</option>
                                                        <option value="148">Morocco</option>
                                                        <option value="149">Mozambique</option>
                                                        <option value="150">Myanmar</option>
                                                        <option value="151">Namibia</option>
                                                        <option value="152">Nauru</option>
                                                        <option value="153">Nepal</option>
                                                        <option value="154">Netherlands Antilles
                                                        </option>
                                                        <option value="155">Netherlands The
                                                        </option>
                                                        <option value="156">New Caledonia
                                                        </option>
                                                        <option value="157">New Zealand</option>
                                                        <option value="158">Nicaragua</option>
                                                        <option value="159">Niger</option>
                                                        <option value="160">Nigeria</option>
                                                        <option value="161">Niue</option>
                                                        <option value="162">Norfolk Island
                                                        </option>
                                                        <option value="163">Northern Mariana
                                                            Islands
                                                        </option>
                                                        <option value="164">Norway</option>
                                                        <option value="165">Oman</option>
                                                        <option value="166">Pakistan</option>
                                                        <option value="167">Palau</option>
                                                        <option value="168">Palestinian
                                                            Territory
                                                            Occupied</option>
                                                        <option value="169">Panama</option>
                                                        <option value="170">Papua new Guinea
                                                        </option>
                                                        <option value="171">Paraguay</option>
                                                        <option value="172">Peru</option>
                                                        <option value="173">Philippines</option>
                                                        <option value="174">Pitcairn Island
                                                        </option>
                                                        <option value="175">Poland</option>
                                                        <option value="176">Portugal</option>
                                                        <option value="177">Puerto Rico</option>
                                                        <option value="178">Qatar</option>
                                                        <option value="179">Reunion</option>
                                                        <option value="180">Romania</option>
                                                        <option value="181">Russia</option>
                                                        <option value="182">Rwanda</option>
                                                        <option value="183">Saint Helena
                                                        </option>
                                                        <option value="184">Saint Kitts And
                                                            Nevis
                                                        </option>
                                                        <option value="185">Saint Lucia</option>
                                                        <option value="186">Saint Pierre and
                                                            Miquelon
                                                        </option>
                                                        <option value="187">Saint Vincent And
                                                            The
                                                            Grenadines</option>
                                                        <option value="188">Samoa</option>
                                                        <option value="189">San Marino</option>
                                                        <option value="190">Sao Tome and
                                                            Principe
                                                        </option>
                                                        <option value="191">Saudi Arabia
                                                        </option>
                                                        <option value="192">Senegal</option>
                                                        <option value="193">Serbia</option>
                                                        <option value="194">Seychelles</option>
                                                        <option value="195">Sierra Leone
                                                        </option>
                                                        <option value="196">Singapore</option>
                                                        <option value="197">Slovakia</option>
                                                        <option value="198">Slovenia</option>
                                                        <option value="199">Smaller Territories
                                                            of the
                                                            UK</option>
                                                        <option value="200">Solomon Islands
                                                        </option>
                                                        <option value="201">Somalia</option>
                                                        <option value="202">South Africa
                                                        </option>
                                                        <option value="203">South Georgia
                                                        </option>
                                                        <option value="204">South Sudan</option>
                                                        <option value="205">Spain</option>
                                                        <option value="206">Sri Lanka</option>
                                                        <option value="207">Sudan</option>
                                                        <option value="208">Suriname</option>
                                                        <option value="209">Svalbard And Jan
                                                            Mayen
                                                            Islands</option>
                                                        <option value="210">Swaziland</option>
                                                        <option value="211">Sweden</option>
                                                        <option value="212">Switzerland</option>
                                                        <option value="213">Syria</option>
                                                        <option value="214">Taiwan</option>
                                                        <option value="215">Tajikistan</option>
                                                        <option value="216">Tanzania</option>
                                                        <option value="217">Thailand</option>
                                                        <option value="218">Togo</option>
                                                        <option value="219">Tokelau</option>
                                                        <option value="220">Tonga</option>
                                                        <option value="221">Trinidad And Tobago
                                                        </option>
                                                        <option value="222">Tunisia</option>
                                                        <option value="223">Turkey</option>
                                                        <option value="224">Turkmenistan
                                                        </option>
                                                        <option value="225">Turks And Caicos
                                                            Islands
                                                        </option>
                                                        <option value="226">Tuvalu</option>
                                                        <option value="227">Uganda</option>
                                                        <option value="228">Ukraine</option>
                                                        <option value="229">United Arab Emirates
                                                        </option>
                                                        <option value="230">United Kingdom
                                                        </option>
                                                        <option value="231">United States
                                                        </option>
                                                        <option value="232">United States Minor
                                                            Outlying
                                                            Islands</option>
                                                        <option value="233">Uruguay</option>
                                                        <option value="234">Uzbekistan</option>
                                                        <option value="235">Vanuatu</option>
                                                        <option value="236">Vatican City State
                                                            (Holy
                                                            See)</option>
                                                        <option value="237">Venezuela</option>
                                                        <option value="238">Vietnam</option>
                                                        <option value="239">Virgin Islands
                                                            (British)
                                                        </option>
                                                        <option value="240">Virgin Islands (US)
                                                        </option>
                                                        <option value="241">Wallis And Futuna
                                                            Islands
                                                        </option>
                                                        <option value="242">Western Sahara
                                                        </option>
                                                        <option value="243">Yemen</option>
                                                        <option value="244">Yugoslavia</option>
                                                        <option value="245">Zambia</option>
                                                        <option value="246">Zimbabwe</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Your Name/Business Name</label>
                                                    <input type="text" value="" class="form-control"
                                                        placeholder="Business Name (Required)">
                                                    <span class="small-text">Official name of your business. Use your
                                                        personal name if you are a freelancer.</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 brand-name-fld">

                                                <label class="form-label">Brand or Display name</label>
                                                <input type="text" value="" class="form-control"
                                                    placeholder="Business Name (Required)">
                                                <span class="small-text">This name will be shown publicly on your
                                                    profile.</span>

                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="mb-3">
                                                    <div class="add-field">
                                                        <button type="button"> <i class="fas fa-plus-square"></i>Add
                                                            More Fields</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Profile Information
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="mt-3">
                                                <label class="form-label">What describes you best?</label>
                                                <div class="client-type-wrap">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="exampleRadios" id="exampleRadios11" value="option1">
                                                        <label class="form-check-label" for="exampleRadios11">
                                                            Individual/Freelancer
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="exampleRadios" id="exampleRadios11" value="option1">
                                                        <label class="form-check-label" for="exampleRadios11">
                                                            Team/Agency/Company
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                            <div class="mb-3">
                                                <label class="form-label">Set your Profile URL
                                                    <span class="small-text">Set a URL for your new profile. Help people
                                                        find you online </span>
                                                </label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">@</span>
                                                    <input type="text" class="form-control" placeholder="Username"
                                                        aria-label="Username" aria-describedby="basic-addon1">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                            <div class="mb-3">
                                                <label class="form-label">In Business Since
                                                    <span class="small-text">Month and Year of when you started the
                                                        business</span>
                                                </label>
                                                <select id="multiple" class="js-states form-control" multiple>
                                                    <option>Logo Design</option>
                                                    <option>UI Designer</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Tell us more about your business
                                                    <span class="small-text"> Everything that people should know about
                                                        your business</span>
                                                </label>
                                                <textarea class="form-control" style="height:120px"></textarea>

                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Address <span>(optional)</span>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-3">
                                            <div class="mb-3">
                                                <label class="form-label">Select Country</label>
                                                <select class="form-control drop-select">
                                                    <option value="">Select Country</option>
                                                    <option value="1">Afghanistan</option>
                                                    <option value="2">Albania</option>
                                                    <option value="3">Algeria</option>
                                                    <option value="4">American Samoa
                                                    </option>
                                                    <option value="5">Andorra</option>
                                                    <option value="6">Angola</option>
                                                    <option value="7">Anguilla</option>
                                                    <option value="8">Antarctica</option>
                                                    <option value="9">Antigua And Barbuda
                                                    </option>
                                                    <option value="10">Argentina</option>
                                                    <option value="11">Armenia</option>
                                                    <option value="12">Aruba</option>
                                                    <option value="13">Australia</option>
                                                    <option value="14">Austria</option>
                                                    <option value="15">Azerbaijan</option>
                                                    <option value="16">Bahamas The</option>
                                                    <option value="17">Bahrain</option>
                                                    <option value="18">Bangladesh</option>
                                                    <option value="19">Barbados</option>
                                                    <option value="20">Belarus</option>
                                                    <option value="21">Belgium</option>
                                                    <option value="22">Belize</option>
                                                    <option value="23">Benin</option>
                                                    <option value="24">Bermuda</option>
                                                    <option value="25">Bhutan</option>
                                                    <option value="26">Bolivia</option>
                                                    <option value="27">Bosnia and
                                                        Herzegovina
                                                    </option>
                                                    <option value="28">Botswana</option>
                                                    <option value="29">Bouvet Island
                                                    </option>
                                                    <option value="30">Brazil</option>
                                                    <option value="31">British Indian Ocean
                                                        Territory</option>
                                                    <option value="32">Brunei</option>
                                                    <option value="33">Bulgaria</option>
                                                    <option value="34">Burkina Faso</option>
                                                    <option value="35">Burundi</option>
                                                    <option value="36">Cambodia</option>
                                                    <option value="37">Cameroon</option>
                                                    <option value="38">Canada</option>
                                                    <option value="39">Cape Verde</option>
                                                    <option value="40">Cayman Islands
                                                    </option>
                                                    <option value="41">Central African
                                                        Republic
                                                    </option>
                                                    <option value="42">Chad</option>
                                                    <option value="43">Chile</option>
                                                    <option value="44">China</option>
                                                    <option value="45">Christmas Island
                                                    </option>
                                                    <option value="46">Cocos (Keeling)
                                                        Islands
                                                    </option>
                                                    <option value="47">Colombia</option>
                                                    <option value="48">Comoros</option>
                                                    <option value="49">Republic Of The Congo
                                                    </option>
                                                    <option value="50">Democratic Republic
                                                        Of The
                                                        Congo</option>
                                                    <option value="51">Cook Islands</option>
                                                    <option value="52">Costa Rica</option>
                                                    <option value="53">Cote D'Ivoire (Ivory
                                                        Coast)
                                                    </option>
                                                    <option value="54">Croatia (Hrvatska)
                                                    </option>
                                                    <option value="55">Cuba</option>
                                                    <option value="56">Cyprus</option>
                                                    <option value="57">Czech Republic
                                                    </option>
                                                    <option value="58">Denmark</option>
                                                    <option value="59">Djibouti</option>
                                                    <option value="60">Dominica</option>
                                                    <option value="61">Dominican Republic
                                                    </option>
                                                    <option value="62">East Timor</option>
                                                    <option value="63">Ecuador</option>
                                                    <option value="64">Egypt</option>
                                                    <option value="65">El Salvador</option>
                                                    <option value="66">Equatorial Guinea
                                                    </option>
                                                    <option value="67">Eritrea</option>
                                                    <option value="68">Estonia</option>
                                                    <option value="69">Ethiopia</option>
                                                    <option value="70">External Territories
                                                        of
                                                        Australia</option>
                                                    <option value="71">Falkland Islands
                                                    </option>
                                                    <option value="72">Faroe Islands
                                                    </option>
                                                    <option value="73">Fiji Islands</option>
                                                    <option value="74">Finland</option>
                                                    <option value="75">France</option>
                                                    <option value="76">French Guiana
                                                    </option>
                                                    <option value="77">French Polynesia
                                                    </option>
                                                    <option value="78">French Southern
                                                        Territories
                                                    </option>
                                                    <option value="79">Gabon</option>
                                                    <option value="80">Gambia The</option>
                                                    <option value="81">Georgia</option>
                                                    <option value="82">Germany</option>
                                                    <option value="83">Ghana</option>
                                                    <option value="84">Gibraltar</option>
                                                    <option value="85">Greece</option>
                                                    <option value="86">Greenland</option>
                                                    <option value="87">Grenada</option>
                                                    <option value="88">Guadeloupe</option>
                                                    <option value="89">Guam</option>
                                                    <option value="90">Guatemala</option>
                                                    <option value="91">Guernsey and Alderney
                                                    </option>
                                                    <option value="92">Guinea</option>
                                                    <option value="93">Guinea-Bissau
                                                    </option>
                                                    <option value="94">Guyana</option>
                                                    <option value="95">Haiti</option>
                                                    <option value="96">Heard and McDonald
                                                        Islands
                                                    </option>
                                                    <option value="97">Honduras</option>
                                                    <option value="98">Hong Kong S.A.R.
                                                    </option>
                                                    <option value="99">Hungary</option>
                                                    <option value="100">Iceland</option>
                                                    <option value="101">India</option>
                                                    <option value="102">Indonesia</option>
                                                    <option value="103">Iran</option>
                                                    <option value="104">Iraq</option>
                                                    <option value="105">Ireland</option>
                                                    <option value="106">Israel</option>
                                                    <option value="107">Italy</option>
                                                    <option value="108">Jamaica</option>
                                                    <option value="109">Japan</option>
                                                    <option value="110">Jersey</option>
                                                    <option value="111">Jordan</option>
                                                    <option value="112">Kazakhstan</option>
                                                    <option value="113">Kenya</option>
                                                    <option value="114">Kiribati</option>
                                                    <option value="115">Korea North</option>
                                                    <option value="116">Korea South</option>
                                                    <option value="117">Kuwait</option>
                                                    <option value="118">Kyrgyzstan</option>
                                                    <option value="119">Laos</option>
                                                    <option value="120">Latvia</option>
                                                    <option value="121">Lebanon</option>
                                                    <option value="122">Lesotho</option>
                                                    <option value="123">Liberia</option>
                                                    <option value="124">Libya</option>
                                                    <option value="125">Liechtenstein
                                                    </option>
                                                    <option value="126">Lithuania</option>
                                                    <option value="127">Luxembourg</option>
                                                    <option value="128">Macau S.A.R.
                                                    </option>
                                                    <option value="129">Macedonia</option>
                                                    <option value="130">Madagascar</option>
                                                    <option value="131">Malawi</option>
                                                    <option value="132">Malaysia</option>
                                                    <option value="133">Maldives</option>
                                                    <option value="134">Mali</option>
                                                    <option value="135">Malta</option>
                                                    <option value="136">Man (Isle of)
                                                    </option>
                                                    <option value="137">Marshall Islands
                                                    </option>
                                                    <option value="138">Martinique</option>
                                                    <option value="139">Mauritania</option>
                                                    <option value="140">Mauritius</option>
                                                    <option value="141">Mayotte</option>
                                                    <option value="142">Mexico</option>
                                                    <option value="143">Micronesia</option>
                                                    <option value="144">Moldova</option>
                                                    <option value="145">Monaco</option>
                                                    <option value="146">Mongolia</option>
                                                    <option value="147">Montserrat</option>
                                                    <option value="148">Morocco</option>
                                                    <option value="149">Mozambique</option>
                                                    <option value="150">Myanmar</option>
                                                    <option value="151">Namibia</option>
                                                    <option value="152">Nauru</option>
                                                    <option value="153">Nepal</option>
                                                    <option value="154">Netherlands Antilles
                                                    </option>
                                                    <option value="155">Netherlands The
                                                    </option>
                                                    <option value="156">New Caledonia
                                                    </option>
                                                    <option value="157">New Zealand</option>
                                                    <option value="158">Nicaragua</option>
                                                    <option value="159">Niger</option>
                                                    <option value="160">Nigeria</option>
                                                    <option value="161">Niue</option>
                                                    <option value="162">Norfolk Island
                                                    </option>
                                                    <option value="163">Northern Mariana
                                                        Islands
                                                    </option>
                                                    <option value="164">Norway</option>
                                                    <option value="165">Oman</option>
                                                    <option value="166">Pakistan</option>
                                                    <option value="167">Palau</option>
                                                    <option value="168">Palestinian
                                                        Territory
                                                        Occupied</option>
                                                    <option value="169">Panama</option>
                                                    <option value="170">Papua new Guinea
                                                    </option>
                                                    <option value="171">Paraguay</option>
                                                    <option value="172">Peru</option>
                                                    <option value="173">Philippines</option>
                                                    <option value="174">Pitcairn Island
                                                    </option>
                                                    <option value="175">Poland</option>
                                                    <option value="176">Portugal</option>
                                                    <option value="177">Puerto Rico</option>
                                                    <option value="178">Qatar</option>
                                                    <option value="179">Reunion</option>
                                                    <option value="180">Romania</option>
                                                    <option value="181">Russia</option>
                                                    <option value="182">Rwanda</option>
                                                    <option value="183">Saint Helena
                                                    </option>
                                                    <option value="184">Saint Kitts And
                                                        Nevis
                                                    </option>
                                                    <option value="185">Saint Lucia</option>
                                                    <option value="186">Saint Pierre and
                                                        Miquelon
                                                    </option>
                                                    <option value="187">Saint Vincent And
                                                        The
                                                        Grenadines</option>
                                                    <option value="188">Samoa</option>
                                                    <option value="189">San Marino</option>
                                                    <option value="190">Sao Tome and
                                                        Principe
                                                    </option>
                                                    <option value="191">Saudi Arabia
                                                    </option>
                                                    <option value="192">Senegal</option>
                                                    <option value="193">Serbia</option>
                                                    <option value="194">Seychelles</option>
                                                    <option value="195">Sierra Leone
                                                    </option>
                                                    <option value="196">Singapore</option>
                                                    <option value="197">Slovakia</option>
                                                    <option value="198">Slovenia</option>
                                                    <option value="199">Smaller Territories
                                                        of the
                                                        UK</option>
                                                    <option value="200">Solomon Islands
                                                    </option>
                                                    <option value="201">Somalia</option>
                                                    <option value="202">South Africa
                                                    </option>
                                                    <option value="203">South Georgia
                                                    </option>
                                                    <option value="204">South Sudan</option>
                                                    <option value="205">Spain</option>
                                                    <option value="206">Sri Lanka</option>
                                                    <option value="207">Sudan</option>
                                                    <option value="208">Suriname</option>
                                                    <option value="209">Svalbard And Jan
                                                        Mayen
                                                        Islands</option>
                                                    <option value="210">Swaziland</option>
                                                    <option value="211">Sweden</option>
                                                    <option value="212">Switzerland</option>
                                                    <option value="213">Syria</option>
                                                    <option value="214">Taiwan</option>
                                                    <option value="215">Tajikistan</option>
                                                    <option value="216">Tanzania</option>
                                                    <option value="217">Thailand</option>
                                                    <option value="218">Togo</option>
                                                    <option value="219">Tokelau</option>
                                                    <option value="220">Tonga</option>
                                                    <option value="221">Trinidad And Tobago
                                                    </option>
                                                    <option value="222">Tunisia</option>
                                                    <option value="223">Turkey</option>
                                                    <option value="224">Turkmenistan
                                                    </option>
                                                    <option value="225">Turks And Caicos
                                                        Islands
                                                    </option>
                                                    <option value="226">Tuvalu</option>
                                                    <option value="227">Uganda</option>
                                                    <option value="228">Ukraine</option>
                                                    <option value="229">United Arab Emirates
                                                    </option>
                                                    <option value="230">United Kingdom
                                                    </option>
                                                    <option value="231">United States
                                                    </option>
                                                    <option value="232">United States Minor
                                                        Outlying
                                                        Islands</option>
                                                    <option value="233">Uruguay</option>
                                                    <option value="234">Uzbekistan</option>
                                                    <option value="235">Vanuatu</option>
                                                    <option value="236">Vatican City State
                                                        (Holy
                                                        See)</option>
                                                    <option value="237">Venezuela</option>
                                                    <option value="238">Vietnam</option>
                                                    <option value="239">Virgin Islands
                                                        (British)
                                                    </option>
                                                    <option value="240">Virgin Islands (US)
                                                    </option>
                                                    <option value="241">Wallis And Futuna
                                                        Islands
                                                    </option>
                                                    <option value="242">Western Sahara
                                                    </option>
                                                    <option value="243">Yemen</option>
                                                    <option value="244">Yugoslavia</option>
                                                    <option value="245">Zambia</option>
                                                    <option value="246">Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-3">
                                            <div class="mb-3">
                                                <label class="form-label">State / Province</label>
                                                <select class="form-control drop-select">
                                                    <option>Select State / Province</option>
                                                    <option value="42"> Badakhshan </option>
                                                    <option value="43"> Badgis </option>
                                                    <option value="44"> Baglan </option>
                                                    <option value="45"> Balkh </option>
                                                    <option value="46"> Bamiyan </option>
                                                    <option value="47"> Farah </option>
                                                    <option value="48"> Faryab </option>
                                                    <option value="49"> Gawr </option>
                                                    <option value="50"> Gazni </option>
                                                    <option value="51"> Herat </option>
                                                    <option value="52"> Hilmand </option>
                                                    <option value="53"> Jawzjan </option>
                                                    <option value="54"> Kabul </option>
                                                    <option value="55"> Kapisa </option>
                                                    <option value="56"> Khawst </option>
                                                    <option value="57"> Kunar </option>
                                                    <option value="58"> Lagman </option>
                                                    <option value="59"> Lawghar </option>
                                                    <option value="60"> Nangarhar </option>
                                                    <option value="61"> Nimruz </option>
                                                    <option value="62"> Nuristan </option>
                                                    <option value="63"> Paktika </option>
                                                    <option value="64"> Paktiya </option>
                                                    <option value="65"> Parwan </option>
                                                    <option value="66"> Qandahar </option>
                                                    <option value="67"> Qunduz </option>
                                                    <option value="68"> Samangan </option>
                                                    <option value="69"> Sar-e Pul </option>
                                                    <option value="70"> Takhar </option>
                                                    <option value="71"> Uruzgan </option>
                                                    <option value="72"> Wardag </option>
                                                    <option value="73"> Zabul </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">City</label>
                                                <select class="form-control drop-select">
                                                    <option>Select city</option>
                                                    <option value="42"> Badakhshan </option>
                                                    <option value="43"> Badgis </option>
                                                    <option value="44"> Baglan </option>
                                                    <option value="45"> Balkh </option>
                                                    <option value="46"> Bamiyan </option>
                                                    <option value="47"> Farah </option>
                                                    <option value="48"> Faryab </option>
                                                    <option value="49"> Gawr </option>
                                                    <option value="50"> Gazni </option>
                                                    <option value="51"> Herat </option>
                                                    <option value="52"> Hilmand </option>
                                                    <option value="53"> Jawzjan </option>
                                                    <option value="54"> Kabul </option>
                                                    <option value="55"> Kapisa </option>
                                                    <option value="56"> Khawst </option>
                                                    <option value="57"> Kunar </option>
                                                    <option value="58"> Lagman </option>
                                                    <option value="59"> Lawghar </option>
                                                    <option value="60"> Nangarhar </option>
                                                    <option value="61"> Nimruz </option>
                                                    <option value="62"> Nuristan </option>
                                                    <option value="63"> Paktika </option>
                                                    <option value="64"> Paktiya </option>
                                                    <option value="65"> Parwan </option>
                                                    <option value="66"> Qandahar </option>
                                                    <option value="67"> Qunduz </option>
                                                    <option value="68"> Samangan </option>
                                                    <option value="69"> Sar-e Pul </option>
                                                    <option value="70"> Takhar </option>
                                                    <option value="71"> Uruzgan </option>
                                                    <option value="72"> Wardag </option>
                                                    <option value="73"> Zabul </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Postal Code / Zip Code</label>
                                                <input type="text" value="" class="form-control"
                                                    placeholder="Postal Code / Zip Code">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Street Address
                                                    <span class="small-text">Your postal address. Helps us increase
                                                        visibility of your profile in relevant geography</span>
                                                </label>
                                                <input type="text" value="" class="form-control"
                                                    placeholder="Street Address">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Online Presence
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form>
                                    <div class="row">
                                        <div class="d-flex social-links">
                                            <h2>Link Your Social Accounts</h2>
                                            <ul>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-behance-square"></i></a></li>
                                                <li><a href="#"><i class="fab fa-github"></i></a></li>
                                                <li><a href="#"><i class="fab fa-medium"></i></a></li>
                                                <li><a href="#"><i class="fab fa-dribbble-square"></i></a></li>
                                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fas fa-link"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                            <div class="mb-1">
                                                <div class="lable-grp">
                                                    <label class="form-label">Website</label>
                                                    <input type="link" value="" class="form-control"
                                                        placeholder="https://www.yoursite.com">
                                                    <span class="icon"><a href="#"><i
                                                                class="fas fa-trash-alt"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                            <div class="mb-1">
                                                <div class="lable-grp">
                                                    <label class="form-label">Website</label>
                                                    <input type="link" value="" class="form-control"
                                                        placeholder="https://www.yoursite.com">
                                                    <span class="icon"><a href="#"><i
                                                                class="fas fa-trash-alt"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                            <div class="mb-1">
                                                <div class="lable-grp">
                                                    <label class="form-label">Website</label>
                                                    <input type="link" value="" class="form-control"
                                                        placeholder="https://www.yoursite.com">
                                                    <span class="icon"><a href="#"><i
                                                                class="fas fa-trash-alt"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-12">
                            <form class="mt-3 mb-2">
                                <button type="button" class="save-btn" data-bs-dismiss="modal">Save and
                                    Continue</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- change due date modal -->
    <div class="modal fade common-modal" id="changeduedate" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="heading">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Set a Due Date</h1>
                        <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <img src="{{asset('invoice/assets/image/close.png')}}">
                        </button>
                    </div>
                    <hr class="cstm-line">
                    <form class="w-100">
                        <div class="mb-4 mt-4">
                            <p class="due-date">Set a Due Date<input type="number" class="form-control" placeholder="5"
                                    value="Live">days after Challan Date</p>
                        </div>
                        <div class="btns-wrap">
                            <button class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                            <button class="btn btn-save" data-bs-dismiss="modal">Save</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- add client modal -->
    <div class="modal fade common-modal common-modal-css" id="addclientpop" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="heading">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Client</h1>
                        <button type="button" class="btn close_btn" data-bs-dismiss="modal" aria-label="Close">
                            <img src="assets/image/close.png">
                        </button>
                    </div>
                    <hr class="cstm-line">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Basic Information
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                                <div class="uploadFile">
                                                    <div class="upload-wrap">
                                                        <i class="fas fa-image"></i>
                                                        <p class="upload-files">Upload Client Logo</p>
                                                        <span>JPG or PNG, Dimensions 1080x1080px and file size upto
                                                            20MB</span>
                                                    </div>
                                                    <!-- <span class="filename">No File Chosen</span> -->
                                                    <input type="file" class="inputfile form-control" name="file">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Business Name</label>
                                                    <input type="text" value="" class="form-control"
                                                        placeholder="Business Name (Required)">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Client Industry</label>
                                                    <select class="form-control drop-select">
                                                        <option>Select an Industry</option>
                                                        <option>Apparel & Fashion</option>
                                                        <option>Architecture & Planning</option>
                                                        <option>Business Supolies & Equipment</option>
                                                        <option>Comouter Software</option>
                                                        <option>Computer Hardware</option>
                                                        <option>Education</option>
                                                        <option>Entertainment</option>
                                                        <option>FMCG</option>
                                                        <option>Health, Wellness and Fitness</option>
                                                        <option>harges</option>
                                                        <option>Hospitality</option>
                                                        <option>Import and Export</option>
                                                        <option>IT & ITes </option>
                                                        <option>Legal Services</option>
                                                        <option>Manufacture</option>
                                                        <option>narge</option>
                                                        <option>Marketing & Advertising</option>
                                                        <option>Packaging & Containers</option>
                                                        <option>Printing</option>
                                                        <option>Pharmaceuticals</option>
                                                        <option>Retail</option>
                                                        <option>Tourism</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <label class="form-label">Country</label>
                                                <select class="form-control drop-select">
                                                    <option value="">Select Country</option>
                                                    <option value="1">Afghanistan</option>
                                                    <option value="2">Albania</option>
                                                    <option value="3">Algeria</option>
                                                    <option value="4">American Samoa
                                                    </option>
                                                    <option value="5">Andorra</option>
                                                    <option value="6">Angola</option>
                                                    <option value="7">Anguilla</option>
                                                    <option value="8">Antarctica</option>
                                                    <option value="9">Antigua And Barbuda
                                                    </option>
                                                    <option value="10">Argentina</option>
                                                    <option value="11">Armenia</option>
                                                    <option value="12">Aruba</option>
                                                    <option value="13">Australia</option>
                                                    <option value="14">Austria</option>
                                                    <option value="15">Azerbaijan</option>
                                                    <option value="16">Bahamas The</option>
                                                    <option value="17">Bahrain</option>
                                                    <option value="18">Bangladesh</option>
                                                    <option value="19">Barbados</option>
                                                    <option value="20">Belarus</option>
                                                    <option value="21">Belgium</option>
                                                    <option value="22">Belize</option>
                                                    <option value="23">Benin</option>
                                                    <option value="24">Bermuda</option>
                                                    <option value="25">Bhutan</option>
                                                    <option value="26">Bolivia</option>
                                                    <option value="27">Bosnia and
                                                        Herzegovina
                                                    </option>
                                                    <option value="28">Botswana</option>
                                                    <option value="29">Bouvet Island
                                                    </option>
                                                    <option value="30">Brazil</option>
                                                    <option value="31">British Indian Ocean
                                                        Territory</option>
                                                    <option value="32">Brunei</option>
                                                    <option value="33">Bulgaria</option>
                                                    <option value="34">Burkina Faso</option>
                                                    <option value="35">Burundi</option>
                                                    <option value="36">Cambodia</option>
                                                    <option value="37">Cameroon</option>
                                                    <option value="38">Canada</option>
                                                    <option value="39">Cape Verde</option>
                                                    <option value="40">Cayman Islands
                                                    </option>
                                                    <option value="41">Central African
                                                        Republic
                                                    </option>
                                                    <option value="42">Chad</option>
                                                    <option value="43">Chile</option>
                                                    <option value="44">China</option>
                                                    <option value="45">Christmas Island
                                                    </option>
                                                    <option value="46">Cocos (Keeling)
                                                        Islands
                                                    </option>
                                                    <option value="47">Colombia</option>
                                                    <option value="48">Comoros</option>
                                                    <option value="49">Republic Of The Congo
                                                    </option>
                                                    <option value="50">Democratic Republic
                                                        Of The
                                                        Congo</option>
                                                    <option value="51">Cook Islands</option>
                                                    <option value="52">Costa Rica</option>
                                                    <option value="53">Cote D'Ivoire (Ivory
                                                        Coast)
                                                    </option>
                                                    <option value="54">Croatia (Hrvatska)
                                                    </option>
                                                    <option value="55">Cuba</option>
                                                    <option value="56">Cyprus</option>
                                                    <option value="57">Czech Republic
                                                    </option>
                                                    <option value="58">Denmark</option>
                                                    <option value="59">Djibouti</option>
                                                    <option value="60">Dominica</option>
                                                    <option value="61">Dominican Republic
                                                    </option>
                                                    <option value="62">East Timor</option>
                                                    <option value="63">Ecuador</option>
                                                    <option value="64">Egypt</option>
                                                    <option value="65">El Salvador</option>
                                                    <option value="66">Equatorial Guinea
                                                    </option>
                                                    <option value="67">Eritrea</option>
                                                    <option value="68">Estonia</option>
                                                    <option value="69">Ethiopia</option>
                                                    <option value="70">External Territories
                                                        of
                                                        Australia</option>
                                                    <option value="71">Falkland Islands
                                                    </option>
                                                    <option value="72">Faroe Islands
                                                    </option>
                                                    <option value="73">Fiji Islands</option>
                                                    <option value="74">Finland</option>
                                                    <option value="75">France</option>
                                                    <option value="76">French Guiana
                                                    </option>
                                                    <option value="77">French Polynesia
                                                    </option>
                                                    <option value="78">French Southern
                                                        Territories
                                                    </option>
                                                    <option value="79">Gabon</option>
                                                    <option value="80">Gambia The</option>
                                                    <option value="81">Georgia</option>
                                                    <option value="82">Germany</option>
                                                    <option value="83">Ghana</option>
                                                    <option value="84">Gibraltar</option>
                                                    <option value="85">Greece</option>
                                                    <option value="86">Greenland</option>
                                                    <option value="87">Grenada</option>
                                                    <option value="88">Guadeloupe</option>
                                                    <option value="89">Guam</option>
                                                    <option value="90">Guatemala</option>
                                                    <option value="91">Guernsey and Alderney
                                                    </option>
                                                    <option value="92">Guinea</option>
                                                    <option value="93">Guinea-Bissau
                                                    </option>
                                                    <option value="94">Guyana</option>
                                                    <option value="95">Haiti</option>
                                                    <option value="96">Heard and McDonald
                                                        Islands
                                                    </option>
                                                    <option value="97">Honduras</option>
                                                    <option value="98">Hong Kong S.A.R.
                                                    </option>
                                                    <option value="99">Hungary</option>
                                                    <option value="100">Iceland</option>
                                                    <option value="101">India</option>
                                                    <option value="102">Indonesia</option>
                                                    <option value="103">Iran</option>
                                                    <option value="104">Iraq</option>
                                                    <option value="105">Ireland</option>
                                                    <option value="106">Israel</option>
                                                    <option value="107">Italy</option>
                                                    <option value="108">Jamaica</option>
                                                    <option value="109">Japan</option>
                                                    <option value="110">Jersey</option>
                                                    <option value="111">Jordan</option>
                                                    <option value="112">Kazakhstan</option>
                                                    <option value="113">Kenya</option>
                                                    <option value="114">Kiribati</option>
                                                    <option value="115">Korea North</option>
                                                    <option value="116">Korea South</option>
                                                    <option value="117">Kuwait</option>
                                                    <option value="118">Kyrgyzstan</option>
                                                    <option value="119">Laos</option>
                                                    <option value="120">Latvia</option>
                                                    <option value="121">Lebanon</option>
                                                    <option value="122">Lesotho</option>
                                                    <option value="123">Liberia</option>
                                                    <option value="124">Libya</option>
                                                    <option value="125">Liechtenstein
                                                    </option>
                                                    <option value="126">Lithuania</option>
                                                    <option value="127">Luxembourg</option>
                                                    <option value="128">Macau S.A.R.
                                                    </option>
                                                    <option value="129">Macedonia</option>
                                                    <option value="130">Madagascar</option>
                                                    <option value="131">Malawi</option>
                                                    <option value="132">Malaysia</option>
                                                    <option value="133">Maldives</option>
                                                    <option value="134">Mali</option>
                                                    <option value="135">Malta</option>
                                                    <option value="136">Man (Isle of)
                                                    </option>
                                                    <option value="137">Marshall Islands
                                                    </option>
                                                    <option value="138">Martinique</option>
                                                    <option value="139">Mauritania</option>
                                                    <option value="140">Mauritius</option>
                                                    <option value="141">Mayotte</option>
                                                    <option value="142">Mexico</option>
                                                    <option value="143">Micronesia</option>
                                                    <option value="144">Moldova</option>
                                                    <option value="145">Monaco</option>
                                                    <option value="146">Mongolia</option>
                                                    <option value="147">Montserrat</option>
                                                    <option value="148">Morocco</option>
                                                    <option value="149">Mozambique</option>
                                                    <option value="150">Myanmar</option>
                                                    <option value="151">Namibia</option>
                                                    <option value="152">Nauru</option>
                                                    <option value="153">Nepal</option>
                                                    <option value="154">Netherlands Antilles
                                                    </option>
                                                    <option value="155">Netherlands The
                                                    </option>
                                                    <option value="156">New Caledonia
                                                    </option>
                                                    <option value="157">New Zealand</option>
                                                    <option value="158">Nicaragua</option>
                                                    <option value="159">Niger</option>
                                                    <option value="160">Nigeria</option>
                                                    <option value="161">Niue</option>
                                                    <option value="162">Norfolk Island
                                                    </option>
                                                    <option value="163">Northern Mariana
                                                        Islands
                                                    </option>
                                                    <option value="164">Norway</option>
                                                    <option value="165">Oman</option>
                                                    <option value="166">Pakistan</option>
                                                    <option value="167">Palau</option>
                                                    <option value="168">Palestinian
                                                        Territory
                                                        Occupied</option>
                                                    <option value="169">Panama</option>
                                                    <option value="170">Papua new Guinea
                                                    </option>
                                                    <option value="171">Paraguay</option>
                                                    <option value="172">Peru</option>
                                                    <option value="173">Philippines</option>
                                                    <option value="174">Pitcairn Island
                                                    </option>
                                                    <option value="175">Poland</option>
                                                    <option value="176">Portugal</option>
                                                    <option value="177">Puerto Rico</option>
                                                    <option value="178">Qatar</option>
                                                    <option value="179">Reunion</option>
                                                    <option value="180">Romania</option>
                                                    <option value="181">Russia</option>
                                                    <option value="182">Rwanda</option>
                                                    <option value="183">Saint Helena
                                                    </option>
                                                    <option value="184">Saint Kitts And
                                                        Nevis
                                                    </option>
                                                    <option value="185">Saint Lucia</option>
                                                    <option value="186">Saint Pierre and
                                                        Miquelon
                                                    </option>
                                                    <option value="187">Saint Vincent And
                                                        The
                                                        Grenadines</option>
                                                    <option value="188">Samoa</option>
                                                    <option value="189">San Marino</option>
                                                    <option value="190">Sao Tome and
                                                        Principe
                                                    </option>
                                                    <option value="191">Saudi Arabia
                                                    </option>
                                                    <option value="192">Senegal</option>
                                                    <option value="193">Serbia</option>
                                                    <option value="194">Seychelles</option>
                                                    <option value="195">Sierra Leone
                                                    </option>
                                                    <option value="196">Singapore</option>
                                                    <option value="197">Slovakia</option>
                                                    <option value="198">Slovenia</option>
                                                    <option value="199">Smaller Territories
                                                        of the
                                                        UK</option>
                                                    <option value="200">Solomon Islands
                                                    </option>
                                                    <option value="201">Somalia</option>
                                                    <option value="202">South Africa
                                                    </option>
                                                    <option value="203">South Georgia
                                                    </option>
                                                    <option value="204">South Sudan</option>
                                                    <option value="205">Spain</option>
                                                    <option value="206">Sri Lanka</option>
                                                    <option value="207">Sudan</option>
                                                    <option value="208">Suriname</option>
                                                    <option value="209">Svalbard And Jan
                                                        Mayen
                                                        Islands</option>
                                                    <option value="210">Swaziland</option>
                                                    <option value="211">Sweden</option>
                                                    <option value="212">Switzerland</option>
                                                    <option value="213">Syria</option>
                                                    <option value="214">Taiwan</option>
                                                    <option value="215">Tajikistan</option>
                                                    <option value="216">Tanzania</option>
                                                    <option value="217">Thailand</option>
                                                    <option value="218">Togo</option>
                                                    <option value="219">Tokelau</option>
                                                    <option value="220">Tonga</option>
                                                    <option value="221">Trinidad And Tobago
                                                    </option>
                                                    <option value="222">Tunisia</option>
                                                    <option value="223">Turkey</option>
                                                    <option value="224">Turkmenistan
                                                    </option>
                                                    <option value="225">Turks And Caicos
                                                        Islands
                                                    </option>
                                                    <option value="226">Tuvalu</option>
                                                    <option value="227">Uganda</option>
                                                    <option value="228">Ukraine</option>
                                                    <option value="229">United Arab Emirates
                                                    </option>
                                                    <option value="230">United Kingdom
                                                    </option>
                                                    <option value="231">United States
                                                    </option>
                                                    <option value="232">United States Minor
                                                        Outlying
                                                        Islands</option>
                                                    <option value="233">Uruguay</option>
                                                    <option value="234">Uzbekistan</option>
                                                    <option value="235">Vanuatu</option>
                                                    <option value="236">Vatican City State
                                                        (Holy
                                                        See)</option>
                                                    <option value="237">Venezuela</option>
                                                    <option value="238">Vietnam</option>
                                                    <option value="239">Virgin Islands
                                                        (British)
                                                    </option>
                                                    <option value="240">Virgin Islands (US)
                                                    </option>
                                                    <option value="241">Wallis And Futuna
                                                        Islands
                                                    </option>
                                                    <option value="242">Western Sahara
                                                    </option>
                                                    <option value="243">Yemen</option>
                                                    <option value="244">Yugoslavia</option>
                                                    <option value="245">Zambia</option>
                                                    <option value="246">Zimbabwe</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <label class="form-label">City</label>
                                                <select class="form-control drop-select">
                                                    <option>Select city</option>
                                                    <option value="42"> Badakhshan </option>
                                                    <option value="43"> Badgis </option>
                                                    <option value="44"> Baglan </option>
                                                    <option value="45"> Balkh </option>
                                                    <option value="46"> Bamiyan </option>
                                                    <option value="47"> Farah </option>
                                                    <option value="48"> Faryab </option>
                                                    <option value="49"> Gawr </option>
                                                    <option value="50"> Gazni </option>
                                                    <option value="51"> Herat </option>
                                                    <option value="52"> Hilmand </option>
                                                    <option value="53"> Jawzjan </option>
                                                    <option value="54"> Kabul </option>
                                                    <option value="55"> Kapisa </option>
                                                    <option value="56"> Khawst </option>
                                                    <option value="57"> Kunar </option>
                                                    <option value="58"> Lagman </option>
                                                    <option value="59"> Lawghar </option>
                                                    <option value="60"> Nangarhar </option>
                                                    <option value="61"> Nimruz </option>
                                                    <option value="62"> Nuristan </option>
                                                    <option value="63"> Paktika </option>
                                                    <option value="64"> Paktiya </option>
                                                    <option value="65"> Parwan </option>
                                                    <option value="66"> Qandahar </option>
                                                    <option value="67"> Qunduz </option>
                                                    <option value="68"> Samangan </option>
                                                    <option value="69"> Sar-e Pul </option>
                                                    <option value="70"> Takhar </option>
                                                    <option value="71"> Uruzgan </option>
                                                    <option value="72"> Wardag </option>
                                                    <option value="73"> Zabul </option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Tax Information <span>(optional)</span>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-3">
                                            <div class="mb-3">
                                                <label class="form-label">Business GSTIN</label>
                                                <input type="text" value="" class="form-control"
                                                    placeholder="Business GSTIN (Optional)">
                                                <span class="small-text">Check GST Type</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-3">
                                            <div class="mb-3">
                                                <label class="form-label">Business PAN Number</label>
                                                <input type="text" value="" class="form-control"
                                                    placeholder="Business PAN Number (Optional)">


                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Client Type</label>
                                                <div class="client-type-wrap">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="exampleRadios" id="exampleRadios11" value="option1">
                                                        <label class="form-check-label" for="exampleRadios11">
                                                            Individual
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="exampleRadios" id="exampleRadios11" value="option1">
                                                        <label class="form-check-label" for="exampleRadios11">
                                                            Company
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <label class="form-label">Tax Treatment</label>
                                            <select class="form-control drop-select">
                                                <option>Consumer</option>
                                                <option>B2B</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Address <span>(optional)</span>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-3">
                                            <div class="mb-3">
                                                <label class="form-label">Select Country</label>
                                                <select class="form-control drop-select">
                                                    <option value="">Select Country</option>
                                                    <option value="1">Afghanistan</option>
                                                    <option value="2">Albania</option>
                                                    <option value="3">Algeria</option>
                                                    <option value="4">American Samoa
                                                    </option>
                                                    <option value="5">Andorra</option>
                                                    <option value="6">Angola</option>
                                                    <option value="7">Anguilla</option>
                                                    <option value="8">Antarctica</option>
                                                    <option value="9">Antigua And Barbuda
                                                    </option>
                                                    <option value="10">Argentina</option>
                                                    <option value="11">Armenia</option>
                                                    <option value="12">Aruba</option>
                                                    <option value="13">Australia</option>
                                                    <option value="14">Austria</option>
                                                    <option value="15">Azerbaijan</option>
                                                    <option value="16">Bahamas The</option>
                                                    <option value="17">Bahrain</option>
                                                    <option value="18">Bangladesh</option>
                                                    <option value="19">Barbados</option>
                                                    <option value="20">Belarus</option>
                                                    <option value="21">Belgium</option>
                                                    <option value="22">Belize</option>
                                                    <option value="23">Benin</option>
                                                    <option value="24">Bermuda</option>
                                                    <option value="25">Bhutan</option>
                                                    <option value="26">Bolivia</option>
                                                    <option value="27">Bosnia and
                                                        Herzegovina
                                                    </option>
                                                    <option value="28">Botswana</option>
                                                    <option value="29">Bouvet Island
                                                    </option>
                                                    <option value="30">Brazil</option>
                                                    <option value="31">British Indian Ocean
                                                        Territory</option>
                                                    <option value="32">Brunei</option>
                                                    <option value="33">Bulgaria</option>
                                                    <option value="34">Burkina Faso</option>
                                                    <option value="35">Burundi</option>
                                                    <option value="36">Cambodia</option>
                                                    <option value="37">Cameroon</option>
                                                    <option value="38">Canada</option>
                                                    <option value="39">Cape Verde</option>
                                                    <option value="40">Cayman Islands
                                                    </option>
                                                    <option value="41">Central African
                                                        Republic
                                                    </option>
                                                    <option value="42">Chad</option>
                                                    <option value="43">Chile</option>
                                                    <option value="44">China</option>
                                                    <option value="45">Christmas Island
                                                    </option>
                                                    <option value="46">Cocos (Keeling)
                                                        Islands
                                                    </option>
                                                    <option value="47">Colombia</option>
                                                    <option value="48">Comoros</option>
                                                    <option value="49">Republic Of The Congo
                                                    </option>
                                                    <option value="50">Democratic Republic
                                                        Of The
                                                        Congo</option>
                                                    <option value="51">Cook Islands</option>
                                                    <option value="52">Costa Rica</option>
                                                    <option value="53">Cote D'Ivoire (Ivory
                                                        Coast)
                                                    </option>
                                                    <option value="54">Croatia (Hrvatska)
                                                    </option>
                                                    <option value="55">Cuba</option>
                                                    <option value="56">Cyprus</option>
                                                    <option value="57">Czech Republic
                                                    </option>
                                                    <option value="58">Denmark</option>
                                                    <option value="59">Djibouti</option>
                                                    <option value="60">Dominica</option>
                                                    <option value="61">Dominican Republic
                                                    </option>
                                                    <option value="62">East Timor</option>
                                                    <option value="63">Ecuador</option>
                                                    <option value="64">Egypt</option>
                                                    <option value="65">El Salvador</option>
                                                    <option value="66">Equatorial Guinea
                                                    </option>
                                                    <option value="67">Eritrea</option>
                                                    <option value="68">Estonia</option>
                                                    <option value="69">Ethiopia</option>
                                                    <option value="70">External Territories
                                                        of
                                                        Australia</option>
                                                    <option value="71">Falkland Islands
                                                    </option>
                                                    <option value="72">Faroe Islands
                                                    </option>
                                                    <option value="73">Fiji Islands</option>
                                                    <option value="74">Finland</option>
                                                    <option value="75">France</option>
                                                    <option value="76">French Guiana
                                                    </option>
                                                    <option value="77">French Polynesia
                                                    </option>
                                                    <option value="78">French Southern
                                                        Territories
                                                    </option>
                                                    <option value="79">Gabon</option>
                                                    <option value="80">Gambia The</option>
                                                    <option value="81">Georgia</option>
                                                    <option value="82">Germany</option>
                                                    <option value="83">Ghana</option>
                                                    <option value="84">Gibraltar</option>
                                                    <option value="85">Greece</option>
                                                    <option value="86">Greenland</option>
                                                    <option value="87">Grenada</option>
                                                    <option value="88">Guadeloupe</option>
                                                    <option value="89">Guam</option>
                                                    <option value="90">Guatemala</option>
                                                    <option value="91">Guernsey and Alderney
                                                    </option>
                                                    <option value="92">Guinea</option>
                                                    <option value="93">Guinea-Bissau
                                                    </option>
                                                    <option value="94">Guyana</option>
                                                    <option value="95">Haiti</option>
                                                    <option value="96">Heard and McDonald
                                                        Islands
                                                    </option>
                                                    <option value="97">Honduras</option>
                                                    <option value="98">Hong Kong S.A.R.
                                                    </option>
                                                    <option value="99">Hungary</option>
                                                    <option value="100">Iceland</option>
                                                    <option value="101">India</option>
                                                    <option value="102">Indonesia</option>
                                                    <option value="103">Iran</option>
                                                    <option value="104">Iraq</option>
                                                    <option value="105">Ireland</option>
                                                    <option value="106">Israel</option>
                                                    <option value="107">Italy</option>
                                                    <option value="108">Jamaica</option>
                                                    <option value="109">Japan</option>
                                                    <option value="110">Jersey</option>
                                                    <option value="111">Jordan</option>
                                                    <option value="112">Kazakhstan</option>
                                                    <option value="113">Kenya</option>
                                                    <option value="114">Kiribati</option>
                                                    <option value="115">Korea North</option>
                                                    <option value="116">Korea South</option>
                                                    <option value="117">Kuwait</option>
                                                    <option value="118">Kyrgyzstan</option>
                                                    <option value="119">Laos</option>
                                                    <option value="120">Latvia</option>
                                                    <option value="121">Lebanon</option>
                                                    <option value="122">Lesotho</option>
                                                    <option value="123">Liberia</option>
                                                    <option value="124">Libya</option>
                                                    <option value="125">Liechtenstein
                                                    </option>
                                                    <option value="126">Lithuania</option>
                                                    <option value="127">Luxembourg</option>
                                                    <option value="128">Macau S.A.R.
                                                    </option>
                                                    <option value="129">Macedonia</option>
                                                    <option value="130">Madagascar</option>
                                                    <option value="131">Malawi</option>
                                                    <option value="132">Malaysia</option>
                                                    <option value="133">Maldives</option>
                                                    <option value="134">Mali</option>
                                                    <option value="135">Malta</option>
                                                    <option value="136">Man (Isle of)
                                                    </option>
                                                    <option value="137">Marshall Islands
                                                    </option>
                                                    <option value="138">Martinique</option>
                                                    <option value="139">Mauritania</option>
                                                    <option value="140">Mauritius</option>
                                                    <option value="141">Mayotte</option>
                                                    <option value="142">Mexico</option>
                                                    <option value="143">Micronesia</option>
                                                    <option value="144">Moldova</option>
                                                    <option value="145">Monaco</option>
                                                    <option value="146">Mongolia</option>
                                                    <option value="147">Montserrat</option>
                                                    <option value="148">Morocco</option>
                                                    <option value="149">Mozambique</option>
                                                    <option value="150">Myanmar</option>
                                                    <option value="151">Namibia</option>
                                                    <option value="152">Nauru</option>
                                                    <option value="153">Nepal</option>
                                                    <option value="154">Netherlands Antilles
                                                    </option>
                                                    <option value="155">Netherlands The
                                                    </option>
                                                    <option value="156">New Caledonia
                                                    </option>
                                                    <option value="157">New Zealand</option>
                                                    <option value="158">Nicaragua</option>
                                                    <option value="159">Niger</option>
                                                    <option value="160">Nigeria</option>
                                                    <option value="161">Niue</option>
                                                    <option value="162">Norfolk Island
                                                    </option>
                                                    <option value="163">Northern Mariana
                                                        Islands
                                                    </option>
                                                    <option value="164">Norway</option>
                                                    <option value="165">Oman</option>
                                                    <option value="166">Pakistan</option>
                                                    <option value="167">Palau</option>
                                                    <option value="168">Palestinian
                                                        Territory
                                                        Occupied</option>
                                                    <option value="169">Panama</option>
                                                    <option value="170">Papua new Guinea
                                                    </option>
                                                    <option value="171">Paraguay</option>
                                                    <option value="172">Peru</option>
                                                    <option value="173">Philippines</option>
                                                    <option value="174">Pitcairn Island
                                                    </option>
                                                    <option value="175">Poland</option>
                                                    <option value="176">Portugal</option>
                                                    <option value="177">Puerto Rico</option>
                                                    <option value="178">Qatar</option>
                                                    <option value="179">Reunion</option>
                                                    <option value="180">Romania</option>
                                                    <option value="181">Russia</option>
                                                    <option value="182">Rwanda</option>
                                                    <option value="183">Saint Helena
                                                    </option>
                                                    <option value="184">Saint Kitts And
                                                        Nevis
                                                    </option>
                                                    <option value="185">Saint Lucia</option>
                                                    <option value="186">Saint Pierre and
                                                        Miquelon
                                                    </option>
                                                    <option value="187">Saint Vincent And
                                                        The
                                                        Grenadines</option>
                                                    <option value="188">Samoa</option>
                                                    <option value="189">San Marino</option>
                                                    <option value="190">Sao Tome and
                                                        Principe
                                                    </option>
                                                    <option value="191">Saudi Arabia
                                                    </option>
                                                    <option value="192">Senegal</option>
                                                    <option value="193">Serbia</option>
                                                    <option value="194">Seychelles</option>
                                                    <option value="195">Sierra Leone
                                                    </option>
                                                    <option value="196">Singapore</option>
                                                    <option value="197">Slovakia</option>
                                                    <option value="198">Slovenia</option>
                                                    <option value="199">Smaller Territories
                                                        of the
                                                        UK</option>
                                                    <option value="200">Solomon Islands
                                                    </option>
                                                    <option value="201">Somalia</option>
                                                    <option value="202">South Africa
                                                    </option>
                                                    <option value="203">South Georgia
                                                    </option>
                                                    <option value="204">South Sudan</option>
                                                    <option value="205">Spain</option>
                                                    <option value="206">Sri Lanka</option>
                                                    <option value="207">Sudan</option>
                                                    <option value="208">Suriname</option>
                                                    <option value="209">Svalbard And Jan
                                                        Mayen
                                                        Islands</option>
                                                    <option value="210">Swaziland</option>
                                                    <option value="211">Sweden</option>
                                                    <option value="212">Switzerland</option>
                                                    <option value="213">Syria</option>
                                                    <option value="214">Taiwan</option>
                                                    <option value="215">Tajikistan</option>
                                                    <option value="216">Tanzania</option>
                                                    <option value="217">Thailand</option>
                                                    <option value="218">Togo</option>
                                                    <option value="219">Tokelau</option>
                                                    <option value="220">Tonga</option>
                                                    <option value="221">Trinidad And Tobago
                                                    </option>
                                                    <option value="222">Tunisia</option>
                                                    <option value="223">Turkey</option>
                                                    <option value="224">Turkmenistan
                                                    </option>
                                                    <option value="225">Turks And Caicos
                                                        Islands
                                                    </option>
                                                    <option value="226">Tuvalu</option>
                                                    <option value="227">Uganda</option>
                                                    <option value="228">Ukraine</option>
                                                    <option value="229">United Arab Emirates
                                                    </option>
                                                    <option value="230">United Kingdom
                                                    </option>
                                                    <option value="231">United States
                                                    </option>
                                                    <option value="232">United States Minor
                                                        Outlying
                                                        Islands</option>
                                                    <option value="233">Uruguay</option>
                                                    <option value="234">Uzbekistan</option>
                                                    <option value="235">Vanuatu</option>
                                                    <option value="236">Vatican City State
                                                        (Holy
                                                        See)</option>
                                                    <option value="237">Venezuela</option>
                                                    <option value="238">Vietnam</option>
                                                    <option value="239">Virgin Islands
                                                        (British)
                                                    </option>
                                                    <option value="240">Virgin Islands (US)
                                                    </option>
                                                    <option value="241">Wallis And Futuna
                                                        Islands
                                                    </option>
                                                    <option value="242">Western Sahara
                                                    </option>
                                                    <option value="243">Yemen</option>
                                                    <option value="244">Yugoslavia</option>
                                                    <option value="245">Zambia</option>
                                                    <option value="246">Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-3">
                                            <div class="mb-3">
                                                <label class="form-label">State / Province</label>
                                                <select class="form-control drop-select">
                                                    <option>Select State / Province</option>
                                                    <option value="42"> Badakhshan </option>
                                                    <option value="43"> Badgis </option>
                                                    <option value="44"> Baglan </option>
                                                    <option value="45"> Balkh </option>
                                                    <option value="46"> Bamiyan </option>
                                                    <option value="47"> Farah </option>
                                                    <option value="48"> Faryab </option>
                                                    <option value="49"> Gawr </option>
                                                    <option value="50"> Gazni </option>
                                                    <option value="51"> Herat </option>
                                                    <option value="52"> Hilmand </option>
                                                    <option value="53"> Jawzjan </option>
                                                    <option value="54"> Kabul </option>
                                                    <option value="55"> Kapisa </option>
                                                    <option value="56"> Khawst </option>
                                                    <option value="57"> Kunar </option>
                                                    <option value="58"> Lagman </option>
                                                    <option value="59"> Lawghar </option>
                                                    <option value="60"> Nangarhar </option>
                                                    <option value="61"> Nimruz </option>
                                                    <option value="62"> Nuristan </option>
                                                    <option value="63"> Paktika </option>
                                                    <option value="64"> Paktiya </option>
                                                    <option value="65"> Parwan </option>
                                                    <option value="66"> Qandahar </option>
                                                    <option value="67"> Qunduz </option>
                                                    <option value="68"> Samangan </option>
                                                    <option value="69"> Sar-e Pul </option>
                                                    <option value="70"> Takhar </option>
                                                    <option value="71"> Uruzgan </option>
                                                    <option value="72"> Wardag </option>
                                                    <option value="73"> Zabul </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">City</label>
                                                <select class="form-control drop-select">
                                                    <option>Select city</option>
                                                    <option value="42"> Badakhshan </option>
                                                    <option value="43"> Badgis </option>
                                                    <option value="44"> Baglan </option>
                                                    <option value="45"> Balkh </option>
                                                    <option value="46"> Bamiyan </option>
                                                    <option value="47"> Farah </option>
                                                    <option value="48"> Faryab </option>
                                                    <option value="49"> Gawr </option>
                                                    <option value="50"> Gazni </option>
                                                    <option value="51"> Herat </option>
                                                    <option value="52"> Hilmand </option>
                                                    <option value="53"> Jawzjan </option>
                                                    <option value="54"> Kabul </option>
                                                    <option value="55"> Kapisa </option>
                                                    <option value="56"> Khawst </option>
                                                    <option value="57"> Kunar </option>
                                                    <option value="58"> Lagman </option>
                                                    <option value="59"> Lawghar </option>
                                                    <option value="60"> Nangarhar </option>
                                                    <option value="61"> Nimruz </option>
                                                    <option value="62"> Nuristan </option>
                                                    <option value="63"> Paktika </option>
                                                    <option value="64"> Paktiya </option>
                                                    <option value="65"> Parwan </option>
                                                    <option value="66"> Qandahar </option>
                                                    <option value="67"> Qunduz </option>
                                                    <option value="68"> Samangan </option>
                                                    <option value="69"> Sar-e Pul </option>
                                                    <option value="70"> Takhar </option>
                                                    <option value="71"> Uruzgan </option>
                                                    <option value="72"> Wardag </option>
                                                    <option value="73"> Zabul </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Postal Code / Zip Code</label>
                                                <input type="text" value="" class="form-control"
                                                    placeholder="Postal Code / Zip Code">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Street Address</label>
                                                <input type="text" value="" class="form-control"
                                                    placeholder="Street Address">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Additional Details <span>(optional)</span>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-3">
                                            <div class="mb-3">
                                                <label class="form-label">Business Alias (Nick Name)</label>
                                                <input type="text" value="" class="form-control"
                                                    placeholder="Business Alias">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-3">
                                            <div class="mb-3">
                                                <label class="form-label">Unique Key</label>
                                                <input type="text" value="" class="form-control"
                                                    placeholder="1691741062868">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input type="mail" value="" class="form-control" placeholder="Email">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                        id="exampleRadios1" value="option1">
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Add Shipping Details
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Phone</label>
                                                <input type="phone" value="" class="form-control" placeholder="phone">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                        id="exampleRadios1" value="option1">
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Add Shipping Details
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="mb-3 common-bar w-100">
                                                <div class="add-feild-wraps">
                                                    <input type="text" class="form-control  drop-select"
                                                        placeholder="Select any Custom field">
                                                    <div class="drop-lsit">
                                                        <ul>
                                                            <li><a href="#"></a></li>
                                                            <li>
                                                                <div class="no-option">
                                                                    <p>No options</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="add-fieldss">
                                                            <a class="common-bar-btn" data-bs-toggle="modal"
                                                                data-bs-target="#add-feilds">Add New Custom
                                                                Fields</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="add-field">
                                                <button type="button"> <i class="fas fa-plus-square"></i>Add
                                                    Custom Field</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <form class="mt-3 mb-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="exampleRadios"
                                        id="exampleRadios1" value="option1">
                                    <label class="form-check-label" for="exampleRadios1">
                                        Update current changes for all existing invoices of this business.
                                    </label>
                                </div>
                                <button type="button" class="save-btn" data-bs-dismiss="modal">Save</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- Edit client modal -->
    <div class="modal fade common-modal common-modal-css" id="editclientpop" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="heading">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Client Details</h1>
                        <button type="button" class="btn close_btn" data-bs-dismiss="modal" aria-label="Close">
                            <img src="assets/image/close.png">
                        </button>
                    </div>
                    <hr class="cstm-line">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Basic Information
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                                <div class="uploadFile">
                                                    <div class="upload-wrap">
                                                        <i class="fas fa-image"></i>
                                                        <p class="upload-files">Upload Client Logo</p>
                                                        <span>JPG or PNG, Dimensions 1080x1080px and file size upto
                                                            20MB</span>
                                                    </div>
                                                    <!-- <span class="filename">No File Chosen</span> -->
                                                    <input type="file" class="inputfile form-control" name="file">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Business Name</label>
                                                    <input type="text" class="form-control" value="Infotech">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Client Industry</label>
                                                    <select class="form-control drop-select">
                                                        <option>Select an Industry</option>
                                                        <option>Apparel & Fashion</option>
                                                        <option>Architecture & Planning</option>
                                                        <option>Business Supolies & Equipment</option>
                                                        <option>Comouter Software</option>
                                                        <option>Computer Hardware</option>
                                                        <option>Education</option>
                                                        <option>Entertainment</option>
                                                        <option>FMCG</option>
                                                        <option>Health, Wellness and Fitness</option>
                                                        <option>harges</option>
                                                        <option>Hospitality</option>
                                                        <option>Import and Export</option>
                                                        <option selected>IT & ITes </option>
                                                        <option>Legal Services</option>
                                                        <option>Manufacture</option>
                                                        <option>narge</option>
                                                        <option>Marketing & Advertising</option>
                                                        <option>Packaging & Containers</option>
                                                        <option>Printing</option>
                                                        <option>Pharmaceuticals</option>
                                                        <option>Retail</option>
                                                        <option>Tourism</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <label class="form-label">Country</label>
                                                <select class="form-control drop-select">
                                                    <option value="">Select Country</option>
                                                    <option value="1">Afghanistan</option>
                                                    <option value="2">Albania</option>
                                                    <option value="3">Algeria</option>
                                                    <option value="4">American Samoa
                                                    </option>
                                                    <option value="5">Andorra</option>
                                                    <option value="6">Angola</option>
                                                    <option value="7">Anguilla</option>
                                                    <option value="8">Antarctica</option>
                                                    <option value="9">Antigua And Barbuda
                                                    </option>
                                                    <option value="10">Argentina</option>
                                                    <option value="11">Armenia</option>
                                                    <option value="12">Aruba</option>
                                                    <option value="13">Australia</option>
                                                    <option value="14">Austria</option>
                                                    <option value="15">Azerbaijan</option>
                                                    <option value="16">Bahamas The</option>
                                                    <option value="17">Bahrain</option>
                                                    <option value="18">Bangladesh</option>
                                                    <option value="19">Barbados</option>
                                                    <option value="20">Belarus</option>
                                                    <option value="21">Belgium</option>
                                                    <option value="22">Belize</option>
                                                    <option value="23">Benin</option>
                                                    <option value="24">Bermuda</option>
                                                    <option value="25">Bhutan</option>
                                                    <option value="26">Bolivia</option>
                                                    <option value="27">Bosnia and
                                                        Herzegovina
                                                    </option>
                                                    <option value="28">Botswana</option>
                                                    <option value="29">Bouvet Island
                                                    </option>
                                                    <option value="30">Brazil</option>
                                                    <option value="31">British Indian Ocean
                                                        Territory</option>
                                                    <option value="32">Brunei</option>
                                                    <option value="33">Bulgaria</option>
                                                    <option value="34">Burkina Faso</option>
                                                    <option value="35">Burundi</option>
                                                    <option value="36">Cambodia</option>
                                                    <option value="37">Cameroon</option>
                                                    <option value="38">Canada</option>
                                                    <option value="39">Cape Verde</option>
                                                    <option value="40">Cayman Islands
                                                    </option>
                                                    <option value="41">Central African
                                                        Republic
                                                    </option>
                                                    <option value="42">Chad</option>
                                                    <option value="43">Chile</option>
                                                    <option value="44">China</option>
                                                    <option value="45">Christmas Island
                                                    </option>
                                                    <option value="46">Cocos (Keeling)
                                                        Islands
                                                    </option>
                                                    <option value="47">Colombia</option>
                                                    <option value="48">Comoros</option>
                                                    <option value="49">Republic Of The Congo
                                                    </option>
                                                    <option value="50">Democratic Republic
                                                        Of The
                                                        Congo</option>
                                                    <option value="51">Cook Islands</option>
                                                    <option value="52">Costa Rica</option>
                                                    <option value="53">Cote D'Ivoire (Ivory
                                                        Coast)
                                                    </option>
                                                    <option value="54">Croatia (Hrvatska)
                                                    </option>
                                                    <option value="55">Cuba</option>
                                                    <option value="56">Cyprus</option>
                                                    <option value="57">Czech Republic
                                                    </option>
                                                    <option value="58">Denmark</option>
                                                    <option value="59">Djibouti</option>
                                                    <option value="60">Dominica</option>
                                                    <option value="61">Dominican Republic
                                                    </option>
                                                    <option value="62">East Timor</option>
                                                    <option value="63">Ecuador</option>
                                                    <option value="64">Egypt</option>
                                                    <option value="65">El Salvador</option>
                                                    <option value="66">Equatorial Guinea
                                                    </option>
                                                    <option value="67">Eritrea</option>
                                                    <option value="68">Estonia</option>
                                                    <option value="69">Ethiopia</option>
                                                    <option value="70">External Territories
                                                        of
                                                        Australia</option>
                                                    <option value="71">Falkland Islands
                                                    </option>
                                                    <option value="72">Faroe Islands
                                                    </option>
                                                    <option value="73">Fiji Islands</option>
                                                    <option value="74">Finland</option>
                                                    <option value="75">France</option>
                                                    <option value="76">French Guiana
                                                    </option>
                                                    <option value="77">French Polynesia
                                                    </option>
                                                    <option value="78">French Southern
                                                        Territories
                                                    </option>
                                                    <option value="79">Gabon</option>
                                                    <option value="80">Gambia The</option>
                                                    <option value="81">Georgia</option>
                                                    <option value="82">Germany</option>
                                                    <option value="83">Ghana</option>
                                                    <option value="84">Gibraltar</option>
                                                    <option value="85">Greece</option>
                                                    <option value="86">Greenland</option>
                                                    <option value="87">Grenada</option>
                                                    <option value="88">Guadeloupe</option>
                                                    <option value="89">Guam</option>
                                                    <option value="90">Guatemala</option>
                                                    <option value="91">Guernsey and Alderney
                                                    </option>
                                                    <option value="92">Guinea</option>
                                                    <option value="93">Guinea-Bissau
                                                    </option>
                                                    <option value="94">Guyana</option>
                                                    <option value="95">Haiti</option>
                                                    <option value="96">Heard and McDonald
                                                        Islands
                                                    </option>
                                                    <option value="97">Honduras</option>
                                                    <option value="98">Hong Kong S.A.R.
                                                    </option>
                                                    <option value="99">Hungary</option>
                                                    <option value="100">Iceland</option>
                                                    <option value="101" selected>India</option>
                                                    <option value="102">Indonesia</option>
                                                    <option value="103">Iran</option>
                                                    <option value="104">Iraq</option>
                                                    <option value="105">Ireland</option>
                                                    <option value="106">Israel</option>
                                                    <option value="107">Italy</option>
                                                    <option value="108">Jamaica</option>
                                                    <option value="109">Japan</option>
                                                    <option value="110">Jersey</option>
                                                    <option value="111">Jordan</option>
                                                    <option value="112">Kazakhstan</option>
                                                    <option value="113">Kenya</option>
                                                    <option value="114">Kiribati</option>
                                                    <option value="115">Korea North</option>
                                                    <option value="116">Korea South</option>
                                                    <option value="117">Kuwait</option>
                                                    <option value="118">Kyrgyzstan</option>
                                                    <option value="119">Laos</option>
                                                    <option value="120">Latvia</option>
                                                    <option value="121">Lebanon</option>
                                                    <option value="122">Lesotho</option>
                                                    <option value="123">Liberia</option>
                                                    <option value="124">Libya</option>
                                                    <option value="125">Liechtenstein
                                                    </option>
                                                    <option value="126">Lithuania</option>
                                                    <option value="127">Luxembourg</option>
                                                    <option value="128">Macau S.A.R.
                                                    </option>
                                                    <option value="129">Macedonia</option>
                                                    <option value="130">Madagascar</option>
                                                    <option value="131">Malawi</option>
                                                    <option value="132">Malaysia</option>
                                                    <option value="133">Maldives</option>
                                                    <option value="134">Mali</option>
                                                    <option value="135">Malta</option>
                                                    <option value="136">Man (Isle of)
                                                    </option>
                                                    <option value="137">Marshall Islands
                                                    </option>
                                                    <option value="138">Martinique</option>
                                                    <option value="139">Mauritania</option>
                                                    <option value="140">Mauritius</option>
                                                    <option value="141">Mayotte</option>
                                                    <option value="142">Mexico</option>
                                                    <option value="143">Micronesia</option>
                                                    <option value="144">Moldova</option>
                                                    <option value="145">Monaco</option>
                                                    <option value="146">Mongolia</option>
                                                    <option value="147">Montserrat</option>
                                                    <option value="148">Morocco</option>
                                                    <option value="149">Mozambique</option>
                                                    <option value="150">Myanmar</option>
                                                    <option value="151">Namibia</option>
                                                    <option value="152">Nauru</option>
                                                    <option value="153">Nepal</option>
                                                    <option value="154">Netherlands Antilles
                                                    </option>
                                                    <option value="155">Netherlands The
                                                    </option>
                                                    <option value="156">New Caledonia
                                                    </option>
                                                    <option value="157">New Zealand</option>
                                                    <option value="158">Nicaragua</option>
                                                    <option value="159">Niger</option>
                                                    <option value="160">Nigeria</option>
                                                    <option value="161">Niue</option>
                                                    <option value="162">Norfolk Island
                                                    </option>
                                                    <option value="163">Northern Mariana
                                                        Islands
                                                    </option>
                                                    <option value="164">Norway</option>
                                                    <option value="165">Oman</option>
                                                    <option value="166">Pakistan</option>
                                                    <option value="167">Palau</option>
                                                    <option value="168">Palestinian
                                                        Territory
                                                        Occupied</option>
                                                    <option value="169">Panama</option>
                                                    <option value="170">Papua new Guinea
                                                    </option>
                                                    <option value="171">Paraguay</option>
                                                    <option value="172">Peru</option>
                                                    <option value="173">Philippines</option>
                                                    <option value="174">Pitcairn Island
                                                    </option>
                                                    <option value="175">Poland</option>
                                                    <option value="176">Portugal</option>
                                                    <option value="177">Puerto Rico</option>
                                                    <option value="178">Qatar</option>
                                                    <option value="179">Reunion</option>
                                                    <option value="180">Romania</option>
                                                    <option value="181">Russia</option>
                                                    <option value="182">Rwanda</option>
                                                    <option value="183">Saint Helena
                                                    </option>
                                                    <option value="184">Saint Kitts And
                                                        Nevis
                                                    </option>
                                                    <option value="185">Saint Lucia</option>
                                                    <option value="186">Saint Pierre and
                                                        Miquelon
                                                    </option>
                                                    <option value="187">Saint Vincent And
                                                        The
                                                        Grenadines</option>
                                                    <option value="188">Samoa</option>
                                                    <option value="189">San Marino</option>
                                                    <option value="190">Sao Tome and
                                                        Principe
                                                    </option>
                                                    <option value="191">Saudi Arabia
                                                    </option>
                                                    <option value="192">Senegal</option>
                                                    <option value="193">Serbia</option>
                                                    <option value="194">Seychelles</option>
                                                    <option value="195">Sierra Leone
                                                    </option>
                                                    <option value="196">Singapore</option>
                                                    <option value="197">Slovakia</option>
                                                    <option value="198">Slovenia</option>
                                                    <option value="199">Smaller Territories
                                                        of the
                                                        UK</option>
                                                    <option value="200">Solomon Islands
                                                    </option>
                                                    <option value="201">Somalia</option>
                                                    <option value="202">South Africa
                                                    </option>
                                                    <option value="203">South Georgia
                                                    </option>
                                                    <option value="204">South Sudan</option>
                                                    <option value="205">Spain</option>
                                                    <option value="206">Sri Lanka</option>
                                                    <option value="207">Sudan</option>
                                                    <option value="208">Suriname</option>
                                                    <option value="209">Svalbard And Jan
                                                        Mayen
                                                        Islands</option>
                                                    <option value="210">Swaziland</option>
                                                    <option value="211">Sweden</option>
                                                    <option value="212">Switzerland</option>
                                                    <option value="213">Syria</option>
                                                    <option value="214">Taiwan</option>
                                                    <option value="215">Tajikistan</option>
                                                    <option value="216">Tanzania</option>
                                                    <option value="217">Thailand</option>
                                                    <option value="218">Togo</option>
                                                    <option value="219">Tokelau</option>
                                                    <option value="220">Tonga</option>
                                                    <option value="221">Trinidad And Tobago
                                                    </option>
                                                    <option value="222">Tunisia</option>
                                                    <option value="223">Turkey</option>
                                                    <option value="224">Turkmenistan
                                                    </option>
                                                    <option value="225">Turks And Caicos
                                                        Islands
                                                    </option>
                                                    <option value="226">Tuvalu</option>
                                                    <option value="227">Uganda</option>
                                                    <option value="228">Ukraine</option>
                                                    <option value="229">United Arab Emirates
                                                    </option>
                                                    <option value="230">United Kingdom
                                                    </option>
                                                    <option value="231">United States
                                                    </option>
                                                    <option value="232">United States Minor
                                                        Outlying
                                                        Islands</option>
                                                    <option value="233">Uruguay</option>
                                                    <option value="234">Uzbekistan</option>
                                                    <option value="235">Vanuatu</option>
                                                    <option value="236">Vatican City State
                                                        (Holy
                                                        See)</option>
                                                    <option value="237">Venezuela</option>
                                                    <option value="238">Vietnam</option>
                                                    <option value="239">Virgin Islands
                                                        (British)
                                                    </option>
                                                    <option value="240">Virgin Islands (US)
                                                    </option>
                                                    <option value="241">Wallis And Futuna
                                                        Islands
                                                    </option>
                                                    <option value="242">Western Sahara
                                                    </option>
                                                    <option value="243">Yemen</option>
                                                    <option value="244">Yugoslavia</option>
                                                    <option value="245">Zambia</option>
                                                    <option value="246">Zimbabwe</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <label class="form-label">City</label>
                                                <select class="form-control drop-select">
                                                    <option>Select city</option>
                                                    <option value="42" selected>Kerala</option>
                                                    <option value="43"> Badgis </option>
                                                    <option value="44"> Baglan </option>
                                                    <option value="45"> Balkh </option>
                                                    <option value="46"> Bamiyan </option>
                                                    <option value="47"> Farah </option>
                                                    <option value="48"> Faryab </option>
                                                    <option value="49"> Gawr </option>
                                                    <option value="50"> Gazni </option>
                                                    <option value="51"> Herat </option>
                                                    <option value="52"> Hilmand </option>
                                                    <option value="53"> Jawzjan </option>
                                                    <option value="54"> Kabul </option>
                                                    <option value="55"> Kapisa </option>
                                                    <option value="56"> Khawst </option>
                                                    <option value="57"> Kunar </option>
                                                    <option value="58"> Lagman </option>
                                                    <option value="59"> Lawghar </option>
                                                    <option value="60"> Nangarhar </option>
                                                    <option value="61"> Nimruz </option>
                                                    <option value="62"> Nuristan </option>
                                                    <option value="63"> Paktika </option>
                                                    <option value="64"> Paktiya </option>
                                                    <option value="65"> Parwan </option>
                                                    <option value="66"> Qandahar </option>
                                                    <option value="67"> Qunduz </option>
                                                    <option value="68"> Samangan </option>
                                                    <option value="69"> Sar-e Pul </option>
                                                    <option value="70"> Takhar </option>
                                                    <option value="71"> Uruzgan </option>
                                                    <option value="72"> Wardag </option>
                                                    <option value="73"> Zabul </option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Tax Information <span>(optional)</span>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-3">
                                            <div class="mb-3">
                                                <label class="form-label">Business GSTIN</label>
                                                <input type="text" value="32AAUFR3713P2ZM" class="form-control">
                                                <span class="small-text">Check GST Type</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-3">
                                            <div class="mb-3">
                                                <label class="form-label">Business PAN Number</label>
                                                <input type="text" value="AAUFR3713P" class="form-control">


                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Client Type</label>
                                                <div class="client-type-wrap">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="exampleRadios" id="exampleRadios11" value="option1"
                                                            checked>
                                                        <label class="form-check-label" for="exampleRadios11">
                                                            Individual
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="exampleRadios" id="exampleRadios11" value="option1">
                                                        <label class="form-check-label" for="exampleRadios11">
                                                            Company
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <label class="form-label">Tax Treatment</label>
                                            <select class="form-control drop-select">
                                                <option>Consumer</option>
                                                <option selected>B2B</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Address <span>(optional)</span>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-3">
                                            <div class="mb-3">
                                                <label class="form-label">Select Country</label>
                                                <select class="form-control drop-select">
                                                    <option value="">Select Country</option>
                                                    <option value="1">Afghanistan</option>
                                                    <option value="2">Albania</option>
                                                    <option value="3">Algeria</option>
                                                    <option value="4">American Samoa
                                                    </option>
                                                    <option value="5">Andorra</option>
                                                    <option value="6">Angola</option>
                                                    <option value="7">Anguilla</option>
                                                    <option value="8">Antarctica</option>
                                                    <option value="9">Antigua And Barbuda
                                                    </option>
                                                    <option value="10">Argentina</option>
                                                    <option value="11">Armenia</option>
                                                    <option value="12">Aruba</option>
                                                    <option value="13">Australia</option>
                                                    <option value="14">Austria</option>
                                                    <option value="15">Azerbaijan</option>
                                                    <option value="16">Bahamas The</option>
                                                    <option value="17">Bahrain</option>
                                                    <option value="18">Bangladesh</option>
                                                    <option value="19">Barbados</option>
                                                    <option value="20">Belarus</option>
                                                    <option value="21">Belgium</option>
                                                    <option value="22">Belize</option>
                                                    <option value="23">Benin</option>
                                                    <option value="24">Bermuda</option>
                                                    <option value="25">Bhutan</option>
                                                    <option value="26">Bolivia</option>
                                                    <option value="27">Bosnia and
                                                        Herzegovina
                                                    </option>
                                                    <option value="28">Botswana</option>
                                                    <option value="29">Bouvet Island
                                                    </option>
                                                    <option value="30">Brazil</option>
                                                    <option value="31">British Indian Ocean
                                                        Territory</option>
                                                    <option value="32">Brunei</option>
                                                    <option value="33">Bulgaria</option>
                                                    <option value="34">Burkina Faso</option>
                                                    <option value="35">Burundi</option>
                                                    <option value="36">Cambodia</option>
                                                    <option value="37">Cameroon</option>
                                                    <option value="38">Canada</option>
                                                    <option value="39">Cape Verde</option>
                                                    <option value="40">Cayman Islands
                                                    </option>
                                                    <option value="41">Central African
                                                        Republic
                                                    </option>
                                                    <option value="42">Chad</option>
                                                    <option value="43">Chile</option>
                                                    <option value="44">China</option>
                                                    <option value="45">Christmas Island
                                                    </option>
                                                    <option value="46">Cocos (Keeling)
                                                        Islands
                                                    </option>
                                                    <option value="47">Colombia</option>
                                                    <option value="48">Comoros</option>
                                                    <option value="49">Republic Of The Congo
                                                    </option>
                                                    <option value="50">Democratic Republic
                                                        Of The
                                                        Congo</option>
                                                    <option value="51">Cook Islands</option>
                                                    <option value="52">Costa Rica</option>
                                                    <option value="53">Cote D'Ivoire (Ivory
                                                        Coast)
                                                    </option>
                                                    <option value="54">Croatia (Hrvatska)
                                                    </option>
                                                    <option value="55">Cuba</option>
                                                    <option value="56">Cyprus</option>
                                                    <option value="57">Czech Republic
                                                    </option>
                                                    <option value="58">Denmark</option>
                                                    <option value="59">Djibouti</option>
                                                    <option value="60">Dominica</option>
                                                    <option value="61">Dominican Republic
                                                    </option>
                                                    <option value="62">East Timor</option>
                                                    <option value="63">Ecuador</option>
                                                    <option value="64">Egypt</option>
                                                    <option value="65">El Salvador</option>
                                                    <option value="66">Equatorial Guinea
                                                    </option>
                                                    <option value="67">Eritrea</option>
                                                    <option value="68">Estonia</option>
                                                    <option value="69">Ethiopia</option>
                                                    <option value="70">External Territories
                                                        of
                                                        Australia</option>
                                                    <option value="71">Falkland Islands
                                                    </option>
                                                    <option value="72">Faroe Islands
                                                    </option>
                                                    <option value="73">Fiji Islands</option>
                                                    <option value="74">Finland</option>
                                                    <option value="75">France</option>
                                                    <option value="76">French Guiana
                                                    </option>
                                                    <option value="77">French Polynesia
                                                    </option>
                                                    <option value="78">French Southern
                                                        Territories
                                                    </option>
                                                    <option value="79">Gabon</option>
                                                    <option value="80">Gambia The</option>
                                                    <option value="81">Georgia</option>
                                                    <option value="82">Germany</option>
                                                    <option value="83">Ghana</option>
                                                    <option value="84">Gibraltar</option>
                                                    <option value="85">Greece</option>
                                                    <option value="86">Greenland</option>
                                                    <option value="87">Grenada</option>
                                                    <option value="88">Guadeloupe</option>
                                                    <option value="89">Guam</option>
                                                    <option value="90">Guatemala</option>
                                                    <option value="91">Guernsey and Alderney
                                                    </option>
                                                    <option value="92">Guinea</option>
                                                    <option value="93">Guinea-Bissau
                                                    </option>
                                                    <option value="94">Guyana</option>
                                                    <option value="95">Haiti</option>
                                                    <option value="96">Heard and McDonald
                                                        Islands
                                                    </option>
                                                    <option value="97">Honduras</option>
                                                    <option value="98">Hong Kong S.A.R.
                                                    </option>
                                                    <option value="99">Hungary</option>
                                                    <option value="100">Iceland</option>
                                                    <option value="101">India</option>
                                                    <option value="102">Indonesia</option>
                                                    <option value="103">Iran</option>
                                                    <option value="104">Iraq</option>
                                                    <option value="105">Ireland</option>
                                                    <option value="106">Israel</option>
                                                    <option value="107">Italy</option>
                                                    <option value="108">Jamaica</option>
                                                    <option value="109">Japan</option>
                                                    <option value="110">Jersey</option>
                                                    <option value="111">Jordan</option>
                                                    <option value="112">Kazakhstan</option>
                                                    <option value="113">Kenya</option>
                                                    <option value="114">Kiribati</option>
                                                    <option value="115">Korea North</option>
                                                    <option value="116">Korea South</option>
                                                    <option value="117">Kuwait</option>
                                                    <option value="118">Kyrgyzstan</option>
                                                    <option value="119">Laos</option>
                                                    <option value="120">Latvia</option>
                                                    <option value="121">Lebanon</option>
                                                    <option value="122">Lesotho</option>
                                                    <option value="123">Liberia</option>
                                                    <option value="124">Libya</option>
                                                    <option value="125">Liechtenstein
                                                    </option>
                                                    <option value="126">Lithuania</option>
                                                    <option value="127">Luxembourg</option>
                                                    <option value="128">Macau S.A.R.
                                                    </option>
                                                    <option value="129">Macedonia</option>
                                                    <option value="130">Madagascar</option>
                                                    <option value="131">Malawi</option>
                                                    <option value="132">Malaysia</option>
                                                    <option value="133">Maldives</option>
                                                    <option value="134">Mali</option>
                                                    <option value="135">Malta</option>
                                                    <option value="136">Man (Isle of)
                                                    </option>
                                                    <option value="137">Marshall Islands
                                                    </option>
                                                    <option value="138">Martinique</option>
                                                    <option value="139">Mauritania</option>
                                                    <option value="140">Mauritius</option>
                                                    <option value="141">Mayotte</option>
                                                    <option value="142">Mexico</option>
                                                    <option value="143">Micronesia</option>
                                                    <option value="144">Moldova</option>
                                                    <option value="145">Monaco</option>
                                                    <option value="146">Mongolia</option>
                                                    <option value="147">Montserrat</option>
                                                    <option value="148">Morocco</option>
                                                    <option value="149">Mozambique</option>
                                                    <option value="150">Myanmar</option>
                                                    <option value="151">Namibia</option>
                                                    <option value="152">Nauru</option>
                                                    <option value="153">Nepal</option>
                                                    <option value="154">Netherlands Antilles
                                                    </option>
                                                    <option value="155">Netherlands The
                                                    </option>
                                                    <option value="156">New Caledonia
                                                    </option>
                                                    <option value="157">New Zealand</option>
                                                    <option value="158">Nicaragua</option>
                                                    <option value="159">Niger</option>
                                                    <option value="160">Nigeria</option>
                                                    <option value="161">Niue</option>
                                                    <option value="162">Norfolk Island
                                                    </option>
                                                    <option value="163">Northern Mariana
                                                        Islands
                                                    </option>
                                                    <option value="164">Norway</option>
                                                    <option value="165">Oman</option>
                                                    <option value="166">Pakistan</option>
                                                    <option value="167">Palau</option>
                                                    <option value="168">Palestinian
                                                        Territory
                                                        Occupied</option>
                                                    <option value="169">Panama</option>
                                                    <option value="170">Papua new Guinea
                                                    </option>
                                                    <option value="171">Paraguay</option>
                                                    <option value="172">Peru</option>
                                                    <option value="173">Philippines</option>
                                                    <option value="174">Pitcairn Island
                                                    </option>
                                                    <option value="175">Poland</option>
                                                    <option value="176">Portugal</option>
                                                    <option value="177">Puerto Rico</option>
                                                    <option value="178">Qatar</option>
                                                    <option value="179">Reunion</option>
                                                    <option value="180">Romania</option>
                                                    <option value="181">Russia</option>
                                                    <option value="182">Rwanda</option>
                                                    <option value="183">Saint Helena
                                                    </option>
                                                    <option value="184">Saint Kitts And
                                                        Nevis
                                                    </option>
                                                    <option value="185">Saint Lucia</option>
                                                    <option value="186">Saint Pierre and
                                                        Miquelon
                                                    </option>
                                                    <option value="187">Saint Vincent And
                                                        The
                                                        Grenadines</option>
                                                    <option value="188">Samoa</option>
                                                    <option value="189">San Marino</option>
                                                    <option value="190">Sao Tome and
                                                        Principe
                                                    </option>
                                                    <option value="191">Saudi Arabia
                                                    </option>
                                                    <option value="192">Senegal</option>
                                                    <option value="193">Serbia</option>
                                                    <option value="194">Seychelles</option>
                                                    <option value="195">Sierra Leone
                                                    </option>
                                                    <option value="196">Singapore</option>
                                                    <option value="197">Slovakia</option>
                                                    <option value="198">Slovenia</option>
                                                    <option value="199">Smaller Territories
                                                        of the
                                                        UK</option>
                                                    <option value="200">Solomon Islands
                                                    </option>
                                                    <option value="201">Somalia</option>
                                                    <option value="202">South Africa
                                                    </option>
                                                    <option value="203">South Georgia
                                                    </option>
                                                    <option value="204">South Sudan</option>
                                                    <option value="205">Spain</option>
                                                    <option value="206">Sri Lanka</option>
                                                    <option value="207">Sudan</option>
                                                    <option value="208">Suriname</option>
                                                    <option value="209">Svalbard And Jan
                                                        Mayen
                                                        Islands</option>
                                                    <option value="210">Swaziland</option>
                                                    <option value="211">Sweden</option>
                                                    <option value="212">Switzerland</option>
                                                    <option value="213">Syria</option>
                                                    <option value="214">Taiwan</option>
                                                    <option value="215">Tajikistan</option>
                                                    <option value="216">Tanzania</option>
                                                    <option value="217">Thailand</option>
                                                    <option value="218">Togo</option>
                                                    <option value="219">Tokelau</option>
                                                    <option value="220">Tonga</option>
                                                    <option value="221">Trinidad And Tobago
                                                    </option>
                                                    <option value="222">Tunisia</option>
                                                    <option value="223">Turkey</option>
                                                    <option value="224">Turkmenistan
                                                    </option>
                                                    <option value="225">Turks And Caicos
                                                        Islands
                                                    </option>
                                                    <option value="226">Tuvalu</option>
                                                    <option value="227">Uganda</option>
                                                    <option value="228">Ukraine</option>
                                                    <option value="229">United Arab Emirates
                                                    </option>
                                                    <option value="230">United Kingdom
                                                    </option>
                                                    <option value="231">United States
                                                    </option>
                                                    <option value="232">United States Minor
                                                        Outlying
                                                        Islands</option>
                                                    <option value="233">Uruguay</option>
                                                    <option value="234">Uzbekistan</option>
                                                    <option value="235">Vanuatu</option>
                                                    <option value="236">Vatican City State
                                                        (Holy
                                                        See)</option>
                                                    <option value="237">Venezuela</option>
                                                    <option value="238">Vietnam</option>
                                                    <option value="239">Virgin Islands
                                                        (British)
                                                    </option>
                                                    <option value="240">Virgin Islands (US)
                                                    </option>
                                                    <option value="241">Wallis And Futuna
                                                        Islands
                                                    </option>
                                                    <option value="242">Western Sahara
                                                    </option>
                                                    <option value="243">Yemen</option>
                                                    <option value="244">Yugoslavia</option>
                                                    <option value="245">Zambia</option>
                                                    <option value="246">Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-3">
                                            <div class="mb-3">
                                                <label class="form-label">State / Province</label>
                                                <select class="form-control drop-select">
                                                    <option>Select State / Province</option>
                                                    <option value="42"> Badakhshan </option>
                                                    <option value="43"> Badgis </option>
                                                    <option value="44"> Baglan </option>
                                                    <option value="45"> Balkh </option>
                                                    <option value="46"> Bamiyan </option>
                                                    <option value="47"> Farah </option>
                                                    <option value="48"> Faryab </option>
                                                    <option value="49"> Gawr </option>
                                                    <option value="50"> Gazni </option>
                                                    <option value="51"> Herat </option>
                                                    <option value="52"> Hilmand </option>
                                                    <option value="53"> Jawzjan </option>
                                                    <option value="54"> Kabul </option>
                                                    <option value="55"> Kapisa </option>
                                                    <option value="56"> Khawst </option>
                                                    <option value="57"> Kunar </option>
                                                    <option value="58"> Lagman </option>
                                                    <option value="59"> Lawghar </option>
                                                    <option value="60"> Nangarhar </option>
                                                    <option value="61"> Nimruz </option>
                                                    <option value="62"> Nuristan </option>
                                                    <option value="63"> Paktika </option>
                                                    <option value="64"> Paktiya </option>
                                                    <option value="65"> Parwan </option>
                                                    <option value="66"> Qandahar </option>
                                                    <option value="67"> Qunduz </option>
                                                    <option value="68"> Samangan </option>
                                                    <option value="69"> Sar-e Pul </option>
                                                    <option value="70"> Takhar </option>
                                                    <option value="71"> Uruzgan </option>
                                                    <option value="72"> Wardag </option>
                                                    <option value="73"> Zabul </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">City</label>
                                                <select class="form-control drop-select">
                                                    <option>Select city</option>
                                                    <option value="42"> Badakhshan </option>
                                                    <option value="43"> Badgis </option>
                                                    <option value="44"> Baglan </option>
                                                    <option value="45"> Balkh </option>
                                                    <option value="46"> Bamiyan </option>
                                                    <option value="47"> Farah </option>
                                                    <option value="48"> Faryab </option>
                                                    <option value="49"> Gawr </option>
                                                    <option value="50"> Gazni </option>
                                                    <option value="51"> Herat </option>
                                                    <option value="52"> Hilmand </option>
                                                    <option value="53"> Jawzjan </option>
                                                    <option value="54"> Kabul </option>
                                                    <option value="55"> Kapisa </option>
                                                    <option value="56"> Khawst </option>
                                                    <option value="57"> Kunar </option>
                                                    <option value="58"> Lagman </option>
                                                    <option value="59"> Lawghar </option>
                                                    <option value="60"> Nangarhar </option>
                                                    <option value="61"> Nimruz </option>
                                                    <option value="62"> Nuristan </option>
                                                    <option value="63"> Paktika </option>
                                                    <option value="64"> Paktiya </option>
                                                    <option value="65"> Parwan </option>
                                                    <option value="66"> Qandahar </option>
                                                    <option value="67"> Qunduz </option>
                                                    <option value="68"> Samangan </option>
                                                    <option value="69"> Sar-e Pul </option>
                                                    <option value="70"> Takhar </option>
                                                    <option value="71"> Uruzgan </option>
                                                    <option value="72"> Wardag </option>
                                                    <option value="73"> Zabul </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Postal Code / Zip Code</label>
                                                <input type="text" value="" class="form-control"
                                                    placeholder="Postal Code / Zip Code">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Street Address</label>
                                                <input type="text" value="" class="form-control"
                                                    placeholder="Street Address">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Additional Details <span>(optional)</span>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-3">
                                            <div class="mb-3">
                                                <label class="form-label">Business Alias (Nick Name)</label>
                                                <input type="text" value="" class="form-control"
                                                    placeholder="Business Alias">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-3">
                                            <div class="mb-3">
                                                <label class="form-label">Unique Key</label>
                                                <input type="text" value="" class="form-control"
                                                    placeholder="1691741062868">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input type="mail" value="" class="form-control" placeholder="Email">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                        id="exampleRadios1" value="option1">
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Add Shipping Details
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Phone</label>
                                                <input type="phone" value="" class="form-control" placeholder="phone">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                        id="exampleRadios1" value="option1">
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Add Shipping Details
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="mb-3 common-bar w-100">
                                                <div class="add-feild-wraps">
                                                    <input type="text" class="form-control  drop-select"
                                                        placeholder="Select any Custom field">
                                                    <div class="drop-lsit">
                                                        <ul>
                                                            <li><a href="#"></a></li>
                                                            <li>
                                                                <div class="no-option">
                                                                    <p>No options</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="add-fieldss">
                                                            <a class="common-bar-btn" data-bs-toggle="modal"
                                                                data-bs-target="#add-feilds">Add New Custom
                                                                Fields</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="add-field">
                                                <button type="button"> <i class="fas fa-plus-square"></i>Add
                                                    Custom Field</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <form class="mt-3 mb-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="exampleRadios"
                                        id="exampleRadios1" value="option1">
                                    <label class="form-check-label" for="exampleRadios1">
                                        Update current changes for all existing invoices of this business.
                                    </label>
                                </div>
                                <button type="button" class="save-btn" data-bs-dismiss="modal">Save</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- Edit bussiness edit modal -->
    <div class="modal fade common-modal common-modal-css" id="editbusstpop" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="heading">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Client Details</h1>
                        <button type="button" class="btn close_btn" data-bs-dismiss="modal" aria-label="Close">
                            <img src="assets/image/close.png">
                        </button>
                    </div>
                    <hr class="cstm-line">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Basic Information
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <form>
                                        <div class="row">
                                             
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Business Name</label>
                                                    <input type="text" class="form-control" value="shubam tech">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 hide-col">
                                                <!-- <div class="mb-3">
                                                    <label class="form-label">Client Industry</label>
                                                    <select class="form-control drop-select">
                                                        <option>Select an Industry</option>
                                                        <option>Apparel & Fashion</option>
                                                        <option>Architecture & Planning</option>
                                                        <option>Business Supolies & Equipment</option>
                                                        <option>Comouter Software</option>
                                                        <option>Computer Hardware</option>
                                                        <option>Education</option>
                                                        <option>Entertainment</option>
                                                        <option>FMCG</option>
                                                        <option>Health, Wellness and Fitness</option>
                                                        <option>harges</option>
                                                        <option>Hospitality</option>
                                                        <option>Import and Export</option>
                                                        <option selected>IT & ITes </option>
                                                        <option>Legal Services</option>
                                                        <option>Manufacture</option>
                                                        <option>narge</option>
                                                        <option>Marketing & Advertising</option>
                                                        <option>Packaging & Containers</option>
                                                        <option>Printing</option>
                                                        <option>Pharmaceuticals</option>
                                                        <option>Retail</option>
                                                        <option>Tourism</option>
                                                    </select>
                                                </div> -->
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <label class="form-label">Country</label>
                                                <select class="form-control drop-select">
                                                    <option value="">Select Country</option>
                                                    <option value="1">Afghanistan</option>
                                                    <option value="2">Albania</option>
                                                    <option value="3">Algeria</option>
                                                    <option value="4">American Samoa
                                                    </option>
                                                    <option value="5">Andorra</option>
                                                    <option value="6">Angola</option>
                                                    <option value="7">Anguilla</option>
                                                    <option value="8">Antarctica</option>
                                                    <option value="9">Antigua And Barbuda
                                                    </option>
                                                    <option value="10">Argentina</option>
                                                    <option value="11">Armenia</option>
                                                    <option value="12">Aruba</option>
                                                    <option value="13">Australia</option>
                                                    <option value="14">Austria</option>
                                                    <option value="15">Azerbaijan</option>
                                                    <option value="16">Bahamas The</option>
                                                    <option value="17">Bahrain</option>
                                                    <option value="18">Bangladesh</option>
                                                    <option value="19">Barbados</option>
                                                    <option value="20">Belarus</option>
                                                    <option value="21">Belgium</option>
                                                    <option value="22">Belize</option>
                                                    <option value="23">Benin</option>
                                                    <option value="24">Bermuda</option>
                                                    <option value="25">Bhutan</option>
                                                    <option value="26">Bolivia</option>
                                                    <option value="27">Bosnia and
                                                        Herzegovina
                                                    </option>
                                                    <option value="28">Botswana</option>
                                                    <option value="29">Bouvet Island
                                                    </option>
                                                    <option value="30">Brazil</option>
                                                    <option value="31">British Indian Ocean
                                                        Territory</option>
                                                    <option value="32">Brunei</option>
                                                    <option value="33">Bulgaria</option>
                                                    <option value="34">Burkina Faso</option>
                                                    <option value="35">Burundi</option>
                                                    <option value="36">Cambodia</option>
                                                    <option value="37">Cameroon</option>
                                                    <option value="38">Canada</option>
                                                    <option value="39">Cape Verde</option>
                                                    <option value="40">Cayman Islands
                                                    </option>
                                                    <option value="41">Central African
                                                        Republic
                                                    </option>
                                                    <option value="42">Chad</option>
                                                    <option value="43">Chile</option>
                                                    <option value="44">China</option>
                                                    <option value="45">Christmas Island
                                                    </option>
                                                    <option value="46">Cocos (Keeling)
                                                        Islands
                                                    </option>
                                                    <option value="47">Colombia</option>
                                                    <option value="48">Comoros</option>
                                                    <option value="49">Republic Of The Congo
                                                    </option>
                                                    <option value="50">Democratic Republic
                                                        Of The
                                                        Congo</option>
                                                    <option value="51">Cook Islands</option>
                                                    <option value="52">Costa Rica</option>
                                                    <option value="53">Cote D'Ivoire (Ivory
                                                        Coast)
                                                    </option>
                                                    <option value="54">Croatia (Hrvatska)
                                                    </option>
                                                    <option value="55">Cuba</option>
                                                    <option value="56">Cyprus</option>
                                                    <option value="57">Czech Republic
                                                    </option>
                                                    <option value="58">Denmark</option>
                                                    <option value="59">Djibouti</option>
                                                    <option value="60">Dominica</option>
                                                    <option value="61">Dominican Republic
                                                    </option>
                                                    <option value="62">East Timor</option>
                                                    <option value="63">Ecuador</option>
                                                    <option value="64">Egypt</option>
                                                    <option value="65">El Salvador</option>
                                                    <option value="66">Equatorial Guinea
                                                    </option>
                                                    <option value="67">Eritrea</option>
                                                    <option value="68">Estonia</option>
                                                    <option value="69">Ethiopia</option>
                                                    <option value="70">External Territories
                                                        of
                                                        Australia</option>
                                                    <option value="71">Falkland Islands
                                                    </option>
                                                    <option value="72">Faroe Islands
                                                    </option>
                                                    <option value="73">Fiji Islands</option>
                                                    <option value="74">Finland</option>
                                                    <option value="75">France</option>
                                                    <option value="76">French Guiana
                                                    </option>
                                                    <option value="77">French Polynesia
                                                    </option>
                                                    <option value="78">French Southern
                                                        Territories
                                                    </option>
                                                    <option value="79">Gabon</option>
                                                    <option value="80">Gambia The</option>
                                                    <option value="81">Georgia</option>
                                                    <option value="82">Germany</option>
                                                    <option value="83">Ghana</option>
                                                    <option value="84">Gibraltar</option>
                                                    <option value="85">Greece</option>
                                                    <option value="86">Greenland</option>
                                                    <option value="87">Grenada</option>
                                                    <option value="88">Guadeloupe</option>
                                                    <option value="89">Guam</option>
                                                    <option value="90">Guatemala</option>
                                                    <option value="91">Guernsey and Alderney
                                                    </option>
                                                    <option value="92">Guinea</option>
                                                    <option value="93">Guinea-Bissau
                                                    </option>
                                                    <option value="94">Guyana</option>
                                                    <option value="95">Haiti</option>
                                                    <option value="96">Heard and McDonald
                                                        Islands
                                                    </option>
                                                    <option value="97">Honduras</option>
                                                    <option value="98">Hong Kong S.A.R.
                                                    </option>
                                                    <option value="99">Hungary</option>
                                                    <option value="100">Iceland</option>
                                                    <option value="101" selected>India</option>
                                                    <option value="102">Indonesia</option>
                                                    <option value="103">Iran</option>
                                                    <option value="104">Iraq</option>
                                                    <option value="105">Ireland</option>
                                                    <option value="106">Israel</option>
                                                    <option value="107">Italy</option>
                                                    <option value="108">Jamaica</option>
                                                    <option value="109">Japan</option>
                                                    <option value="110">Jersey</option>
                                                    <option value="111">Jordan</option>
                                                    <option value="112">Kazakhstan</option>
                                                    <option value="113">Kenya</option>
                                                    <option value="114">Kiribati</option>
                                                    <option value="115">Korea North</option>
                                                    <option value="116">Korea South</option>
                                                    <option value="117">Kuwait</option>
                                                    <option value="118">Kyrgyzstan</option>
                                                    <option value="119">Laos</option>
                                                    <option value="120">Latvia</option>
                                                    <option value="121">Lebanon</option>
                                                    <option value="122">Lesotho</option>
                                                    <option value="123">Liberia</option>
                                                    <option value="124">Libya</option>
                                                    <option value="125">Liechtenstein
                                                    </option>
                                                    <option value="126">Lithuania</option>
                                                    <option value="127">Luxembourg</option>
                                                    <option value="128">Macau S.A.R.
                                                    </option>
                                                    <option value="129">Macedonia</option>
                                                    <option value="130">Madagascar</option>
                                                    <option value="131">Malawi</option>
                                                    <option value="132">Malaysia</option>
                                                    <option value="133">Maldives</option>
                                                    <option value="134">Mali</option>
                                                    <option value="135">Malta</option>
                                                    <option value="136">Man (Isle of)
                                                    </option>
                                                    <option value="137">Marshall Islands
                                                    </option>
                                                    <option value="138">Martinique</option>
                                                    <option value="139">Mauritania</option>
                                                    <option value="140">Mauritius</option>
                                                    <option value="141">Mayotte</option>
                                                    <option value="142">Mexico</option>
                                                    <option value="143">Micronesia</option>
                                                    <option value="144">Moldova</option>
                                                    <option value="145">Monaco</option>
                                                    <option value="146">Mongolia</option>
                                                    <option value="147">Montserrat</option>
                                                    <option value="148">Morocco</option>
                                                    <option value="149">Mozambique</option>
                                                    <option value="150">Myanmar</option>
                                                    <option value="151">Namibia</option>
                                                    <option value="152">Nauru</option>
                                                    <option value="153">Nepal</option>
                                                    <option value="154">Netherlands Antilles
                                                    </option>
                                                    <option value="155">Netherlands The
                                                    </option>
                                                    <option value="156">New Caledonia
                                                    </option>
                                                    <option value="157">New Zealand</option>
                                                    <option value="158">Nicaragua</option>
                                                    <option value="159">Niger</option>
                                                    <option value="160">Nigeria</option>
                                                    <option value="161">Niue</option>
                                                    <option value="162">Norfolk Island
                                                    </option>
                                                    <option value="163">Northern Mariana
                                                        Islands
                                                    </option>
                                                    <option value="164">Norway</option>
                                                    <option value="165">Oman</option>
                                                    <option value="166">Pakistan</option>
                                                    <option value="167">Palau</option>
                                                    <option value="168">Palestinian
                                                        Territory
                                                        Occupied</option>
                                                    <option value="169">Panama</option>
                                                    <option value="170">Papua new Guinea
                                                    </option>
                                                    <option value="171">Paraguay</option>
                                                    <option value="172">Peru</option>
                                                    <option value="173">Philippines</option>
                                                    <option value="174">Pitcairn Island
                                                    </option>
                                                    <option value="175">Poland</option>
                                                    <option value="176">Portugal</option>
                                                    <option value="177">Puerto Rico</option>
                                                    <option value="178">Qatar</option>
                                                    <option value="179">Reunion</option>
                                                    <option value="180">Romania</option>
                                                    <option value="181">Russia</option>
                                                    <option value="182">Rwanda</option>
                                                    <option value="183">Saint Helena
                                                    </option>
                                                    <option value="184">Saint Kitts And
                                                        Nevis
                                                    </option>
                                                    <option value="185">Saint Lucia</option>
                                                    <option value="186">Saint Pierre and
                                                        Miquelon
                                                    </option>
                                                    <option value="187">Saint Vincent And
                                                        The
                                                        Grenadines</option>
                                                    <option value="188">Samoa</option>
                                                    <option value="189">San Marino</option>
                                                    <option value="190">Sao Tome and
                                                        Principe
                                                    </option>
                                                    <option value="191">Saudi Arabia
                                                    </option>
                                                    <option value="192">Senegal</option>
                                                    <option value="193">Serbia</option>
                                                    <option value="194">Seychelles</option>
                                                    <option value="195">Sierra Leone
                                                    </option>
                                                    <option value="196">Singapore</option>
                                                    <option value="197">Slovakia</option>
                                                    <option value="198">Slovenia</option>
                                                    <option value="199">Smaller Territories
                                                        of the
                                                        UK</option>
                                                    <option value="200">Solomon Islands
                                                    </option>
                                                    <option value="201">Somalia</option>
                                                    <option value="202">South Africa
                                                    </option>
                                                    <option value="203">South Georgia
                                                    </option>
                                                    <option value="204">South Sudan</option>
                                                    <option value="205">Spain</option>
                                                    <option value="206">Sri Lanka</option>
                                                    <option value="207">Sudan</option>
                                                    <option value="208">Suriname</option>
                                                    <option value="209">Svalbard And Jan
                                                        Mayen
                                                        Islands</option>
                                                    <option value="210">Swaziland</option>
                                                    <option value="211">Sweden</option>
                                                    <option value="212">Switzerland</option>
                                                    <option value="213">Syria</option>
                                                    <option value="214">Taiwan</option>
                                                    <option value="215">Tajikistan</option>
                                                    <option value="216">Tanzania</option>
                                                    <option value="217">Thailand</option>
                                                    <option value="218">Togo</option>
                                                    <option value="219">Tokelau</option>
                                                    <option value="220">Tonga</option>
                                                    <option value="221">Trinidad And Tobago
                                                    </option>
                                                    <option value="222">Tunisia</option>
                                                    <option value="223">Turkey</option>
                                                    <option value="224">Turkmenistan
                                                    </option>
                                                    <option value="225">Turks And Caicos
                                                        Islands
                                                    </option>
                                                    <option value="226">Tuvalu</option>
                                                    <option value="227">Uganda</option>
                                                    <option value="228">Ukraine</option>
                                                    <option value="229">United Arab Emirates
                                                    </option>
                                                    <option value="230">United Kingdom
                                                    </option>
                                                    <option value="231">United States
                                                    </option>
                                                    <option value="232">United States Minor
                                                        Outlying
                                                        Islands</option>
                                                    <option value="233">Uruguay</option>
                                                    <option value="234">Uzbekistan</option>
                                                    <option value="235">Vanuatu</option>
                                                    <option value="236">Vatican City State
                                                        (Holy
                                                        See)</option>
                                                    <option value="237">Venezuela</option>
                                                    <option value="238">Vietnam</option>
                                                    <option value="239">Virgin Islands
                                                        (British)
                                                    </option>
                                                    <option value="240">Virgin Islands (US)
                                                    </option>
                                                    <option value="241">Wallis And Futuna
                                                        Islands
                                                    </option>
                                                    <option value="242">Western Sahara
                                                    </option>
                                                    <option value="243">Yemen</option>
                                                    <option value="244">Yugoslavia</option>
                                                    <option value="245">Zambia</option>
                                                    <option value="246">Zimbabwe</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <label class="form-label">City</label>
                                                <select class="form-control drop-select">
                                                    <option>Select city</option>
                                                    <option value="42" selected>Kerala</option>
                                                    <option value="43"> Badgis </option>
                                                    <option value="44"> Baglan </option>
                                                    <option value="45"> Balkh </option>
                                                    <option value="46"> Bamiyan </option>
                                                    <option value="47"> Farah </option>
                                                    <option value="48"> Faryab </option>
                                                    <option value="49"> Gawr </option>
                                                    <option value="50"> Gazni </option>
                                                    <option value="51"> Herat </option>
                                                    <option value="52"> Hilmand </option>
                                                    <option value="53"> Jawzjan </option>
                                                    <option value="54"> Kabul </option>
                                                    <option value="55"> Kapisa </option>
                                                    <option value="56"> Khawst </option>
                                                    <option value="57"> Kunar </option>
                                                    <option value="58"> Lagman </option>
                                                    <option value="59"> Lawghar </option>
                                                    <option value="60"> Nangarhar </option>
                                                    <option value="61"> Nimruz </option>
                                                    <option value="62"> Nuristan </option>
                                                    <option value="63"> Paktika </option>
                                                    <option value="64"> Paktiya </option>
                                                    <option value="65"> Parwan </option>
                                                    <option value="66"> Qandahar </option>
                                                    <option value="67"> Qunduz </option>
                                                    <option value="68"> Samangan </option>
                                                    <option value="69"> Sar-e Pul </option>
                                                    <option value="70"> Takhar </option>
                                                    <option value="71"> Uruzgan </option>
                                                    <option value="72"> Wardag </option>
                                                    <option value="73"> Zabul </option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Tax Information <span>(optional)</span>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-3">
                                            <div class="mb-3">
                                                <label class="form-label">Business GSTIN</label>
                                                <input type="text" value="32AAUFR3713P2ZM" class="form-control">
                                                <span class="small-text">Check GST Type</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-3">
                                            <div class="mb-3">
                                                <label class="form-label">Business PAN Number</label>
                                                <input type="text" value="AAUFR3713P" class="form-control">


                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Client Type</label>
                                                <div class="client-type-wrap">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="exampleRadios" id="exampleRadios11" value="option1"
                                                            checked>
                                                        <label class="form-check-label" for="exampleRadios11">
                                                            Individual
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="exampleRadios" id="exampleRadios11" value="option1">
                                                        <label class="form-check-label" for="exampleRadios11">
                                                            Company
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <label class="form-label">Tax Treatment</label>
                                            <select class="form-control drop-select">
                                                <option>Consumer</option>
                                                <option selected>B2B</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Address <span>(optional)</span>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-3">
                                            <div class="mb-3">
                                                <label class="form-label">Select Country</label>
                                                <select class="form-control drop-select">
                                                    <option value="">Select Country</option>
                                                    <option value="1">Afghanistan</option>
                                                    <option value="2">Albania</option>
                                                    <option value="3">Algeria</option>
                                                    <option value="4">American Samoa
                                                    </option>
                                                    <option value="5">Andorra</option>
                                                    <option value="6">Angola</option>
                                                    <option value="7">Anguilla</option>
                                                    <option value="8">Antarctica</option>
                                                    <option value="9">Antigua And Barbuda
                                                    </option>
                                                    <option value="10">Argentina</option>
                                                    <option value="11">Armenia</option>
                                                    <option value="12">Aruba</option>
                                                    <option value="13">Australia</option>
                                                    <option value="14">Austria</option>
                                                    <option value="15">Azerbaijan</option>
                                                    <option value="16">Bahamas The</option>
                                                    <option value="17">Bahrain</option>
                                                    <option value="18">Bangladesh</option>
                                                    <option value="19">Barbados</option>
                                                    <option value="20">Belarus</option>
                                                    <option value="21">Belgium</option>
                                                    <option value="22">Belize</option>
                                                    <option value="23">Benin</option>
                                                    <option value="24">Bermuda</option>
                                                    <option value="25">Bhutan</option>
                                                    <option value="26">Bolivia</option>
                                                    <option value="27">Bosnia and
                                                        Herzegovina
                                                    </option>
                                                    <option value="28">Botswana</option>
                                                    <option value="29">Bouvet Island
                                                    </option>
                                                    <option value="30">Brazil</option>
                                                    <option value="31">British Indian Ocean
                                                        Territory</option>
                                                    <option value="32">Brunei</option>
                                                    <option value="33">Bulgaria</option>
                                                    <option value="34">Burkina Faso</option>
                                                    <option value="35">Burundi</option>
                                                    <option value="36">Cambodia</option>
                                                    <option value="37">Cameroon</option>
                                                    <option value="38">Canada</option>
                                                    <option value="39">Cape Verde</option>
                                                    <option value="40">Cayman Islands
                                                    </option>
                                                    <option value="41">Central African
                                                        Republic
                                                    </option>
                                                    <option value="42">Chad</option>
                                                    <option value="43">Chile</option>
                                                    <option value="44">China</option>
                                                    <option value="45">Christmas Island
                                                    </option>
                                                    <option value="46">Cocos (Keeling)
                                                        Islands
                                                    </option>
                                                    <option value="47">Colombia</option>
                                                    <option value="48">Comoros</option>
                                                    <option value="49">Republic Of The Congo
                                                    </option>
                                                    <option value="50">Democratic Republic
                                                        Of The
                                                        Congo</option>
                                                    <option value="51">Cook Islands</option>
                                                    <option value="52">Costa Rica</option>
                                                    <option value="53">Cote D'Ivoire (Ivory
                                                        Coast)
                                                    </option>
                                                    <option value="54">Croatia (Hrvatska)
                                                    </option>
                                                    <option value="55">Cuba</option>
                                                    <option value="56">Cyprus</option>
                                                    <option value="57">Czech Republic
                                                    </option>
                                                    <option value="58">Denmark</option>
                                                    <option value="59">Djibouti</option>
                                                    <option value="60">Dominica</option>
                                                    <option value="61">Dominican Republic
                                                    </option>
                                                    <option value="62">East Timor</option>
                                                    <option value="63">Ecuador</option>
                                                    <option value="64">Egypt</option>
                                                    <option value="65">El Salvador</option>
                                                    <option value="66">Equatorial Guinea
                                                    </option>
                                                    <option value="67">Eritrea</option>
                                                    <option value="68">Estonia</option>
                                                    <option value="69">Ethiopia</option>
                                                    <option value="70">External Territories
                                                        of
                                                        Australia</option>
                                                    <option value="71">Falkland Islands
                                                    </option>
                                                    <option value="72">Faroe Islands
                                                    </option>
                                                    <option value="73">Fiji Islands</option>
                                                    <option value="74">Finland</option>
                                                    <option value="75">France</option>
                                                    <option value="76">French Guiana
                                                    </option>
                                                    <option value="77">French Polynesia
                                                    </option>
                                                    <option value="78">French Southern
                                                        Territories
                                                    </option>
                                                    <option value="79">Gabon</option>
                                                    <option value="80">Gambia The</option>
                                                    <option value="81">Georgia</option>
                                                    <option value="82">Germany</option>
                                                    <option value="83">Ghana</option>
                                                    <option value="84">Gibraltar</option>
                                                    <option value="85">Greece</option>
                                                    <option value="86">Greenland</option>
                                                    <option value="87">Grenada</option>
                                                    <option value="88">Guadeloupe</option>
                                                    <option value="89">Guam</option>
                                                    <option value="90">Guatemala</option>
                                                    <option value="91">Guernsey and Alderney
                                                    </option>
                                                    <option value="92">Guinea</option>
                                                    <option value="93">Guinea-Bissau
                                                    </option>
                                                    <option value="94">Guyana</option>
                                                    <option value="95">Haiti</option>
                                                    <option value="96">Heard and McDonald
                                                        Islands
                                                    </option>
                                                    <option value="97">Honduras</option>
                                                    <option value="98">Hong Kong S.A.R.
                                                    </option>
                                                    <option value="99">Hungary</option>
                                                    <option value="100">Iceland</option>
                                                    <option value="101">India</option>
                                                    <option value="102">Indonesia</option>
                                                    <option value="103">Iran</option>
                                                    <option value="104">Iraq</option>
                                                    <option value="105">Ireland</option>
                                                    <option value="106">Israel</option>
                                                    <option value="107">Italy</option>
                                                    <option value="108">Jamaica</option>
                                                    <option value="109">Japan</option>
                                                    <option value="110">Jersey</option>
                                                    <option value="111">Jordan</option>
                                                    <option value="112">Kazakhstan</option>
                                                    <option value="113">Kenya</option>
                                                    <option value="114">Kiribati</option>
                                                    <option value="115">Korea North</option>
                                                    <option value="116">Korea South</option>
                                                    <option value="117">Kuwait</option>
                                                    <option value="118">Kyrgyzstan</option>
                                                    <option value="119">Laos</option>
                                                    <option value="120">Latvia</option>
                                                    <option value="121">Lebanon</option>
                                                    <option value="122">Lesotho</option>
                                                    <option value="123">Liberia</option>
                                                    <option value="124">Libya</option>
                                                    <option value="125">Liechtenstein
                                                    </option>
                                                    <option value="126">Lithuania</option>
                                                    <option value="127">Luxembourg</option>
                                                    <option value="128">Macau S.A.R.
                                                    </option>
                                                    <option value="129">Macedonia</option>
                                                    <option value="130">Madagascar</option>
                                                    <option value="131">Malawi</option>
                                                    <option value="132">Malaysia</option>
                                                    <option value="133">Maldives</option>
                                                    <option value="134">Mali</option>
                                                    <option value="135">Malta</option>
                                                    <option value="136">Man (Isle of)
                                                    </option>
                                                    <option value="137">Marshall Islands
                                                    </option>
                                                    <option value="138">Martinique</option>
                                                    <option value="139">Mauritania</option>
                                                    <option value="140">Mauritius</option>
                                                    <option value="141">Mayotte</option>
                                                    <option value="142">Mexico</option>
                                                    <option value="143">Micronesia</option>
                                                    <option value="144">Moldova</option>
                                                    <option value="145">Monaco</option>
                                                    <option value="146">Mongolia</option>
                                                    <option value="147">Montserrat</option>
                                                    <option value="148">Morocco</option>
                                                    <option value="149">Mozambique</option>
                                                    <option value="150">Myanmar</option>
                                                    <option value="151">Namibia</option>
                                                    <option value="152">Nauru</option>
                                                    <option value="153">Nepal</option>
                                                    <option value="154">Netherlands Antilles
                                                    </option>
                                                    <option value="155">Netherlands The
                                                    </option>
                                                    <option value="156">New Caledonia
                                                    </option>
                                                    <option value="157">New Zealand</option>
                                                    <option value="158">Nicaragua</option>
                                                    <option value="159">Niger</option>
                                                    <option value="160">Nigeria</option>
                                                    <option value="161">Niue</option>
                                                    <option value="162">Norfolk Island
                                                    </option>
                                                    <option value="163">Northern Mariana
                                                        Islands
                                                    </option>
                                                    <option value="164">Norway</option>
                                                    <option value="165">Oman</option>
                                                    <option value="166">Pakistan</option>
                                                    <option value="167">Palau</option>
                                                    <option value="168">Palestinian
                                                        Territory
                                                        Occupied</option>
                                                    <option value="169">Panama</option>
                                                    <option value="170">Papua new Guinea
                                                    </option>
                                                    <option value="171">Paraguay</option>
                                                    <option value="172">Peru</option>
                                                    <option value="173">Philippines</option>
                                                    <option value="174">Pitcairn Island
                                                    </option>
                                                    <option value="175">Poland</option>
                                                    <option value="176">Portugal</option>
                                                    <option value="177">Puerto Rico</option>
                                                    <option value="178">Qatar</option>
                                                    <option value="179">Reunion</option>
                                                    <option value="180">Romania</option>
                                                    <option value="181">Russia</option>
                                                    <option value="182">Rwanda</option>
                                                    <option value="183">Saint Helena
                                                    </option>
                                                    <option value="184">Saint Kitts And
                                                        Nevis
                                                    </option>
                                                    <option value="185">Saint Lucia</option>
                                                    <option value="186">Saint Pierre and
                                                        Miquelon
                                                    </option>
                                                    <option value="187">Saint Vincent And
                                                        The
                                                        Grenadines</option>
                                                    <option value="188">Samoa</option>
                                                    <option value="189">San Marino</option>
                                                    <option value="190">Sao Tome and
                                                        Principe
                                                    </option>
                                                    <option value="191">Saudi Arabia
                                                    </option>
                                                    <option value="192">Senegal</option>
                                                    <option value="193">Serbia</option>
                                                    <option value="194">Seychelles</option>
                                                    <option value="195">Sierra Leone
                                                    </option>
                                                    <option value="196">Singapore</option>
                                                    <option value="197">Slovakia</option>
                                                    <option value="198">Slovenia</option>
                                                    <option value="199">Smaller Territories
                                                        of the
                                                        UK</option>
                                                    <option value="200">Solomon Islands
                                                    </option>
                                                    <option value="201">Somalia</option>
                                                    <option value="202">South Africa
                                                    </option>
                                                    <option value="203">South Georgia
                                                    </option>
                                                    <option value="204">South Sudan</option>
                                                    <option value="205">Spain</option>
                                                    <option value="206">Sri Lanka</option>
                                                    <option value="207">Sudan</option>
                                                    <option value="208">Suriname</option>
                                                    <option value="209">Svalbard And Jan
                                                        Mayen
                                                        Islands</option>
                                                    <option value="210">Swaziland</option>
                                                    <option value="211">Sweden</option>
                                                    <option value="212">Switzerland</option>
                                                    <option value="213">Syria</option>
                                                    <option value="214">Taiwan</option>
                                                    <option value="215">Tajikistan</option>
                                                    <option value="216">Tanzania</option>
                                                    <option value="217">Thailand</option>
                                                    <option value="218">Togo</option>
                                                    <option value="219">Tokelau</option>
                                                    <option value="220">Tonga</option>
                                                    <option value="221">Trinidad And Tobago
                                                    </option>
                                                    <option value="222">Tunisia</option>
                                                    <option value="223">Turkey</option>
                                                    <option value="224">Turkmenistan
                                                    </option>
                                                    <option value="225">Turks And Caicos
                                                        Islands
                                                    </option>
                                                    <option value="226">Tuvalu</option>
                                                    <option value="227">Uganda</option>
                                                    <option value="228">Ukraine</option>
                                                    <option value="229">United Arab Emirates
                                                    </option>
                                                    <option value="230">United Kingdom
                                                    </option>
                                                    <option value="231">United States
                                                    </option>
                                                    <option value="232">United States Minor
                                                        Outlying
                                                        Islands</option>
                                                    <option value="233">Uruguay</option>
                                                    <option value="234">Uzbekistan</option>
                                                    <option value="235">Vanuatu</option>
                                                    <option value="236">Vatican City State
                                                        (Holy
                                                        See)</option>
                                                    <option value="237">Venezuela</option>
                                                    <option value="238">Vietnam</option>
                                                    <option value="239">Virgin Islands
                                                        (British)
                                                    </option>
                                                    <option value="240">Virgin Islands (US)
                                                    </option>
                                                    <option value="241">Wallis And Futuna
                                                        Islands
                                                    </option>
                                                    <option value="242">Western Sahara
                                                    </option>
                                                    <option value="243">Yemen</option>
                                                    <option value="244">Yugoslavia</option>
                                                    <option value="245">Zambia</option>
                                                    <option value="246">Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-3">
                                            <div class="mb-3">
                                                <label class="form-label">State / Province</label>
                                                <select class="form-control drop-select">
                                                    <option>Select State / Province</option>
                                                    <option value="42"> Badakhshan </option>
                                                    <option value="43"> Badgis </option>
                                                    <option value="44"> Baglan </option>
                                                    <option value="45"> Balkh </option>
                                                    <option value="46"> Bamiyan </option>
                                                    <option value="47"> Farah </option>
                                                    <option value="48"> Faryab </option>
                                                    <option value="49"> Gawr </option>
                                                    <option value="50"> Gazni </option>
                                                    <option value="51"> Herat </option>
                                                    <option value="52"> Hilmand </option>
                                                    <option value="53"> Jawzjan </option>
                                                    <option value="54"> Kabul </option>
                                                    <option value="55"> Kapisa </option>
                                                    <option value="56"> Khawst </option>
                                                    <option value="57"> Kunar </option>
                                                    <option value="58"> Lagman </option>
                                                    <option value="59"> Lawghar </option>
                                                    <option value="60"> Nangarhar </option>
                                                    <option value="61"> Nimruz </option>
                                                    <option value="62"> Nuristan </option>
                                                    <option value="63"> Paktika </option>
                                                    <option value="64"> Paktiya </option>
                                                    <option value="65"> Parwan </option>
                                                    <option value="66"> Qandahar </option>
                                                    <option value="67"> Qunduz </option>
                                                    <option value="68"> Samangan </option>
                                                    <option value="69"> Sar-e Pul </option>
                                                    <option value="70"> Takhar </option>
                                                    <option value="71"> Uruzgan </option>
                                                    <option value="72"> Wardag </option>
                                                    <option value="73"> Zabul </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">City</label>
                                                <select class="form-control drop-select">
                                                    <option>Select city</option>
                                                    <option value="42"> Badakhshan </option>
                                                    <option value="43"> Badgis </option>
                                                    <option value="44"> Baglan </option>
                                                    <option value="45"> Balkh </option>
                                                    <option value="46"> Bamiyan </option>
                                                    <option value="47"> Farah </option>
                                                    <option value="48"> Faryab </option>
                                                    <option value="49"> Gawr </option>
                                                    <option value="50"> Gazni </option>
                                                    <option value="51"> Herat </option>
                                                    <option value="52"> Hilmand </option>
                                                    <option value="53"> Jawzjan </option>
                                                    <option value="54"> Kabul </option>
                                                    <option value="55"> Kapisa </option>
                                                    <option value="56"> Khawst </option>
                                                    <option value="57"> Kunar </option>
                                                    <option value="58"> Lagman </option>
                                                    <option value="59"> Lawghar </option>
                                                    <option value="60"> Nangarhar </option>
                                                    <option value="61"> Nimruz </option>
                                                    <option value="62"> Nuristan </option>
                                                    <option value="63"> Paktika </option>
                                                    <option value="64"> Paktiya </option>
                                                    <option value="65"> Parwan </option>
                                                    <option value="66"> Qandahar </option>
                                                    <option value="67"> Qunduz </option>
                                                    <option value="68"> Samangan </option>
                                                    <option value="69"> Sar-e Pul </option>
                                                    <option value="70"> Takhar </option>
                                                    <option value="71"> Uruzgan </option>
                                                    <option value="72"> Wardag </option>
                                                    <option value="73"> Zabul </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Postal Code / Zip Code</label>
                                                <input type="text" value="" class="form-control"
                                                    placeholder="Postal Code / Zip Code">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Street Address</label>
                                                <input type="text" value="" class="form-control"
                                                    placeholder="Street Address">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Additional Details <span>(optional)</span>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-3">
                                            <div class="mb-3">
                                                <label class="form-label">Business Alias (Nick Name)</label>
                                                <input type="text" value="" class="form-control"
                                                    placeholder="Business Alias">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-3">
                                            <div class="mb-3">
                                                <label class="form-label">Unique Key</label>
                                                <input type="text" value="" class="form-control"
                                                    placeholder="1691741062868">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input type="mail" value="" class="form-control" placeholder="Email">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                        id="exampleRadios1" value="option1">
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Add Shipping Details
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Phone</label>
                                                <input type="phone" value="" class="form-control" placeholder="phone">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="exampleRadios"
                                                        id="exampleRadios1" value="option1">
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Add Shipping Details
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="mb-3 common-bar w-100">
                                                <div class="add-feild-wraps">
                                                    <input type="text" class="form-control  drop-select"
                                                        placeholder="Select any Custom field">
                                                    <div class="drop-lsit">
                                                        <ul>
                                                            <li><a href="#"></a></li>
                                                            <li>
                                                                <div class="no-option">
                                                                    <p>No options</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="add-fieldss">
                                                            <a class="common-bar-btn" data-bs-toggle="modal"
                                                                data-bs-target="#add-feilds">Add New Custom
                                                                Fields</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="add-field">
                                                <button type="button"> <i class="fas fa-plus-square"></i>Add
                                                    Custom Field</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <form class="mt-3 mb-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="exampleRadios"
                                        id="exampleRadios1" value="option1">
                                    <label class="form-check-label" for="exampleRadios1">
                                        Update current changes for all existing invoices of this business.
                                    </label>
                                </div>
                                <button type="button" class="save-btn" data-bs-dismiss="modal">Save</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- change due date modal -->
    <div class="modal fade common-modal" id="add-feilds" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="heading">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Custom Field</h1>
                        <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <img src="assets/image/close.png">
                        </button>
                    </div>
                    <hr class="cstm-line">
                    <form>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                <div class="mb-3">
                                    <label class="form-label">Field name</label>
                                    <input type="text" value="" class="form-control"
                                        placeholder="Business Name (Required)">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="mb-3">
                                    <label class="form-label">Field Type</label>
                                    <select class="form-control drop-select">
                                        <option>Select Field Type</option>
                                        <option>Single Line Text</option>
                                        <option>Multi Line Text</option>
                                        <option>Tax</option>
                                        <option>Number</option>
                                        <option>Date</option>
                                        <option>Addres</option>
                                        <option>Currenay</option>
                                        <option>Additio</option>
                                        <option>Sinalo-colact: Radio</option>
                                        <option>Single Select Dropdown</option>
                                        <option>Sele</option>
                                        <option>Multi Select Dropdown</option>
                                        <option>Boolean</option>
                                        <option>fIrm</option>
                                        <option>Email</option>
                                        <option>Addres</option>
                                        <option>Phone</option>
                                        <option>URL</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="mb-3">
                                    <label class="form-label">Label</label>
                                    <input type="text" value="" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="mb-3">
                                    <button type="button" class="save-btn" data-bs-dismiss="modal">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade common-modal" id="addshipping-dtl" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="heading">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Shipping Detail</h1>
                        <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                            <img src="assets/image/close.png">
                        </button>
                    </div>
                    <hr class="cstm-line">
                    <form>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                <div class="mb-3">
                                    <label class="form-label"><span class="astric inside-label">*</span>Name</label>
                                    <input type="text" value="" class="form-control"
                                        placeholder="Business Name (Required)">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="mb-3">
                                    <label class="form-label">Country<span class="astric inside-label">*</span></label>
                                    <select class="form-control drop-select">
                                        <option value="">Select Country</option>
                                        <option value="1">Afghanistan</option>
                                        <option value="2">Albania</option>
                                        <option value="3">Algeria</option>
                                        <option value="4">American Samoa
                                        </option>
                                        <option value="5">Andorra</option>
                                        <option value="6">Angola</option>
                                        <option value="7">Anguilla</option>
                                        <option value="8">Antarctica</option>
                                        <option value="9">Antigua And Barbuda
                                        </option>
                                        <option value="10">Argentina</option>
                                        <option value="11">Armenia</option>
                                        <option value="12">Aruba</option>
                                        <option value="13">Australia</option>
                                        <option value="14">Austria</option>
                                        <option value="15">Azerbaijan</option>
                                        <option value="16">Bahamas The</option>
                                        <option value="17">Bahrain</option>
                                        <option value="18">Bangladesh</option>
                                        <option value="19">Barbados</option>
                                        <option value="20">Belarus</option>
                                        <option value="21">Belgium</option>
                                        <option value="22">Belize</option>
                                        <option value="23">Benin</option>
                                        <option value="24">Bermuda</option>
                                        <option value="25">Bhutan</option>
                                        <option value="26">Bolivia</option>
                                        <option value="27">Bosnia and
                                            Herzegovina
                                        </option>
                                        <option value="28">Botswana</option>
                                        <option value="29">Bouvet Island
                                        </option>
                                        <option value="30">Brazil</option>
                                        <option value="31">British Indian Ocean
                                            Territory</option>
                                        <option value="32">Brunei</option>
                                        <option value="33">Bulgaria</option>
                                        <option value="34">Burkina Faso</option>
                                        <option value="35">Burundi</option>
                                        <option value="36">Cambodia</option>
                                        <option value="37">Cameroon</option>
                                        <option value="38">Canada</option>
                                        <option value="39">Cape Verde</option>
                                        <option value="40">Cayman Islands
                                        </option>
                                        <option value="41">Central African
                                            Republic
                                        </option>
                                        <option value="42">Chad</option>
                                        <option value="43">Chile</option>
                                        <option value="44">China</option>
                                        <option value="45">Christmas Island
                                        </option>
                                        <option value="46">Cocos (Keeling)
                                            Islands
                                        </option>
                                        <option value="47">Colombia</option>
                                        <option value="48">Comoros</option>
                                        <option value="49">Republic Of The Congo
                                        </option>
                                        <option value="50">Democratic Republic
                                            Of The
                                            Congo</option>
                                        <option value="51">Cook Islands</option>
                                        <option value="52">Costa Rica</option>
                                        <option value="53">Cote D'Ivoire (Ivory
                                            Coast)
                                        </option>
                                        <option value="54">Croatia (Hrvatska)
                                        </option>
                                        <option value="55">Cuba</option>
                                        <option value="56">Cyprus</option>
                                        <option value="57">Czech Republic
                                        </option>
                                        <option value="58">Denmark</option>
                                        <option value="59">Djibouti</option>
                                        <option value="60">Dominica</option>
                                        <option value="61">Dominican Republic
                                        </option>
                                        <option value="62">East Timor</option>
                                        <option value="63">Ecuador</option>
                                        <option value="64">Egypt</option>
                                        <option value="65">El Salvador</option>
                                        <option value="66">Equatorial Guinea
                                        </option>
                                        <option value="67">Eritrea</option>
                                        <option value="68">Estonia</option>
                                        <option value="69">Ethiopia</option>
                                        <option value="70">External Territories
                                            of
                                            Australia</option>
                                        <option value="71">Falkland Islands
                                        </option>
                                        <option value="72">Faroe Islands
                                        </option>
                                        <option value="73">Fiji Islands</option>
                                        <option value="74">Finland</option>
                                        <option value="75">France</option>
                                        <option value="76">French Guiana
                                        </option>
                                        <option value="77">French Polynesia
                                        </option>
                                        <option value="78">French Southern
                                            Territories
                                        </option>
                                        <option value="79">Gabon</option>
                                        <option value="80">Gambia The</option>
                                        <option value="81">Georgia</option>
                                        <option value="82">Germany</option>
                                        <option value="83">Ghana</option>
                                        <option value="84">Gibraltar</option>
                                        <option value="85">Greece</option>
                                        <option value="86">Greenland</option>
                                        <option value="87">Grenada</option>
                                        <option value="88">Guadeloupe</option>
                                        <option value="89">Guam</option>
                                        <option value="90">Guatemala</option>
                                        <option value="91">Guernsey and Alderney
                                        </option>
                                        <option value="92">Guinea</option>
                                        <option value="93">Guinea-Bissau
                                        </option>
                                        <option value="94">Guyana</option>
                                        <option value="95">Haiti</option>
                                        <option value="96">Heard and McDonald
                                            Islands
                                        </option>
                                        <option value="97">Honduras</option>
                                        <option value="98">Hong Kong S.A.R.
                                        </option>
                                        <option value="99">Hungary</option>
                                        <option value="100">Iceland</option>
                                        <option value="101">India</option>
                                        <option value="102">Indonesia</option>
                                        <option value="103">Iran</option>
                                        <option value="104">Iraq</option>
                                        <option value="105">Ireland</option>
                                        <option value="106">Israel</option>
                                        <option value="107">Italy</option>
                                        <option value="108">Jamaica</option>
                                        <option value="109">Japan</option>
                                        <option value="110">Jersey</option>
                                        <option value="111">Jordan</option>
                                        <option value="112">Kazakhstan</option>
                                        <option value="113">Kenya</option>
                                        <option value="114">Kiribati</option>
                                        <option value="115">Korea North</option>
                                        <option value="116">Korea South</option>
                                        <option value="117">Kuwait</option>
                                        <option value="118">Kyrgyzstan</option>
                                        <option value="119">Laos</option>
                                        <option value="120">Latvia</option>
                                        <option value="121">Lebanon</option>
                                        <option value="122">Lesotho</option>
                                        <option value="123">Liberia</option>
                                        <option value="124">Libya</option>
                                        <option value="125">Liechtenstein
                                        </option>
                                        <option value="126">Lithuania</option>
                                        <option value="127">Luxembourg</option>
                                        <option value="128">Macau S.A.R.
                                        </option>
                                        <option value="129">Macedonia</option>
                                        <option value="130">Madagascar</option>
                                        <option value="131">Malawi</option>
                                        <option value="132">Malaysia</option>
                                        <option value="133">Maldives</option>
                                        <option value="134">Mali</option>
                                        <option value="135">Malta</option>
                                        <option value="136">Man (Isle of)
                                        </option>
                                        <option value="137">Marshall Islands
                                        </option>
                                        <option value="138">Martinique</option>
                                        <option value="139">Mauritania</option>
                                        <option value="140">Mauritius</option>
                                        <option value="141">Mayotte</option>
                                        <option value="142">Mexico</option>
                                        <option value="143">Micronesia</option>
                                        <option value="144">Moldova</option>
                                        <option value="145">Monaco</option>
                                        <option value="146">Mongolia</option>
                                        <option value="147">Montserrat</option>
                                        <option value="148">Morocco</option>
                                        <option value="149">Mozambique</option>
                                        <option value="150">Myanmar</option>
                                        <option value="151">Namibia</option>
                                        <option value="152">Nauru</option>
                                        <option value="153">Nepal</option>
                                        <option value="154">Netherlands Antilles
                                        </option>
                                        <option value="155">Netherlands The
                                        </option>
                                        <option value="156">New Caledonia
                                        </option>
                                        <option value="157">New Zealand</option>
                                        <option value="158">Nicaragua</option>
                                        <option value="159">Niger</option>
                                        <option value="160">Nigeria</option>
                                        <option value="161">Niue</option>
                                        <option value="162">Norfolk Island
                                        </option>
                                        <option value="163">Northern Mariana
                                            Islands
                                        </option>
                                        <option value="164">Norway</option>
                                        <option value="165">Oman</option>
                                        <option value="166">Pakistan</option>
                                        <option value="167">Palau</option>
                                        <option value="168">Palestinian
                                            Territory
                                            Occupied</option>
                                        <option value="169">Panama</option>
                                        <option value="170">Papua new Guinea
                                        </option>
                                        <option value="171">Paraguay</option>
                                        <option value="172">Peru</option>
                                        <option value="173">Philippines</option>
                                        <option value="174">Pitcairn Island
                                        </option>
                                        <option value="175">Poland</option>
                                        <option value="176">Portugal</option>
                                        <option value="177">Puerto Rico</option>
                                        <option value="178">Qatar</option>
                                        <option value="179">Reunion</option>
                                        <option value="180">Romania</option>
                                        <option value="181">Russia</option>
                                        <option value="182">Rwanda</option>
                                        <option value="183">Saint Helena
                                        </option>
                                        <option value="184">Saint Kitts And
                                            Nevis
                                        </option>
                                        <option value="185">Saint Lucia</option>
                                        <option value="186">Saint Pierre and
                                            Miquelon
                                        </option>
                                        <option value="187">Saint Vincent And
                                            The
                                            Grenadines</option>
                                        <option value="188">Samoa</option>
                                        <option value="189">San Marino</option>
                                        <option value="190">Sao Tome and
                                            Principe
                                        </option>
                                        <option value="191">Saudi Arabia
                                        </option>
                                        <option value="192">Senegal</option>
                                        <option value="193">Serbia</option>
                                        <option value="194">Seychelles</option>
                                        <option value="195">Sierra Leone
                                        </option>
                                        <option value="196">Singapore</option>
                                        <option value="197">Slovakia</option>
                                        <option value="198">Slovenia</option>
                                        <option value="199">Smaller Territories
                                            of the
                                            UK</option>
                                        <option value="200">Solomon Islands
                                        </option>
                                        <option value="201">Somalia</option>
                                        <option value="202">South Africa
                                        </option>
                                        <option value="203">South Georgia
                                        </option>
                                        <option value="204">South Sudan</option>
                                        <option value="205">Spain</option>
                                        <option value="206">Sri Lanka</option>
                                        <option value="207">Sudan</option>
                                        <option value="208">Suriname</option>
                                        <option value="209">Svalbard And Jan
                                            Mayen
                                            Islands</option>
                                        <option value="210">Swaziland</option>
                                        <option value="211">Sweden</option>
                                        <option value="212">Switzerland</option>
                                        <option value="213">Syria</option>
                                        <option value="214">Taiwan</option>
                                        <option value="215">Tajikistan</option>
                                        <option value="216">Tanzania</option>
                                        <option value="217">Thailand</option>
                                        <option value="218">Togo</option>
                                        <option value="219">Tokelau</option>
                                        <option value="220">Tonga</option>
                                        <option value="221">Trinidad And Tobago
                                        </option>
                                        <option value="222">Tunisia</option>
                                        <option value="223">Turkey</option>
                                        <option value="224">Turkmenistan
                                        </option>
                                        <option value="225">Turks And Caicos
                                            Islands
                                        </option>
                                        <option value="226">Tuvalu</option>
                                        <option value="227">Uganda</option>
                                        <option value="228">Ukraine</option>
                                        <option value="229">United Arab Emirates
                                        </option>
                                        <option value="230">United Kingdom
                                        </option>
                                        <option value="231">United States
                                        </option>
                                        <option value="232">United States Minor
                                            Outlying
                                            Islands</option>
                                        <option value="233">Uruguay</option>
                                        <option value="234">Uzbekistan</option>
                                        <option value="235">Vanuatu</option>
                                        <option value="236">Vatican City State
                                            (Holy
                                            See)</option>
                                        <option value="237">Venezuela</option>
                                        <option value="238">Vietnam</option>
                                        <option value="239">Virgin Islands
                                            (British)
                                        </option>
                                        <option value="240">Virgin Islands (US)
                                        </option>
                                        <option value="241">Wallis And Futuna
                                            Islands
                                        </option>
                                        <option value="242">Western Sahara
                                        </option>
                                        <option value="243">Yemen</option>
                                        <option value="244">Yugoslavia</option>
                                        <option value="245">Zambia</option>
                                        <option value="246">Zimbabwe</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <select class="form-control drop-select">
                                    <option>Select state</option>
                                    <option value="42"> Badakhshan
                                    </option>
                                    <option value="43"> Badgis </option>
                                    <option value="44"> Baglan </option>
                                    <option value="45"> Balkh </option>
                                    <option value="46"> Bamiyan
                                    </option>
                                    <option value="47"> Farah </option>
                                    <option value="48"> Faryab </option>
                                    <option value="49"> Gawr </option>
                                    <option value="50"> Gazni </option>
                                    <option value="51"> Herat </option>
                                    <option value="52"> Hilmand
                                    </option>
                                    <option value="53"> Jawzjan
                                    </option>
                                    <option value="54"> Kabul </option>
                                    <option value="55"> Kapisa </option>
                                    <option value="56"> Khawst </option>
                                    <option value="57"> Kunar </option>
                                    <option value="58"> Lagman </option>
                                    <option value="59"> Lawghar
                                    </option>
                                    <option value="60"> Nangarhar
                                    </option>
                                    <option value="61"> Nimruz </option>
                                    <option value="62"> Nuristan
                                    </option>
                                    <option value="63"> Paktika
                                    </option>
                                    <option value="64"> Paktiya
                                    </option>
                                    <option value="65"> Parwan </option>
                                    <option value="66"> Qandahar
                                    </option>
                                    <option value="67"> Qunduz </option>
                                    <option value="68"> Samangan
                                    </option>
                                    <option value="69"> Sar-e Pul
                                    </option>
                                    <option value="70"> Takhar </option>
                                    <option value="71"> Uruzgan
                                    </option>
                                    <option value="72"> Wardag </option>
                                    <option value="73"> Zabul </option>
                                </select>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <label class="form-label">City</label>
                                <select class="form-control drop-select">
                                    <option>Select city</option>
                                    <option value="42" selected>Kerala</option>
                                    <option value="43"> Badgis </option>
                                    <option value="44"> Baglan </option>
                                    <option value="45"> Balkh </option>
                                    <option value="46"> Bamiyan </option>
                                    <option value="47"> Farah </option>
                                    <option value="48"> Faryab </option>
                                    <option value="49"> Gawr </option>
                                    <option value="50"> Gazni </option>
                                    <option value="51"> Herat </option>
                                    <option value="52"> Hilmand </option>
                                    <option value="53"> Jawzjan </option>
                                    <option value="54"> Kabul </option>
                                    <option value="55"> Kapisa </option>
                                    <option value="56"> Khawst </option>
                                    <option value="57"> Kunar </option>
                                    <option value="58"> Lagman </option>
                                    <option value="59"> Lawghar </option>
                                    <option value="60"> Nangarhar </option>
                                    <option value="61"> Nimruz </option>
                                    <option value="62"> Nuristan </option>
                                    <option value="63"> Paktika </option>
                                    <option value="64"> Paktiya </option>
                                    <option value="65"> Parwan </option>
                                    <option value="66"> Qandahar </option>
                                    <option value="67"> Qunduz </option>
                                    <option value="68"> Samangan </option>
                                    <option value="69"> Sar-e Pul </option>
                                    <option value="70"> Takhar </option>
                                    <option value="71"> Uruzgan </option>
                                    <option value="72"> Wardag </option>
                                    <option value="73"> Zabul </option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="mb-3">
                                    <label class="form-label">Postal Code / Zip Code</label>
                                    <input type="text" value="" class="form-control"
                                        placeholder="Postal Code / Zip Code">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="mb-3">
                                    <label class="form-label">Street Address</label>
                                    <input type="text" value="" class="form-control" placeholder="Street Address">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="mb-3">
                                    <button type="button" class="save-btn" data-bs-dismiss="modal">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
@include('invoice.main.js')
<script>
// cropperjs


document.addEventListener("DOMContentLoaded", function () {
    const imageInput = document.getElementById("imageInput");
    const imageContainer = document.getElementById("imageContainer");
    const uploadedImage = document.getElementById("uploadedImage");
    const cropButton = document.getElementById("cropButton");
    let cropper;

    imageInput.addEventListener("change", function (event) {
        const file = event.target.files[0];
        const reader = new FileReader();

        reader.onload = function (e) {
            uploadedImage.src = e.target.result;
            imageContainer.style.display = "block";
            cropper = new Cropper(uploadedImage, {
                aspectRatio: 1, // You can adjust this according to your needs
                viewMode: 1,
            });
        };

        reader.readAsDataURL(file);
    });

    cropButton.addEventListener("click", function () {
        const croppedCanvas = cropper.getCroppedCanvas();
        // You can now use the croppedCanvas for further processing or uploading
    });
});



    $("#multiple").select2({
        placeholder: "Start typing to search or add a new category",
        allowClear: true
    });
</script>
<script>
    AOS.init();

    $(document).ready(function () {
        $("#appendButton").click(function () {
            var newData = '<li><div class="input-flds"><div class="item-list first-item-list"><span class="itemname head-list">Item</span><input type="text" class="form-control itemname" placeholder="Item Name"></div><div class="item-list"><span class="head-list">GST Rate</span><div class="cstm-input"><input type="text" class="form-control gst-rate" placeholder=""><span>%</span></div></div><div class="item-list"><span class="head-list">Quantity</span><div class="cstm-input"><input type="number" class="form-control quantity" placeholder=""></div></div><div class="item-list"><span class="head-list">Rate</span><div class="cstm-input"><input type="number" class="form-control rate" placeholder=""><span>$</span></div></div><div class="item-list"><span class="head-list">Amount</span><div class="cstm-input"><input type="number" class="form-control amount" placeholder=""><span>$</span></div></div><div class="item-list"><span class="head-list">IGST</span><div class="cstm-input"><input type="number" class="form-control igst" placeholder=""><span>$</span></div></div><div class="item-list"><span class="head-list">TOTAL</span><div class="cstm-input"><input type="number" class="form-control total" placeholder=""><span>$</span></div></div><div class="item-list"><span class="head-list"></span><a href="" class="cross_icon"><i class="fas fa-times"></i></a></div></div><div class="descri-thumb-row"><div class="add-field description"><button type="button"><i class="fas fa-plus-square"></i>Add Description</button><textarea class="form-control" style="height:200px"></textarea></div><div class="add-field thumbnail"><button type="button"><i class="fas fa-image"></i>Add Thumbnail</button><div class="uploadFile"><div class="upload-wrap"><i class="fas fa-plus-square"></i><p class="upload-files">Upload Thumbnail</p></div><input type="file" class="inputfile form-control" name="file"></div></div><div class="add-field new-line"><button type="button" id="appendButton"><i class="fas fa-plus-square"></i>Add new Line</button></div></div></li>';
            $("#myContainer").append(newData);
        });
    });
</script>

<!-- <script type="text/javascript">
    $('.table-items ul li').click(function () {
        var appends = '<li><div class="input-row"><input type="text" class="form-control itemname" placeholder="Item Name"><div class="cstm-input"><input type="text" class="form-control gst-rate" placeholder=""><span>%</span></div><div class="cstm-input"><input type="text" class="form-control quantity" placeholder=""></div><div class="cstm-input"><input type="text" class="form-control rate" placeholder=""><span>$</span></div><div class="cstm-input"><input type="text" class="form-control amount" placeholder=""><span>$</span></div><div class="cstm-input"><input type="text" class="form-control igst" placeholder=""><span>$</span></div><div class="cstm-input"><input type="text" class="form-control total" placeholder=""><span>$</span></div><a href="" class="cross_icon"><i class="fas fa-times"></i></a></div><div class="descri-thumb-row"><div class="add-field description"><button type="button"><i class="fas fa-plus-square"></i>Add Description</button><textarea class="form-control" style="height:200px"></textarea></div><div class="add-field thumbnail"><button type="button"><i class="fas fa-image"></i>Add Thumbnail</button><div class="uploadFile"><div class="upload-wrap"><i class="fas fa-plus-square"></i><p class="upload-files">Upload Thumbnail</p></div><input type="file" class="inputfile form-control" name="file"></div></div></div></li>'
        $(appends).insertAfter(".table-items ul > li:last-child");
    })
</script> -->


<script type="text/javascript">
    // $('.dates-detail ul .add-field button').click(function () {
    //     var appends = '<li><div class="label-wrap add-label-feild"><input type="text" class="form-control" value="Invoice No"></div><div class="input-wrap"><input type="text" class="form-control" value="Invoice No"></div></li>'
    //     $(appends).insertAfter(".dates-detail ul > li:last-child");
    // })
    $(document).ready(function () {
        $('.add-field button').click(function () {
            var labelWrap = '<div class="input-wrap"><input type="text" class="form-control" value="" placeholder="Extra column name"></div><span class="astric inside-label">*</span>';
            var inputWrap = '<div class="input-wrap"><input type="text" class="form-control" value="" placeholder="Fill it"></div>';
            var removeButton = '<i class="fas fa-times remove-field"></i>';

            var newItem = '<li>' + labelWrap + inputWrap + removeButton + '</li>';
            $('.dates-detail ul').append(newItem);
        });

        // Event delegation for dynamically added elements
        $('.dates-detail ul').on('click', '.remove-field', function () {
            $(this).closest('li').remove();
        });
    });



</script>

<script type="text/javascript">

    
    $('.add-field.thumbnail button').click(function (e) {
        $(".add-field.thumbnail").toggleClass("show-textarea");
        e.stopPropagation();
    });
    $('.add-field.description button').click(function (e) {
        $(".add-field.description").toggleClass("show-textarea");
        e.stopPropagation();
    });
    $('.save-btn').click(function (e) {
        $(".edit-address.filled-address.client-dtl-afterpop").toggleClass("show-input");
        $(".edit-address.client-pop-up").toggleClass("hide-heading");
        e.stopPropagation();
    });
    $('.add-field button').click(function (e) {
        $("div#addclientpop .common-bar").toggleClass("show-input");

        e.stopPropagation();
    });
    $('div#addbusinesspop .add-field button').click(function (e) {
        $(".brand-name-fld").toggleClass("show-input");
        $(".add-field").toggleClass("hide-heading");
        e.stopPropagation();
    });



    $('.add-feild-wraps input.form-control.drop-select').click(function (e) {
        $(this).next(".drop-lsit").toggleClass("show-input");
        e.stopPropagation();
    });
    $('.rol-options.invoiceoption .form-check-input.click').click(function (e) {
        $(".shipping-outer-wrap").toggleClass("show-input");
        e.stopPropagation();
    });
    $('.invoice-heading h2').click(function (e) {
        $(".invoice-heading h2").toggleClass("hide-heading");
        $(".invoice-heading input").toggleClass("show-input");
        e.stopPropagation();
    });
    $('.invoice-sub-heading button').click(function (e) {
        $(".invoice-sub-heading button").toggleClass("hide-heading");
        $(".invoice-sub-heading input").toggleClass("show-input");
        e.stopPropagation();
    });

    $(document).ready(function () {
        $('#fileInput').change(function () {
            var file = this.files[0];
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#previewImage').attr('src', e.target.result);
                $('#previewImage').show();
            };

            reader.readAsDataURL(file);
        });
    });

 

</script>

</html>