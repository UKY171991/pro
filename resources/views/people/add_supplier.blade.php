@extends('layouts')
@section('title', 'Dashboard Page')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0">{{ $title }}</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">{{ $title }}</li>
               </ol>
            </div>
            <!-- /.col -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <form class="form-horizontal" name="editSupplierForm" id="editSupplierForm" method="post" action="https://zivaansolutions.com/apps/pro/supplier/edit">
                  <div class="card card-info">
                     <div class="card-header">
                        <h3 class="card-title">Add Supplier</h3>
                     </div>
                     <div class="card-body">
                        <div class="form-group row">
                           <label for="inputEmail3" class="col-sm-2 col-form-label">Company Name<span class="text-danger">*</span></label>
                           <div class="col-sm-4">
                              <input type="text" name="company_name" value="" class="form-control form-control-sm field_validation" id="company_name" placeholder="">
                          </div>
                        </div>
                        <div class="form-group row">
                           <label for="inputPassword3" class="col-sm-2 col-form-label">
                           Registration Type<span class="text-danger">*</span>
                           </label>
                           <div class="col-sm-4">
                              <select class="form-control form-control-sm" name="gst_registration_type" id="">
                                 <option value="1">Registered</option>
                                 <option value="0" selected="" data-select2-id="12">Not Registered</option>
                                 <option value="2">Composite</option>
                              </select>
                              <span id="err_gst_registration_type" class="error invalid-feedback"></span>
                           </div>
                        </div>
                        
                        <div class="form-group row">
                           <label for="inputEmail3" class="col-sm-2 col-form-label">
                           Contact Person Name <span class="text-danger">*</span>
                           </label>
                           <div class="col-sm-4">
                              <input type="text" name="contact_person_name" value="" class="form-control form-control-sm field_validation" id="contact_person_name" placeholder="Contact Person Name"> 
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="inputEmail3" class="col-sm-2 col-form-label">
                           Contact Person Designation<span class="text-danger">*</span>
                           </label>
                           <div class="col-sm-4">
                              <input type="text" name="contact_person_designation" value="" class="form-control form-control-sm field_validation" id="contact_person_designation" placeholder="Contact Person Designation">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                           <div class="col-sm-4">
                              <input type="text" name="email" value="" class="form-control form-control-sm" id="email" placeholder="Email">
                              <span id="err_email" class="error invalid-feedback"></span>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="inputEmail3" class="col-sm-2 col-form-label">Phone<span class="text-danger">*</span></label>
                           <div class="col-sm-4">
                              <input type="text" name="phone" value="" class="form-control form-control-sm field_validation" id="phone" placeholder="Phone">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="inputEmail3" class="col-sm-2 col-form-label">Country<span class="text-danger">*</span></label>
                           <div class="col-sm-4">
                              <select class="form-control form-control-sm" name="country_id" id="country_id">
                                 <option value="1">
                                    Afghanistan                          
                                 </option>
                                 <option value="2">
                                    Albania                          
                                 </option>
                                 <option value="3">
                                    Algeria                          
                                 </option>
                                 <option value="4">
                                    American Samoa                          
                                 </option>
                                 <option value="5">
                                    Andorra                          
                                 </option>
                                 <option value="6">
                                    Angola                          
                                 </option>
                                 <option value="7">
                                    Anguilla                          
                                 </option>
                                 <option value="8">
                                    Antarctica                          
                                 </option>
                                 <option value="9">
                                    Antigua And Barbuda                          
                                 </option>
                                 <option value="10">
                                    Argentina                          
                                 </option>
                                 <option value="11">
                                    Armenia                          
                                 </option>
                                 <option value="12">
                                    Aruba                          
                                 </option>
                                 <option value="13">
                                    Australia                          
                                 </option>
                                 <option value="14">
                                    Austria                          
                                 </option>
                                 <option value="15">
                                    Azerbaijan                          
                                 </option>
                                 <option value="16">
                                    Bahamas The                          
                                 </option>
                                 <option value="17">
                                    Bahrain                          
                                 </option>
                                 <option value="18">
                                    Bangladesh                          
                                 </option>
                                 <option value="19">
                                    Barbados                          
                                 </option>
                                 <option value="20">
                                    Belarus                          
                                 </option>
                                 <option value="21">
                                    Belgium                          
                                 </option>
                                 <option value="22">
                                    Belize                          
                                 </option>
                                 <option value="23">
                                    Benin                          
                                 </option>
                                 <option value="24">
                                    Bermuda                          
                                 </option>
                                 <option value="25">
                                    Bhutan                          
                                 </option>
                                 <option value="26">
                                    Bolivia                          
                                 </option>
                                 <option value="27">
                                    Bosnia and Herzegovina                          
                                 </option>
                                 <option value="28">
                                    Botswana                          
                                 </option>
                                 <option value="29">
                                    Bouvet Island                          
                                 </option>
                                 <option value="30">
                                    Brazil                          
                                 </option>
                                 <option value="31">
                                    British Indian Ocean Territory                          
                                 </option>
                                 <option value="32">
                                    Brunei                          
                                 </option>
                                 <option value="33">
                                    Bulgaria                          
                                 </option>
                                 <option value="34">
                                    Burkina Faso                          
                                 </option>
                                 <option value="35">
                                    Burundi                          
                                 </option>
                                 <option value="36">
                                    Cambodia                          
                                 </option>
                                 <option value="37">
                                    Cameroon                          
                                 </option>
                                 <option value="38">
                                    Canada                          
                                 </option>
                                 <option value="39">
                                    Cape Verde                          
                                 </option>
                                 <option value="40">
                                    Cayman Islands                          
                                 </option>
                                 <option value="41">
                                    Central African Republic                          
                                 </option>
                                 <option value="42">
                                    Chad                          
                                 </option>
                                 <option value="43">
                                    Chile                          
                                 </option>
                                 <option value="44">
                                    China                          
                                 </option>
                                 <option value="45">
                                    Christmas Island                          
                                 </option>
                                 <option value="46">
                                    Cocos (Keeling) Islands                          
                                 </option>
                                 <option value="47">
                                    Colombia                          
                                 </option>
                                 <option value="48">
                                    Comoros                          
                                 </option>
                                 <option value="49">
                                    Congo                          
                                 </option>
                                 <option value="50">
                                    Congo The Democratic Republic Of The                          
                                 </option>
                                 <option value="51">
                                    Cook Islands                          
                                 </option>
                                 <option value="52">
                                    Costa Rica                          
                                 </option>
                                 <option value="53">
                                    Cote D'Ivoire (Ivory Coast)                          
                                 </option>
                                 <option value="54">
                                    Croatia (Hrvatska)                          
                                 </option>
                                 <option value="55">
                                    Cuba                          
                                 </option>
                                 <option value="56">
                                    Cyprus                          
                                 </option>
                                 <option value="57">
                                    Czech Republic                          
                                 </option>
                                 <option value="58">
                                    Denmark                          
                                 </option>
                                 <option value="59">
                                    Djibouti                          
                                 </option>
                                 <option value="60">
                                    Dominica                          
                                 </option>
                                 <option value="61">
                                    Dominican Republic                          
                                 </option>
                                 <option value="62">
                                    East Timor                          
                                 </option>
                                 <option value="63">
                                    Ecuador                          
                                 </option>
                                 <option value="64">
                                    Egypt                          
                                 </option>
                                 <option value="65">
                                    El Salvador                          
                                 </option>
                                 <option value="66">
                                    Equatorial Guinea                          
                                 </option>
                                 <option value="67">
                                    Eritrea                          
                                 </option>
                                 <option value="68">
                                    Estonia                          
                                 </option>
                                 <option value="69">
                                    Ethiopia                          
                                 </option>
                                 <option value="70">
                                    External Territories of Australia                          
                                 </option>
                                 <option value="71">
                                    Falkland Islands                          
                                 </option>
                                 <option value="72">
                                    Faroe Islands                          
                                 </option>
                                 <option value="73">
                                    Fiji Islands                          
                                 </option>
                                 <option value="74">
                                    Finland                          
                                 </option>
                                 <option value="75">
                                    France                          
                                 </option>
                                 <option value="76">
                                    French Guiana                          
                                 </option>
                                 <option value="77">
                                    French Polynesia                          
                                 </option>
                                 <option value="78">
                                    French Southern Territories                          
                                 </option>
                                 <option value="79">
                                    Gabon                          
                                 </option>
                                 <option value="80">
                                    Gambia The                          
                                 </option>
                                 <option value="81">
                                    Georgia                          
                                 </option>
                                 <option value="82">
                                    Germany                          
                                 </option>
                                 <option value="83">
                                    Ghana                          
                                 </option>
                                 <option value="84">
                                    Gibraltar                          
                                 </option>
                                 <option value="85">
                                    Greece                          
                                 </option>
                                 <option value="86">
                                    Greenland                          
                                 </option>
                                 <option value="87">
                                    Grenada                          
                                 </option>
                                 <option value="88">
                                    Guadeloupe                          
                                 </option>
                                 <option value="89">
                                    Guam                          
                                 </option>
                                 <option value="90">
                                    Guatemala                          
                                 </option>
                                 <option value="91">
                                    Guernsey and Alderney                          
                                 </option>
                                 <option value="92">
                                    Guinea                          
                                 </option>
                                 <option value="93">
                                    Guinea-Bissau                          
                                 </option>
                                 <option value="94">
                                    Guyana                          
                                 </option>
                                 <option value="95">
                                    Haiti                          
                                 </option>
                                 <option value="96">
                                    Heard and McDonald Islands                          
                                 </option>
                                 <option value="97">
                                    Honduras                          
                                 </option>
                                 <option value="98">
                                    Hong Kong S.A.R.                          
                                 </option>
                                 <option value="99">
                                    Hungary                          
                                 </option>
                                 <option value="100">
                                    Iceland                          
                                 </option>
                                 <option value="101" selected="" data-select2-id="259">
                                    India                          
                                 </option>
                                 <option value="102">
                                    Indonesia                          
                                 </option>
                                 <option value="103">
                                    Iran                          
                                 </option>
                                 <option value="104">
                                    Iraq                          
                                 </option>
                                 <option value="105">
                                    Ireland                          
                                 </option>
                                 <option value="106">
                                    Israel                          
                                 </option>
                                 <option value="107">
                                    Italy                          
                                 </option>
                                 <option value="108">
                                    Jamaica                          
                                 </option>
                                 <option value="109">
                                    Japan                          
                                 </option>
                                 <option value="110">
                                    Jersey                          
                                 </option>
                                 <option value="111">
                                    Jordan                          
                                 </option>
                                 <option value="112">
                                    Kazakhstan                          
                                 </option>
                                 <option value="113">
                                    Kenya                          
                                 </option>
                                 <option value="114">
                                    Kiribati                          
                                 </option>
                                 <option value="115">
                                    Korea North                          
                                 </option>
                                 <option value="116">
                                    Korea South                          
                                 </option>
                                 <option value="117">
                                    Kuwait                          
                                 </option>
                                 <option value="118">
                                    Kyrgyzstan                          
                                 </option>
                                 <option value="119">
                                    Laos                          
                                 </option>
                                 <option value="120">
                                    Latvia                          
                                 </option>
                                 <option value="121">
                                    Lebanon                          
                                 </option>
                                 <option value="122">
                                    Lesotho                          
                                 </option>
                                 <option value="123">
                                    Liberia                          
                                 </option>
                                 <option value="124">
                                    Libya                          
                                 </option>
                                 <option value="125">
                                    Liechtenstein                          
                                 </option>
                                 <option value="126">
                                    Lithuania                          
                                 </option>
                                 <option value="127">
                                    Luxembourg                          
                                 </option>
                                 <option value="128">
                                    Macau S.A.R.                          
                                 </option>
                                 <option value="129">
                                    Macedonia                          
                                 </option>
                                 <option value="130">
                                    Madagascar                          
                                 </option>
                                 <option value="131">
                                    Malawi                          
                                 </option>
                                 <option value="132">
                                    Malaysia                          
                                 </option>
                                 <option value="133">
                                    Maldives                          
                                 </option>
                                 <option value="134">
                                    Mali                          
                                 </option>
                                 <option value="135">
                                    Malta                          
                                 </option>
                                 <option value="136">
                                    Man (Isle of)                          
                                 </option>
                                 <option value="137">
                                    Marshall Islands                          
                                 </option>
                                 <option value="138">
                                    Martinique                          
                                 </option>
                                 <option value="139">
                                    Mauritania                          
                                 </option>
                                 <option value="140">
                                    Mauritius                          
                                 </option>
                                 <option value="141">
                                    Mayotte                          
                                 </option>
                                 <option value="142">
                                    Mexico                          
                                 </option>
                                 <option value="143">
                                    Micronesia                          
                                 </option>
                                 <option value="144">
                                    Moldova                          
                                 </option>
                                 <option value="145">
                                    Monaco                          
                                 </option>
                                 <option value="146">
                                    Mongolia                          
                                 </option>
                                 <option value="147">
                                    Montserrat                          
                                 </option>
                                 <option value="148">
                                    Morocco                          
                                 </option>
                                 <option value="149">
                                    Mozambique                          
                                 </option>
                                 <option value="150">
                                    Myanmar                          
                                 </option>
                                 <option value="151">
                                    Namibia                          
                                 </option>
                                 <option value="152">
                                    Nauru                          
                                 </option>
                                 <option value="153">
                                    Nepal                          
                                 </option>
                                 <option value="154">
                                    Netherlands Antilles                          
                                 </option>
                                 <option value="155">
                                    Netherlands The                          
                                 </option>
                                 <option value="156">
                                    New Caledonia                          
                                 </option>
                                 <option value="157">
                                    New Zealand                          
                                 </option>
                                 <option value="158">
                                    Nicaragua                          
                                 </option>
                                 <option value="159">
                                    Niger                          
                                 </option>
                                 <option value="160">
                                    Nigeria                          
                                 </option>
                                 <option value="161">
                                    Niue                          
                                 </option>
                                 <option value="162">
                                    Norfolk Island                          
                                 </option>
                                 <option value="163">
                                    Northern Mariana Islands                          
                                 </option>
                                 <option value="164">
                                    Norway                          
                                 </option>
                                 <option value="165">
                                    Oman                          
                                 </option>
                                 <option value="166">
                                    Pakistan                          
                                 </option>
                                 <option value="167">
                                    Palau                          
                                 </option>
                                 <option value="168">
                                    Palestinian Territory Occupied                          
                                 </option>
                                 <option value="169">
                                    Panama                          
                                 </option>
                                 <option value="170">
                                    Papua new Guinea                          
                                 </option>
                                 <option value="171">
                                    Paraguay                          
                                 </option>
                                 <option value="172">
                                    Peru                          
                                 </option>
                                 <option value="173">
                                    Philippines                          
                                 </option>
                                 <option value="174">
                                    Pitcairn Island                          
                                 </option>
                                 <option value="175">
                                    Poland                          
                                 </option>
                                 <option value="176">
                                    Portugal                          
                                 </option>
                                 <option value="177">
                                    Puerto Rico                          
                                 </option>
                                 <option value="178">
                                    Qatar                          
                                 </option>
                                 <option value="179">
                                    Reunion                          
                                 </option>
                                 <option value="180">
                                    Romania                          
                                 </option>
                                 <option value="181">
                                    Russia                          
                                 </option>
                                 <option value="182">
                                    Rwanda                          
                                 </option>
                                 <option value="183">
                                    Saint Helena                          
                                 </option>
                                 <option value="184">
                                    Saint Kitts And Nevis                          
                                 </option>
                                 <option value="185">
                                    Saint Lucia                          
                                 </option>
                                 <option value="186">
                                    Saint Pierre and Miquelon                          
                                 </option>
                                 <option value="187">
                                    Saint Vincent And The Grenadines                          
                                 </option>
                                 <option value="188">
                                    Samoa                          
                                 </option>
                                 <option value="189">
                                    San Marino                          
                                 </option>
                                 <option value="190">
                                    Sao Tome and Principe                          
                                 </option>
                                 <option value="191">
                                    Saudi Arabia                          
                                 </option>
                                 <option value="192">
                                    Senegal                          
                                 </option>
                                 <option value="193">
                                    Serbia                          
                                 </option>
                                 <option value="194">
                                    Seychelles                          
                                 </option>
                                 <option value="195">
                                    Sierra Leone                          
                                 </option>
                                 <option value="196">
                                    Singapore                          
                                 </option>
                                 <option value="197">
                                    Slovakia                          
                                 </option>
                                 <option value="198">
                                    Slovenia                          
                                 </option>
                                 <option value="199">
                                    Smaller Territories of the UK                          
                                 </option>
                                 <option value="200">
                                    Solomon Islands                          
                                 </option>
                                 <option value="201">
                                    Somalia                          
                                 </option>
                                 <option value="202">
                                    South Africa                          
                                 </option>
                                 <option value="203">
                                    South Georgia                          
                                 </option>
                                 <option value="204">
                                    South Sudan                          
                                 </option>
                                 <option value="205">
                                    Spain                          
                                 </option>
                                 <option value="206">
                                    Sri Lanka                          
                                 </option>
                                 <option value="207">
                                    Sudan                          
                                 </option>
                                 <option value="208">
                                    Suriname                          
                                 </option>
                                 <option value="209">
                                    Svalbard And Jan Mayen Islands                          
                                 </option>
                                 <option value="210">
                                    Swaziland                          
                                 </option>
                                 <option value="211">
                                    Sweden                          
                                 </option>
                                 <option value="212">
                                    Switzerland                          
                                 </option>
                                 <option value="213">
                                    Syria                          
                                 </option>
                                 <option value="214">
                                    Taiwan                          
                                 </option>
                                 <option value="215">
                                    Tajikistan                          
                                 </option>
                                 <option value="216">
                                    Tanzania                          
                                 </option>
                                 <option value="217">
                                    Thailand                          
                                 </option>
                                 <option value="218">
                                    Togo                          
                                 </option>
                                 <option value="219">
                                    Tokelau                          
                                 </option>
                                 <option value="220">
                                    Tonga                          
                                 </option>
                                 <option value="221">
                                    Trinidad And Tobago                          
                                 </option>
                                 <option value="222">
                                    Tunisia                          
                                 </option>
                                 <option value="223">
                                    Turkey                          
                                 </option>
                                 <option value="224">
                                    Turkmenistan                          
                                 </option>
                                 <option value="225">
                                    Turks And Caicos Islands                          
                                 </option>
                                 <option value="226">
                                    Tuvalu                          
                                 </option>
                                 <option value="227">
                                    Uganda                          
                                 </option>
                                 <option value="228">
                                    Ukraine                          
                                 </option>
                                 <option value="229">
                                    United Arab Emirates                          
                                 </option>
                                 <option value="230">
                                    United Kingdom                          
                                 </option>
                                 <option value="231">
                                    United States                          
                                 </option>
                                 <option value="232">
                                    United States Minor Outlying Islands                          
                                 </option>
                                 <option value="233">
                                    Uruguay                          
                                 </option>
                                 <option value="234">
                                    Uzbekistan                          
                                 </option>
                                 <option value="235">
                                    Vanuatu                          
                                 </option>
                                 <option value="236">
                                    Vatican City State (Holy See)                          
                                 </option>
                                 <option value="237">
                                    Venezuela                          
                                 </option>
                                 <option value="238">
                                    Vietnam                          
                                 </option>
                                 <option value="239">
                                    Virgin Islands (British)                          
                                 </option>
                                 <option value="240">
                                    Virgin Islands (US)                          
                                 </option>
                                 <option value="241">
                                    Wallis And Futuna Islands                          
                                 </option>
                                 <option value="242">
                                    Western Sahara                          
                                 </option>
                                 <option value="243">
                                    Yemen                          
                                 </option>
                                 <option value="244">
                                    Yugoslavia                          
                                 </option>
                                 <option value="245">
                                    Zambia                          
                                 </option>
                                 <option value="246">
                                    Zimbabwe                          
                                 </option>
                              </select>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="inputEmail3" class="col-sm-2 col-form-label">State<span class="text-danger">*</span></label>
                           <div class="col-sm-4">
                              <select class="form-control form-control-sm" name="state_id" id="state_id">
                                 <option value="1">
                                    Andaman and Nicobar Islands                          
                                 </option>
                                 <option value="2">
                                    Andhra Pradesh                          
                                 </option>
                                 <option value="3">
                                    Arunachal Pradesh                          
                                 </option>
                                 <option value="4">
                                    Assam                          
                                 </option>
                                 <option value="5">
                                    Bihar                          
                                 </option>
                                 <option value="6">
                                    Chandigarh                          
                                 </option>
                                 <option value="7">
                                    Chhattisgarh                          
                                 </option>
                                 <option value="9">
                                    Dadra and Nagar Haveli and Daman and Diu                          
                                 </option>
                                 <option value="10">
                                    Delhi                          
                                 </option>
                                 <option value="11">
                                    Goa                          
                                 </option>
                                 <option value="12">
                                    Gujarat                          
                                 </option>
                                 <option value="13">
                                    Haryana                          
                                 </option>
                                 <option value="14">
                                    Himachal Pradesh                          
                                 </option>
                                 <option value="15">
                                    Jammu and Kashmir                          
                                 </option>
                                 <option value="16">
                                    Jharkhand                          
                                 </option>
                                 <option value="17">
                                    Karnataka                          
                                 </option>
                                 <option value="19">
                                    Kerala                          
                                 </option>
                                 <option value="20">
                                    Lakshadweep                          
                                 </option>
                                 <option value="21">
                                    Madhya Pradesh                          
                                 </option>
                                 <option value="22" selected="" data-select2-id="297">
                                    Maharashtra                          
                                 </option>
                                 <option value="23">
                                    Manipur                          
                                 </option>
                                 <option value="24">
                                    Meghalaya                          
                                 </option>
                                 <option value="25">
                                    Mizoram                          
                                 </option>
                                 <option value="26">
                                    Nagaland                          
                                 </option>
                                 <option value="29">
                                    Odisha                          
                                 </option>
                                 <option value="31">
                                    Pondicherry                          
                                 </option>
                                 <option value="32">
                                    Punjab                          
                                 </option>
                                 <option value="33">
                                    Rajasthan                          
                                 </option>
                                 <option value="34">
                                    Sikkim                          
                                 </option>
                                 <option value="35">
                                    Tamil Nadu                          
                                 </option>
                                 <option value="36">
                                    Telangana                          
                                 </option>
                                 <option value="37">
                                    Tripura                          
                                 </option>
                                 <option value="38">
                                    Uttar Pradesh                          
                                 </option>
                                 <option value="39">
                                    Uttarakhand                          
                                 </option>
                                 <option value="41">
                                    West Bengal                          
                                 </option>
                                 <option value="4123">
                                    Andhra Pradesh (NEWLY ADDED)                          
                                 </option>
                                 <option value="4124">
                                    Ladakh (NEWLY ADDED)                          
                                 </option>
                              </select>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="inputEmail3" class="col-sm-2 col-form-label">City</label>
                           <div class="col-sm-4">
                              <select class="form-control form-control-sm" name="city_id" id="city_id">
                                 <option value="2474">
                                    Achalpur                          
                                 </option>
                                 <option value="2475">
                                    Aheri                          
                                 </option>
                                 <option value="2476">
                                    Ahmadnagar Cantonment                          
                                 </option>
                                 <option value="2477">
                                    Ahmadpur                          
                                 </option>
                                 <option value="2478">
                                    Ahmednagar                          
                                 </option>
                                 <option value="2479">
                                    Ajra                          
                                 </option>
                                 <option value="2480">
                                    Akalkot                          
                                 </option>
                                 <option value="2481">
                                    Akkalkuwa                          
                                 </option>
                                 <option value="2482">
                                    Akola                          
                                 </option>
                                 <option value="2483">
                                    Akot                          
                                 </option>
                                 <option value="2484">
                                    Alandi                          
                                 </option>
                                 <option value="2485">
                                    Alibag                          
                                 </option>
                                 <option value="2486">
                                    Allapalli                          
                                 </option>
                                 <option value="2487">
                                    Alore                          
                                 </option>
                                 <option value="2488">
                                    Amalner                          
                                 </option>
                                 <option value="2489">
                                    Ambad                          
                                 </option>
                                 <option value="2490">
                                    Ambajogai                          
                                 </option>
                                 <option value="2491">
                                    Ambernath                          
                                 </option>
                                 <option value="2492">
                                    Ambivali Tarf Wankhal                          
                                 </option>
                                 <option value="2493">
                                    Amgaon                          
                                 </option>
                                 <option value="2494">
                                    Amravati                          
                                 </option>
                                 <option value="2495">
                                    Anjangaon                          
                                 </option>
                                 <option value="2496">
                                    Arvi                          
                                 </option>
                                 <option value="2497">
                                    Ashta                          
                                 </option>
                                 <option value="2498">
                                    Ashti                          
                                 </option>
                                 <option value="2499">
                                    Aurangabad                          
                                 </option>
                                 <option value="2500">
                                    Aurangabad Cantonment                          
                                 </option>
                                 <option value="2501">
                                    Ausa                          
                                 </option>
                                 <option value="2502">
                                    Babhulgaon                          
                                 </option>
                                 <option value="2503">
                                    Badlapur                          
                                 </option>
                                 <option value="2504">
                                    Balapur                          
                                 </option>
                                 <option value="2505">
                                    Ballarpur                          
                                 </option>
                                 <option value="2506">
                                    Baramati                          
                                 </option>
                                 <option value="2507">
                                    Barshi                          
                                 </option>
                                 <option value="2508">
                                    Basmat                          
                                 </option>
                                 <option value="2509">
                                    Beed                          
                                 </option>
                                 <option value="2510">
                                    Bhadravati                          
                                 </option>
                                 <option value="2511">
                                    Bhagur                          
                                 </option>
                                 <option value="2512">
                                    Bhandara                          
                                 </option>
                                 <option value="2513">
                                    Bhigvan                          
                                 </option>
                                 <option value="2514">
                                    Bhingar                          
                                 </option>
                                 <option value="2515">
                                    Bhiwandi                          
                                 </option>
                                 <option value="2516">
                                    Bhokhardan                          
                                 </option>
                                 <option value="2517">
                                    Bhor                          
                                 </option>
                                 <option value="2518">
                                    Bhosari                          
                                 </option>
                                 <option value="2519">
                                    Bhum                          
                                 </option>
                                 <option value="2520">
                                    Bhusawal                          
                                 </option>
                                 <option value="2521">
                                    Bid                          
                                 </option>
                                 <option value="2522">
                                    Biloli                          
                                 </option>
                                 <option value="2523">
                                    Birwadi                          
                                 </option>
                                 <option value="2524">
                                    Boisar                          
                                 </option>
                                 <option value="2525">
                                    Bop Khel                          
                                 </option>
                                 <option value="2526">
                                    Brahmapuri                          
                                 </option>
                                 <option value="2527">
                                    Budhgaon                          
                                 </option>
                                 <option value="2528">
                                    Buldana                          
                                 </option>
                                 <option value="2529">
                                    Buldhana                          
                                 </option>
                                 <option value="2530">
                                    Butibori                          
                                 </option>
                                 <option value="2531">
                                    Chakan                          
                                 </option>
                                 <option value="2532">
                                    Chalisgaon                          
                                 </option>
                                 <option value="2533">
                                    Chandrapur                          
                                 </option>
                                 <option value="2534">
                                    Chandur                          
                                 </option>
                                 <option value="2535">
                                    Chandur Bazar                          
                                 </option>
                                 <option value="2536">
                                    Chandvad                          
                                 </option>
                                 <option value="2537">
                                    Chicholi                          
                                 </option>
                                 <option value="2538">
                                    Chikhala                          
                                 </option>
                                 <option value="2539">
                                    Chikhaldara                          
                                 </option>
                                 <option value="2540">
                                    Chikhli                          
                                 </option>
                                 <option value="2541">
                                    Chinchani                          
                                 </option>
                                 <option value="2542">
                                    Chinchwad                          
                                 </option>
                                 <option value="2543">
                                    Chiplun                          
                                 </option>
                                 <option value="2544">
                                    Chopda                          
                                 </option>
                                 <option value="2545">
                                    Dabhol                          
                                 </option>
                                 <option value="2546">
                                    Dahance                          
                                 </option>
                                 <option value="2547">
                                    Dahanu                          
                                 </option>
                                 <option value="2548">
                                    Daharu                          
                                 </option>
                                 <option value="2549">
                                    Dapoli Camp                          
                                 </option>
                                 <option value="2550">
                                    Darwa                          
                                 </option>
                                 <option value="2551">
                                    Daryapur                          
                                 </option>
                                 <option value="2552">
                                    Dattapur                          
                                 </option>
                                 <option value="2553">
                                    Daund                          
                                 </option>
                                 <option value="2554">
                                    Davlameti                          
                                 </option>
                                 <option value="2555">
                                    Deglur                          
                                 </option>
                                 <option value="2556">
                                    Dehu Road                          
                                 </option>
                                 <option value="2557">
                                    Deolali                          
                                 </option>
                                 <option value="2558">
                                    Deolali Pravara                          
                                 </option>
                                 <option value="2559">
                                    Deoli                          
                                 </option>
                                 <option value="2560">
                                    Desaiganj                          
                                 </option>
                                 <option value="2561">
                                    Deulgaon Raja                          
                                 </option>
                                 <option value="2562">
                                    Dewhadi                          
                                 </option>
                                 <option value="2563">
                                    Dharangaon                          
                                 </option>
                                 <option value="2564">
                                    Dharmabad                          
                                 </option>
                                 <option value="2565">
                                    Dharur                          
                                 </option>
                                 <option value="2566">
                                    Dhatau                          
                                 </option>
                                 <option value="2567">
                                    Dhule                          
                                 </option>
                                 <option value="2568">
                                    Digdoh                          
                                 </option>
                                 <option value="2569">
                                    Diglur                          
                                 </option>
                                 <option value="2570">
                                    Digras                          
                                 </option>
                                 <option value="2571">
                                    Dombivli                          
                                 </option>
                                 <option value="2572">
                                    Dondaicha                          
                                 </option>
                                 <option value="2573">
                                    Dudhani                          
                                 </option>
                                 <option value="2574">
                                    Durgapur                          
                                 </option>
                                 <option value="2575">
                                    Dyane                          
                                 </option>
                                 <option value="2576">
                                    Edandol                          
                                 </option>
                                 <option value="2577">
                                    Eklahare                          
                                 </option>
                                 <option value="2578">
                                    Faizpur                          
                                 </option>
                                 <option value="2579">
                                    Fekari                          
                                 </option>
                                 <option value="2580">
                                    Gadchiroli                          
                                 </option>
                                 <option value="2581">
                                    Gadhinghaj                          
                                 </option>
                                 <option value="2582">
                                    Gandhi Nagar                          
                                 </option>
                                 <option value="2583">
                                    Ganeshpur                          
                                 </option>
                                 <option value="2584">
                                    Gangakher                          
                                 </option>
                                 <option value="2585">
                                    Gangapur                          
                                 </option>
                                 <option value="2586">
                                    Gevrai                          
                                 </option>
                                 <option value="2587">
                                    Ghatanji                          
                                 </option>
                                 <option value="2588">
                                    Ghoti                          
                                 </option>
                                 <option value="2589">
                                    Ghugus                          
                                 </option>
                                 <option value="2590">
                                    Ghulewadi                          
                                 </option>
                                 <option value="2591">
                                    Godoli                          
                                 </option>
                                 <option value="2592">
                                    Gondia                          
                                 </option>
                                 <option value="2593">
                                    Guhagar                          
                                 </option>
                                 <option value="2594">
                                    Hadgaon                          
                                 </option>
                                 <option value="2595">
                                    Harnai Beach                          
                                 </option>
                                 <option value="2596">
                                    Hinganghat                          
                                 </option>
                                 <option value="2597">
                                    Hingoli                          
                                 </option>
                                 <option value="2598">
                                    Hupari                          
                                 </option>
                                 <option value="2599">
                                    Ichalkaranji                          
                                 </option>
                                 <option value="2600">
                                    Igatpuri                          
                                 </option>
                                 <option value="2601">
                                    Indapur                          
                                 </option>
                                 <option value="2602">
                                    Jaisinghpur                          
                                 </option>
                                 <option value="2603">
                                    Jalgaon                          
                                 </option>
                                 <option value="2604">
                                    Jalna                          
                                 </option>
                                 <option value="2605">
                                    Jamkhed                          
                                 </option>
                                 <option value="2606">
                                    Jawhar                          
                                 </option>
                                 <option value="2607">
                                    Jaysingpur                          
                                 </option>
                                 <option value="2608">
                                    Jejuri                          
                                 </option>
                                 <option value="2609">
                                    Jintur                          
                                 </option>
                                 <option value="2610">
                                    Junnar                          
                                 </option>
                                 <option value="2611">
                                    Kabnur                          
                                 </option>
                                 <option value="2612">
                                    Kagal                          
                                 </option>
                                 <option value="2613">
                                    Kalamb                          
                                 </option>
                                 <option value="2614">
                                    Kalamnuri                          
                                 </option>
                                 <option value="2615">
                                    Kalas                          
                                 </option>
                                 <option value="2616">
                                    Kalmeshwar                          
                                 </option>
                                 <option value="2617">
                                    Kalundre                          
                                 </option>
                                 <option value="2618">
                                    Kalyan                          
                                 </option>
                                 <option value="2619">
                                    Kamthi                          
                                 </option>
                                 <option value="2620">
                                    Kamthi Cantonment                          
                                 </option>
                                 <option value="2621">
                                    Kandari                          
                                 </option>
                                 <option value="2622">
                                    Kandhar                          
                                 </option>
                                 <option value="2623">
                                    Kandri                          
                                 </option>
                                 <option value="2624">
                                    Kandri II                          
                                 </option>
                                 <option value="2625">
                                    Kanhan                          
                                 </option>
                                 <option value="2626">
                                    Kankavli                          
                                 </option>
                                 <option value="2627">
                                    Kannad                          
                                 </option>
                                 <option value="2628">
                                    Karad                          
                                 </option>
                                 <option value="2629">
                                    Karanja                          
                                 </option>
                                 <option value="2630">
                                    Karanje Tarf                          
                                 </option>
                                 <option value="2631">
                                    Karivali                          
                                 </option>
                                 <option value="2632">
                                    Karjat                          
                                 </option>
                                 <option value="2633">
                                    Karmala                          
                                 </option>
                                 <option value="2634">
                                    Kasara Budruk                          
                                 </option>
                                 <option value="2635">
                                    Katai                          
                                 </option>
                                 <option value="2636">
                                    Katkar                          
                                 </option>
                                 <option value="2637">
                                    Katol                          
                                 </option>
                                 <option value="2638">
                                    Kegaon                          
                                 </option>
                                 <option value="2639">
                                    Khadkale                          
                                 </option>
                                 <option value="2640">
                                    Khadki                          
                                 </option>
                                 <option value="2641">
                                    Khamgaon                          
                                 </option>
                                 <option value="2642">
                                    Khapa                          
                                 </option>
                                 <option value="2643">
                                    Kharadi                          
                                 </option>
                                 <option value="2644">
                                    Kharakvasla                          
                                 </option>
                                 <option value="2645">
                                    Khed                          
                                 </option>
                                 <option value="2646">
                                    Kherdi                          
                                 </option>
                                 <option value="2647">
                                    Khoni                          
                                 </option>
                                 <option value="2648">
                                    Khopoli                          
                                 </option>
                                 <option value="2649">
                                    Khuldabad                          
                                 </option>
                                 <option value="2650">
                                    Kinwat                          
                                 </option>
                                 <option value="2651">
                                    Kodoli                          
                                 </option>
                                 <option value="2652">
                                    Kolhapur                          
                                 </option>
                                 <option value="2653">
                                    Kon                          
                                 </option>
                                 <option value="2654">
                                    Kondumal                          
                                 </option>
                                 <option value="2655">
                                    Kopargaon                          
                                 </option>
                                 <option value="2656">
                                    Kopharad                          
                                 </option>
                                 <option value="2657">
                                    Koradi                          
                                 </option>
                                 <option value="2658">
                                    Koregaon                          
                                 </option>
                                 <option value="2659">
                                    Korochi                          
                                 </option>
                                 <option value="2660">
                                    Kudal                          
                                 </option>
                                 <option value="2661">
                                    Kundaim                          
                                 </option>
                                 <option value="2662">
                                    Kundalwadi                          
                                 </option>
                                 <option value="2663">
                                    Kurandvad                          
                                 </option>
                                 <option value="2664">
                                    Kurduvadi                          
                                 </option>
                                 <option value="2665">
                                    Kusgaon Budruk                          
                                 </option>
                                 <option value="2666">
                                    Lanja                          
                                 </option>
                                 <option value="2667">
                                    Lasalgaon                          
                                 </option>
                                 <option value="2668" selected="" data-select2-id="708">
                                    Latur                          
                                 </option>
                                 <option value="2669">
                                    Loha                          
                                 </option>
                                 <option value="2670">
                                    Lohegaon                          
                                 </option>
                                 <option value="2671">
                                    Lonar                          
                                 </option>
                                 <option value="2672">
                                    Lonavala                          
                                 </option>
                                 <option value="2673">
                                    Madhavnagar                          
                                 </option>
                                 <option value="2674">
                                    Mahabaleshwar                          
                                 </option>
                                 <option value="2675">
                                    Mahad                          
                                 </option>
                                 <option value="2676">
                                    Mahadula                          
                                 </option>
                                 <option value="2677">
                                    Maindargi                          
                                 </option>
                                 <option value="2678">
                                    Majalgaon                          
                                 </option>
                                 <option value="2679">
                                    Malegaon                          
                                 </option>
                                 <option value="2680">
                                    Malgaon                          
                                 </option>
                                 <option value="2681">
                                    Malkapur                          
                                 </option>
                                 <option value="2682">
                                    Malwan                          
                                 </option>
                                 <option value="2683">
                                    Manadur                          
                                 </option>
                                 <option value="2684">
                                    Manchar                          
                                 </option>
                                 <option value="2685">
                                    Mangalvedhe                          
                                 </option>
                                 <option value="2686">
                                    Mangrul Pir                          
                                 </option>
                                 <option value="2687">
                                    Manmad                          
                                 </option>
                                 <option value="2688">
                                    Manor                          
                                 </option>
                                 <option value="2689">
                                    Mansar                          
                                 </option>
                                 <option value="2690">
                                    Manwath                          
                                 </option>
                                 <option value="2691">
                                    Mapuca                          
                                 </option>
                                 <option value="2692">
                                    Matheran                          
                                 </option>
                                 <option value="2693">
                                    Mehkar                          
                                 </option>
                                 <option value="2694">
                                    Mhasla                          
                                 </option>
                                 <option value="2695">
                                    Mhaswad                          
                                 </option>
                                 <option value="2696">
                                    Mira Bhayandar                          
                                 </option>
                                 <option value="2697">
                                    Miraj                          
                                 </option>
                                 <option value="2698">
                                    Mohpa                          
                                 </option>
                                 <option value="2699">
                                    Mohpada                          
                                 </option>
                                 <option value="2700">
                                    Moram                          
                                 </option>
                                 <option value="2701">
                                    Morshi                          
                                 </option>
                                 <option value="2702">
                                    Mowad                          
                                 </option>
                                 <option value="2703">
                                    Mudkhed                          
                                 </option>
                                 <option value="2704">
                                    Mukhed                          
                                 </option>
                                 <option value="2705">
                                    Mul                          
                                 </option>
                                 <option value="2706">
                                    Mulshi                          
                                 </option>
                                 <option value="2707">
                                    Mumbai                          
                                 </option>
                                 <option value="2708">
                                    Murbad                          
                                 </option>
                                 <option value="2709">
                                    Murgud                          
                                 </option>
                                 <option value="2710">
                                    Murtijapur                          
                                 </option>
                                 <option value="2711">
                                    Murud                          
                                 </option>
                                 <option value="2712">
                                    Nachane                          
                                 </option>
                                 <option value="2713">
                                    Nagardeole                          
                                 </option>
                                 <option value="2714">
                                    Nagothane                          
                                 </option>
                                 <option value="2715">
                                    Nagpur                          
                                 </option>
                                 <option value="2716">
                                    Nakoda                          
                                 </option>
                                 <option value="2717">
                                    Nalasopara                          
                                 </option>
                                 <option value="2718">
                                    Naldurg                          
                                 </option>
                                 <option value="2719">
                                    Nanded                          
                                 </option>
                                 <option value="2720">
                                    Nandgaon                          
                                 </option>
                                 <option value="2721">
                                    Nandura                          
                                 </option>
                                 <option value="2722">
                                    Nandurbar                          
                                 </option>
                                 <option value="2723">
                                    Narkhed                          
                                 </option>
                                 <option value="2724">
                                    Nashik                          
                                 </option>
                                 <option value="2725">
                                    Navapur                          
                                 </option>
                                 <option value="2726">
                                    Navi Mumbai                          
                                 </option>
                                 <option value="2727">
                                    Navi Mumbai Panvel                          
                                 </option>
                                 <option value="2728">
                                    Neral                          
                                 </option>
                                 <option value="2729">
                                    Nigdi                          
                                 </option>
                                 <option value="2730">
                                    Nilanga                          
                                 </option>
                                 <option value="2731">
                                    Nildoh                          
                                 </option>
                                 <option value="2732">
                                    Nimbhore                          
                                 </option>
                                 <option value="2733">
                                    Ojhar                          
                                 </option>
                                 <option value="2734">
                                    Osmanabad                          
                                 </option>
                                 <option value="2735">
                                    Pachgaon                          
                                 </option>
                                 <option value="2736">
                                    Pachora                          
                                 </option>
                                 <option value="2737">
                                    Padagha                          
                                 </option>
                                 <option value="2738">
                                    Paithan                          
                                 </option>
                                 <option value="2739">
                                    Palghar                          
                                 </option>
                                 <option value="2740">
                                    Pali                          
                                 </option>
                                 <option value="2741">
                                    Panchgani                          
                                 </option>
                                 <option value="2742">
                                    Pandhakarwada                          
                                 </option>
                                 <option value="2743">
                                    Pandharpur                          
                                 </option>
                                 <option value="2744">
                                    Panhala                          
                                 </option>
                                 <option value="2745">
                                    Panvel                          
                                 </option>
                                 <option value="2746">
                                    Paranda                          
                                 </option>
                                 <option value="2747">
                                    Parbhani                          
                                 </option>
                                 <option value="2748">
                                    Parli                          
                                 </option>
                                 <option value="2749">
                                    Parola                          
                                 </option>
                                 <option value="2750">
                                    Partur                          
                                 </option>
                                 <option value="2751">
                                    Pasthal                          
                                 </option>
                                 <option value="2752">
                                    Patan                          
                                 </option>
                                 <option value="2753">
                                    Pathardi                          
                                 </option>
                                 <option value="2754">
                                    Pathri                          
                                 </option>
                                 <option value="2755">
                                    Patur                          
                                 </option>
                                 <option value="2756">
                                    Pawni                          
                                 </option>
                                 <option value="2757">
                                    Pen                          
                                 </option>
                                 <option value="2758">
                                    Pethumri                          
                                 </option>
                                 <option value="2759">
                                    Phaltan                          
                                 </option>
                                 <option value="2760">
                                    Pimpri                          
                                 </option>
                                 <option value="2761">
                                    Poladpur                          
                                 </option>
                                 <option value="2762">
                                    Pulgaon                          
                                 </option>
                                 <option value="2763">
                                    Pune                          
                                 </option>
                                 <option value="2764">
                                    Pune Cantonment                          
                                 </option>
                                 <option value="2765">
                                    Purna                          
                                 </option>
                                 <option value="2766">
                                    Purushottamnagar                          
                                 </option>
                                 <option value="2767">
                                    Pusad                          
                                 </option>
                                 <option value="2768">
                                    Rahimatpur                          
                                 </option>
                                 <option value="2769">
                                    Rahta Pimplas                          
                                 </option>
                                 <option value="2770">
                                    Rahuri                          
                                 </option>
                                 <option value="2771">
                                    Raigad                          
                                 </option>
                                 <option value="2772">
                                    Rajapur                          
                                 </option>
                                 <option value="2773">
                                    Rajgurunagar                          
                                 </option>
                                 <option value="2774">
                                    Rajur                          
                                 </option>
                                 <option value="2775">
                                    Rajura                          
                                 </option>
                                 <option value="2776">
                                    Ramtek                          
                                 </option>
                                 <option value="2777">
                                    Ratnagiri                          
                                 </option>
                                 <option value="2778">
                                    Ravalgaon                          
                                 </option>
                                 <option value="2779">
                                    Raver                          
                                 </option>
                                 <option value="2780">
                                    Revadanda                          
                                 </option>
                                 <option value="2781">
                                    Risod                          
                                 </option>
                                 <option value="2782">
                                    Roha Ashtami                          
                                 </option>
                                 <option value="2783">
                                    Sakri                          
                                 </option>
                                 <option value="2784">
                                    Sandor                          
                                 </option>
                                 <option value="2785">
                                    Sangamner                          
                                 </option>
                                 <option value="2786">
                                    Sangli                          
                                 </option>
                                 <option value="2787">
                                    Sangole                          
                                 </option>
                                 <option value="2788">
                                    Sasti                          
                                 </option>
                                 <option value="2789">
                                    Sasvad                          
                                 </option>
                                 <option value="2790">
                                    Satana                          
                                 </option>
                                 <option value="2791">
                                    Satara                          
                                 </option>
                                 <option value="2792">
                                    Savantvadi                          
                                 </option>
                                 <option value="2793">
                                    Savda                          
                                 </option>
                                 <option value="2794">
                                    Savner                          
                                 </option>
                                 <option value="2795">
                                    Sawari Jawharnagar                          
                                 </option>
                                 <option value="2796">
                                    Selu                          
                                 </option>
                                 <option value="2797">
                                    Shahada                          
                                 </option>
                                 <option value="2798">
                                    Shahapur                          
                                 </option>
                                 <option value="2799">
                                    Shegaon                          
                                 </option>
                                 <option value="2800">
                                    Shelar                          
                                 </option>
                                 <option value="2801">
                                    Shendurjana                          
                                 </option>
                                 <option value="2802">
                                    Shirdi                          
                                 </option>
                                 <option value="2803">
                                    Shirgaon                          
                                 </option>
                                 <option value="2804">
                                    Shirpur                          
                                 </option>
                                 <option value="2805">
                                    Shirur                          
                                 </option>
                                 <option value="2806">
                                    Shirwal                          
                                 </option>
                                 <option value="2807">
                                    Shivatkar                          
                                 </option>
                                 <option value="2808">
                                    Shrigonda                          
                                 </option>
                                 <option value="2809">
                                    Shrirampur                          
                                 </option>
                                 <option value="2810">
                                    Shrirampur Rural                          
                                 </option>
                                 <option value="2811">
                                    Sillewada                          
                                 </option>
                                 <option value="2812">
                                    Sillod                          
                                 </option>
                                 <option value="2813">
                                    Sindhudurg                          
                                 </option>
                                 <option value="2814">
                                    Sindi                          
                                 </option>
                                 <option value="2815">
                                    Sindi Turf Hindnagar                          
                                 </option>
                                 <option value="2816">
                                    Sindkhed Raja                          
                                 </option>
                                 <option value="2817">
                                    Singnapur                          
                                 </option>
                                 <option value="2818">
                                    Sinnar                          
                                 </option>
                                 <option value="2819">
                                    Sirur                          
                                 </option>
                                 <option value="2820">
                                    Sitasawangi                          
                                 </option>
                                 <option value="2821">
                                    Solapur                          
                                 </option>
                                 <option value="2822">
                                    Sonai                          
                                 </option>
                                 <option value="2823">
                                    Sonegaon                          
                                 </option>
                                 <option value="2824">
                                    Soyagaon                          
                                 </option>
                                 <option value="2825">
                                    Srivardhan                          
                                 </option>
                                 <option value="2826">
                                    Surgana                          
                                 </option>
                                 <option value="2827">
                                    Talegaon Dabhade                          
                                 </option>
                                 <option value="2828">
                                    Taloda                          
                                 </option>
                                 <option value="2829">
                                    Taloja                          
                                 </option>
                                 <option value="2830">
                                    Talwade                          
                                 </option>
                                 <option value="2831">
                                    Tarapur                          
                                 </option>
                                 <option value="2832">
                                    Tasgaon                          
                                 </option>
                                 <option value="2833">
                                    Tathavade                          
                                 </option>
                                 <option value="2834">
                                    Tekadi                          
                                 </option>
                                 <option value="2835">
                                    Telhara                          
                                 </option>
                                 <option value="2836">
                                    Thane                          
                                 </option>
                                 <option value="2837">
                                    Tirira                          
                                 </option>
                                 <option value="2838">
                                    Totaladoh                          
                                 </option>
                                 <option value="2839">
                                    Trimbak                          
                                 </option>
                                 <option value="2840">
                                    Tuljapur                          
                                 </option>
                                 <option value="2841">
                                    Tumsar                          
                                 </option>
                                 <option value="2842">
                                    Uchgaon                          
                                 </option>
                                 <option value="2843">
                                    Udgir                          
                                 </option>
                                 <option value="2844">
                                    Ulhasnagar                          
                                 </option>
                                 <option value="2845">
                                    Umarga                          
                                 </option>
                                 <option value="2846">
                                    Umarkhed                          
                                 </option>
                                 <option value="2847">
                                    Umarsara                          
                                 </option>
                                 <option value="2848">
                                    Umbar Pada Nandade                          
                                 </option>
                                 <option value="2849">
                                    Umred                          
                                 </option>
                                 <option value="2850">
                                    Umri Pragane Balapur                          
                                 </option>
                                 <option value="2851">
                                    Uran                          
                                 </option>
                                 <option value="2852">
                                    Uran Islampur                          
                                 </option>
                                 <option value="2853">
                                    Utekhol                          
                                 </option>
                                 <option value="2854">
                                    Vada                          
                                 </option>
                                 <option value="2855">
                                    Vadgaon                          
                                 </option>
                                 <option value="2856">
                                    Vadgaon Kasba                          
                                 </option>
                                 <option value="2857">
                                    Vaijapur                          
                                 </option>
                                 <option value="2858">
                                    Vanvadi                          
                                 </option>
                                 <option value="2859">
                                    Varangaon                          
                                 </option>
                                 <option value="2860">
                                    Vasai                          
                                 </option>
                                 <option value="2861">
                                    Vasantnagar                          
                                 </option>
                                 <option value="2862">
                                    Vashind                          
                                 </option>
                                 <option value="2863">
                                    Vengurla                          
                                 </option>
                                 <option value="2864">
                                    Virar                          
                                 </option>
                                 <option value="2865">
                                    Visapur                          
                                 </option>
                                 <option value="2866">
                                    Vite                          
                                 </option>
                                 <option value="2867">
                                    Vithalwadi                          
                                 </option>
                                 <option value="2868">
                                    Wadi                          
                                 </option>
                                 <option value="2869">
                                    Waghapur                          
                                 </option>
                                 <option value="2870">
                                    Wai                          
                                 </option>
                                 <option value="2871">
                                    Wajegaon                          
                                 </option>
                                 <option value="2872">
                                    Walani                          
                                 </option>
                                 <option value="2873">
                                    Wanadongri                          
                                 </option>
                                 <option value="2874">
                                    Wani                          
                                 </option>
                                 <option value="2875">
                                    Wardha                          
                                 </option>
                                 <option value="2876">
                                    Warora                          
                                 </option>
                                 <option value="2877">
                                    Warthi                          
                                 </option>
                                 <option value="2878">
                                    Warud                          
                                 </option>
                                 <option value="2879">
                                    Washim                          
                                 </option>
                                 <option value="2880">
                                    Yaval                          
                                 </option>
                                 <option value="2881">Yavatmal</option>
                                 <option value="2882">Yeola</option>
                                 <option value="2883">Yerkheda</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
                           <div class="col-sm-4">
                              <input type="text" name="address" value="" class="form-control form-control-sm field_validation" id="address" placeholder="Address">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="inputEmail3" class="col-sm-2 col-form-label">Website</label>
                           <div class="col-sm-4">
                              <input type="text" name="website" value="" class="form-control form-control-sm" id="website" placeholder="">
                              <span id="err_website" class="error invalid-feedback"></span>
                           </div>
                        </div>
                     </div>
                     <div class="card-footer">
                        <input type="hidden" name="" value="">
                        <input type="hidden" name="id" value="12">
                        <button type="submit" name="submit" id="supplierSubmit" class="btn btn-info">Edit Supplier</button>
                     </div>
                  </div>
               </form>
               <!-- /.card -->
            </div>
            <!-- /.col -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
   </section>
</div>
@endsection