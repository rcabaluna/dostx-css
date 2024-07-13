<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Enlink - Admin Dashboard Template</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="<?=base_url('assets/images/logo/favicon.png')?>">

        <!-- page css -->
        <link href="<?=base_url('assets/vendors/select2/select2.css')?>" rel="stylesheet">

        <!-- Core css -->
        <link href="<?=base_url('assets/css/app.min.css')?>" rel="stylesheet">

        <style>
            .bold-option {
                font-weight: bold;
            }
        </style>
        <script>var BASE_URL = '<?=base_url()?>'; </script>
    </head>
    <body>
        <div class="app">
            <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url(<?=base_url('assets/images/others/login-3.png')?>)">
                <div class="d-flex flex-column justify-content-between w-100">
                    <div class="container d-flex h-100">
                        <div class="row align-items-center w-100">
                            <div class="col-md-12 col-lg-10 m-h-auto">
                                <div class="card shadow-lg">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between m-b-30">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <!-- <img class="img-fluid" alt="" src="<?=base_url('assets/images/logo/logo.png')?>"> -->
                                                </div>
                                                <div class="col-md-12">
                                                    <h4 class="text-center"><b>HELP US SERVE YOU BETTER!</b></h4>
                                                    <p style="text-align:justify;"> The <b>Client Satisfaction Measurement (CSM)</b> tracks the customer experience of government offices. Your feedback on your <u>recently concluded transaction</u> will help this office provide a better service.
                                                        Personal Information shared will be kept confidential and you always have the option not to answer this form.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <form id="frm-step-1" method="POST">
                                                <div class="form-group">
                                                    <label for="inputAddress"><b>Service Availed:</b> <span class="text-danger">*</span></label>
                                                    <select class="form-control" class="form-control" name="servicesid" required>
                                                        <option value="">Please select a service...</option>
                                                        <?php foreach ($services as $servicesRow) { ?>
                                                            <option value="<?=$servicesRow['servicesid']?>">
                                                                <?=$servicesRow['name']?> <b><?=$servicesRow['unit'] ? ' - '.$servicesRow['unit'] : ''?>
                                                                <b><?=$servicesRow['is_cc'] == 1 ? '*' : ''?></b>
                                                            </option>
                                                            <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="attending-dost-personnel"><b>Attending DOST Personnel:</b> <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="attending-dost-personnel" name="dost_personnel" placeholder="Enter attending DOST personnel" required/>
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <label for="client-type"><b>Client Type:</b> <span class="text-danger">*</span></label>
                                                    <?php foreach ($clienttype as $clienttypeRow) { ?>
                                                        <div class="radio">
                                                            <input type="radio" id="rdoclienttype<?=$clienttypeRow['clienttypeid']?>" name="clienttypeid" value="<?=$clienttypeRow['clienttypeid']?>" required/>
                                                            <label for="rdoclienttype<?=$clienttypeRow['clienttypeid']?>"><?=$clienttypeRow['name']?></label>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name"><b>Name:</b> <small>(optional)</small></label>
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="date"><b>Date</b>: <span class="text-danger">*</span></label>
                                                    <input type="date" class="form-control" id="date" value="<?=date('Y-m-d')?>" required/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sex"><b>Sex:</b> <span class="text-danger">*</span></label>
                                                    <div class="radio">
                                                        <input type="radio" id="rdosex1" value="Male" name="sex" required/>
                                                        <label for="rdosex1">Male</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="rdosex2" value="Female" name="sex" />
                                                        <label for="rdosex2">Female</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="age"><b>Age:</b> <span class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" name="age" id="age" placeholder="Enter age" required/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="vulnerable-sector"><b>Vulnerable Sector:</b> <small>(optional)</small></label>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="chkvs1" name="vul_sector" value="Senior Citizen" required/>
                                                        <label for="chkvs1">Senior Citizen</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="chkvs2" name="vul_sector" value="Persons With Disability" />
                                                        <label for="chkvs2">Persons With Disability</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="chkvs3" name="vul_sector" value="4P's Beneficiary" />
                                                        <label for="chkvs3">4P's Beneficiary</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="chkvs4" name="vul_sector" value="Indigenous People" />
                                                        <label for="chkvs4">Indigenous People</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="address"><b>Address:</b> <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" required/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="how-did-you-know-dost"><b>How did you know DOST?:</b> <span class="text-danger">*</span></label>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="chkhdyk1" name="dost_info" value="Facebook" required/>
                                                        <label for="chkhdyk1">Facebook</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="chkhdyk2" name="dost_info" value="Radio" />
                                                        <label for="chkhdyk2">Radio</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="chkhdyk3" name="dost_info" value="Referral" />
                                                        <label for="chkhdyk3">Referral</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="chkhdyk4" name="dost_info" value="Website" />
                                                        <label for="chkhdyk4">Website</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="chkhdyk5" name="dost_info" value="TV" />
                                                        <label for="chkhdyk5">TV</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="chkhdyk6" name="dost_info" value="Others" />
                                                        <label for="chkhdyk6">Others</label>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Next</button>
                                        </form>
                                            <form id="frm-step-2" method="POST" style="display:none;">
                                                <p>
                                                    INSTRUCTIONS: Select your answer to the Citizen's Charter (CC) questions. The Citizen's Charter is an official document that reflects the services of a government agency/office including its
                                                    requirements, fees, and processing times among others.
                                                </p>

                                                <div class="form-group">
                                                    <label for="cc1"><b>CC1: Which of the following best describes your awareness of a CC?</b> <span class="text-danger">*</span></label>
                                                    <div class="radio">
                                                        <input type="radio" id="rdoCC1-1" name="cc1" value="4" checked required/>
                                                        <label for="rdoCC1-1">I know what a CC is and I saw this office's CC.</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="rdoCC1-2" name="cc1" value="3" />
                                                        <label for="rdoCC1-2">I know what a CC is but did NOT see this office's CC.</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="rdoCC1-3" name="cc1" value="2" />
                                                        <label for="rdoCC1-3">I learned of the CC only when I saw this office's CC.</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="rdoCC1-4" name="cc1" value="1" />
                                                        <label for="rdoCC1-4">I do not know what a CC is and I did not see one in this office.</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="cc2"><b>CC2: If aware of CC (answered 1-3 in CC1), would you say that the CC of this office was ...?</b> <span class="text-danger">*</span></label>
                                                    <div class="radio">
                                                        <input type="radio" id="rdoCC2-1" name="cc2" value="5" checked required/>
                                                        <label for="rdoCC2-1">Easy to see</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="rdoCC2-2" name="cc2" value="4" />
                                                        <label for="rdoCC2-2">Somewhat easy to see</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="rdoCC2-3" name="cc2" value="3" />
                                                        <label for="rdoCC2-3">Difficult to see</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="rdoCC2-4" name="cc2" value="2" />
                                                        <label for="rdoCC2-4">Not visible at all</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="rdoCC2-5" name="cc2" value="1" />
                                                        <label for="rdoCC2-5">N/A</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="cc3"><b>CC3: If aware of CC (answered 1-3 in CC1), how much did the CC help you in your transaction?</b> <span class="text-danger">*</span></label>
                                                    <div class="radio">
                                                        <input type="radio" id="rdoCC3-1" name="cc3" value="4" checked required/>
                                                        <label for="rdoCC3-1">Helped very much</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="rdoCC3-2" name="cc3" value="3" />
                                                        <label for="rdoCC3-2">Somewhat helped</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="rdoCC3-3" name="cc3" value="2" />
                                                        <label for="rdoCC3-3">Did not help</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="rdoCC3-4" name="cc3" value="1" />
                                                        <label for="rdoCC3-4">N/A</label>
                                                    </div>
                                                </div>
                                                <button type="button" onclick="backForm(2,1)" class="btn btn-primary btn-tone m-r-5">Back</button>
                                                <button type="submit" class="btn btn-primary">Next</button>
                                            </form>
                                            <form id="frm-step-3" method="POST" style="display:none;">
                                                <div class="form-group">
                                                    <label for="sqd0"><b>sqd0. I am satisfied with the service that I availed.</b> <span class="text-danger">*</span></label>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd0_strongly_agree" name="sqd0" value="5" checked />
                                                        <label for="sqd0_strongly_agree">Strongly Agree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd0_agree" name="sqd0" value="4" />
                                                        <label for="sqd0_agree">Agree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd0_neither" name="sqd0" value="3" />
                                                        <label for="sqd0_neither">Neither Agree nor Disagree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd0_disagree" name="sqd0" value="2" />
                                                        <label for="sqd0_disagree">Disagree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd0_strongly_disagree" name="sqd0" value="1" />
                                                        <label for="sqd0_strongly_disagree">Strongly Disagree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd0_na" name="sqd0" value="0" />
                                                        <label for="sqd0_na">N/A (Not Applicable)</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sqd1"><b>SQD1. I spent a reasonable amount of time for my transaction.</b> <span class="text-danger">*</span></label>

                                                    <div class="radio">
                                                        <input type="radio" id="sqd1_strongly_agree" name="sqd1" value="5" checked />
                                                        <label for="sqd1_strongly_agree">Strongly Agree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd1_agree" name="sqd1" value="4" />
                                                        <label for="sqd1_agree">Agree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd1_neither" name="sqd1" value="3" />
                                                        <label for="sqd1_neither">Neither Agree nor Disagree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd1_disagree" name="sqd1" value="2" />
                                                        <label for="sqd1_disagree">Disagree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd1_strongly_disagree" name="sqd1" value="1" />
                                                        <label for="sqd1_strongly_disagree">Strongly Disagree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd1_na" name="sqd1" value="0" />
                                                        <label for="sqd1_na">N/A (Not Applicable)</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sqd2"><b>SQD2. The office followed the transaction's requirements and steps based on the information provided.</b> <span class="text-danger">*</span></label>

                                                    <div class="radio">
                                                        <input type="radio" id="sqd2_strongly_agree" name="sqd2" value="5" checked />
                                                        <label for="sqd2_strongly_agree">Strongly Agree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd2_agree" name="sqd2" value="4" />
                                                        <label for="sqd2_agree">Agree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd2_neither" name="sqd2" value="3" />
                                                        <label for="sqd2_neither">Neither Agree nor Disagree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd2_disagree" name="sqd2" value="2" />
                                                        <label for="sqd2_disagree">Disagree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd2_strongly_disagree" name="sqd2" value="1" />
                                                        <label for="sqd2_strongly_disagree">Strongly Disagree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd2_na" name="sqd2" value="0" />
                                                        <label for="sqd2_na">N/A (Not Applicable)</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sqd3"><b>SQD3. The steps I needed to do for my transaction were easy</b> <span class="text-danger">*</span></label>

                                                    <div class="radio">
                                                        <input type="radio" id="sqd3_strongly_agree" name="sqd3" value="5" checked />
                                                        <label for="sqd3_strongly_agree">Strongly Agree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd3_agree" name="sqd3" value="4" />
                                                        <label for="sqd3_agree">Agree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd3_neither" name="sqd3" value="3" />
                                                        <label for="sqd3_neither">Neither Agree nor Disagree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd3_disagree" name="sqd3" value="2" />
                                                        <label for="sqd3_disagree">Disagree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd3_strongly_disagree" name="sqd3" value="1" />
                                                        <label for="sqd3_strongly_disagree">Strongly Disagree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd3_na" name="sqd3" value="0" />
                                                        <label for="sqd3_na">N/A (Not Applicable)</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sqd4"><b>SQD4. I easily found information about my transaction from the office's website.</b> <span class="text-danger">*</span></label>

                                                    <div class="radio">
                                                        <input type="radio" id="sqd4_strongly_agree" name="sqd4" value="5" checked />
                                                        <label for="sqd4_strongly_agree">Strongly Agree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd4_agree" name="sqd4" value="4" />
                                                        <label for="sqd4_agree">Agree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd4_neither" name="sqd4" value="3" />
                                                        <label for="sqd4_neither">Neither Agree nor Disagree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd4_disagree" name="sqd4" value="2" />
                                                        <label for="sqd4_disagree">Disagree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd4_strongly_disagree" name="sqd4" value="1" />
                                                        <label for="sqd4_strongly_disagree">Strongly Disagree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd4_na" name="sqd4" value="0" />
                                                        <label for="sqd4_na">N/A (Not Applicable)</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sqd5"><b>SQD5. I paid a reasonable amount of fees for my transaction. (If service was free, mark the "N/A" column).</b> <span class="text-danger">*</span></label>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd5_strongly_agree" name="sqd5" value="5" checked />
                                                        <label for="sqd5_strongly_agree">Strongly Agree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd5_agree" name="sqd5" value="4" />
                                                        <label for="sqd5_agree">Agree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd5_neither" name="sqd5" value="3" />
                                                        <label for="sqd5_neither">Neither Agree nor Disagree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd5_disagree" name="sqd5" value="2" />
                                                        <label for="sqd5_disagree">Disagree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd5_strongly_disagree" name="sqd5" value="1" />
                                                        <label for="sqd5_strongly_disagree">Strongly Disagree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd5_na" name="sqd5" value="0" />
                                                        <label for="sqd5_na">N/A (Not Applicable)</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sqd6"><b>SQD6. I am confident my online transaction was secure.</b> <span class="text-danger">*</span></label>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd6_strongly_agree" name="sqd6" value="5" checked />
                                                        <label for="sqd6_strongly_agree">Strongly Agree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd6_agree" name="sqd6" value="4" />
                                                        <label for="sqd6_agree">Agree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd6_neither" name="sqd6" value="3" />
                                                        <label for="sqd6_neither">Neither Agree nor Disagree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd6_disagree" name="sqd6" value="2" />
                                                        <label for="sqd6_disagree">Disagree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd6_strongly_disagree" name="sqd6" value="1" />
                                                        <label for="sqd6_strongly_disagree">Strongly Disagree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd6_na" name="sqd6" value="0" />
                                                        <label for="sqd6_na">N/A (Not Applicable)</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sqd7"><b>SQD7. The office's online support was available, and (if asked questions) online support was quick to respond</b> <span class="text-danger">*</span></label>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd7_strongly_agree" name="sqd7" value="5" checked />
                                                        <label for="sqd7_strongly_agree">Strongly Agree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd7_agree" name="sqd7" value="4" />
                                                        <label for="sqd7_agree">Agree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd7_neither" name="sqd7" value="3" />
                                                        <label for="sqd7_neither">Neither Agree nor Disagree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd7_disagree" name="sqd7" value="2" />
                                                        <label for="sqd7_disagree">Disagree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd7_strongly_disagree" name="sqd7" value="1" />
                                                        <label for="sqd7_strongly_disagree">Strongly Disagree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd7_na" name="sqd7" value="0" />
                                                        <label for="sqd7_na">N/A (Not Applicable)</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sqd8"><b>SQD8. I got what I needed from the government office, or (if denied) denial of request was sufficiently explained to me.</b> <span class="text-danger">*</span></label>

                                                    <div class="radio">
                                                        <input type="radio" id="sqd8_strongly_agree" name="sqd8" value="5" checked />
                                                        <label for="sqd8_strongly_agree">Strongly Agree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd8_agree" name="sqd8" value="4" />
                                                        <label for="sqd8_agree">Agree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd8_neither" name="sqd8" value="3" />
                                                        <label for="sqd8_neither">Neither Agree nor Disagree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd8_disagree" name="sqd8" value="2" />
                                                        <label for="sqd8_disagree">Disagree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd8_strongly_disagree" name="sqd8" value="1" />
                                                        <label for="sqd8_strongly_disagree">Strongly Disagree</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" id="sqd8_na" name="sqd8" value="0" />
                                                        <label for="sqd8_na">N/A (Not Applicable)</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="suggestions"><b>Suggestions on how we can further improve our services:</b> <small>(optional)</small></label>
                                                    <textarea class="form-control" id="suggestions" name="suggestions"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email"><b>Email address:</b> <small>(optional)</small></label>
                                                    <input type="email" class="form-control" id="email" name="email">
                                                </div>
                                                <button type="button" onclick="backForm(3,2)" class="btn btn-primary btn-tone m-r-5">Back</button>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-md-flex p-h-40 justify-content-between">
                        <span class="">2024 DOST 10 - ROCJ</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Core Vendors JS -->
        <script src="<?=base_url('assets/js/vendors.min.js')?>"></script>

        <!-- page js -->
        <script src="<?=base_url('assets/vendors/select2/select2.min.js')?>"></script>

        <!-- Core JS -->
        <script src="<?=base_url('assets/js/app.min.js')?>"></script>

        <script>
            $(document).ready(function () {
                $('.select2').select2();
                var frm1data;
                var frm2data;
                var frm3data;

                $("#frm-step-1").submit(function (e) { 
                    frm1data = $("#frm-step-1").serializeArray();
                    console.log(frm1data);
                    $("#frm-step-1").hide();
                    $("#frm-step-2").show();
                    e.preventDefault();
                });

                $("#frm-step-2").submit(function (e) {
                    frm2data = $("#frm-step-2").serializeArray();
                    console.log(frm2data);
                    $("#frm-step-2").hide();
                    $("#frm-step-3").show();
                    e.preventDefault();
                });

                $("#frm-step-3").submit(function (e) {
                    frm3data = $("#frm-step-3").serializeArray();
                    console.log(frm3data);

                    $.post(BASE_URL+"survey/save",{
                        form1:frm1data,
                        form2:frm2data,
                        form3:frm3data
                    },function(data){
                        if (data == "SUCCESS") {
                            
                        }
                    });
                    e.preventDefault();
                });
            });

            function backForm(current,previous){
                $("#frm-step-"+previous).show();
                $("#frm-step-"+current).hide();
            }
        </script>

    </body>
</html>