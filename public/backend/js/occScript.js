/*
 @This file contains the Javascript of backend
 @OCCS version 1.0
 @laravel version 5.3
 @author Olivine Limited (www.olivineltd.com)
 @last-modified 11/3/17
 */
function getThanaBackend(id) {
    var thana_district_id = id;
    if (thana_district_id !== '') {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: "/getThanaBackend",
            dataType: 'json',
            data: {
                thana_district_id: thana_district_id
            },
            success: function (response) {
                var obj = response;
                if (obj.output === "success") {
                    var html = '<select onchange="" class="form-control" id="municipality_thana_id" name="municipality_thana_id"><option value=""> -- </option>';

                    $.each(obj.thanaList, function (key, Event) {
                        html += '<option value="' + Event.thana_track_id + '">' + Event.thana_name_bn + '</option>';
                    });

                    html += '</select>';
                    $("#thanaDiv").html(html);
                } else {
                    alert(obj.msg);
                }
            }
        });
    } else {
        alert('দয়া করে প্রথমে জেলা নির্বাচন করুন');
    }
}

/*
 * Councilor Registration
 */

function getDistrict(id) {
    var district_division_id = id;
    if (district_division_id !== '') {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: "/getDistrict",
            dataType: 'json',
            data: {
                district_division_id: district_division_id
            },
            success: function (response) {
                var obj = response;
                if (obj.output === "success") {
                    var html = '<select onchange="javascript:getPostOffice(this.value); javascript:getThana(this.value); javascript:getMunicipality(this.value)"  class="form-control" id="district_id" name="district_id"><option value=""> -- </option>';

                    $.each(obj.districtList, function (key, Event) {
                        html += '<option value="' + Event.district_track_id + '">' + Event.district_name_bn + '</option>';
                    });

                    html += '</select>';
                    $("#districtDiv").html(html);
                } else {
                    alert(obj.msg);
                }
            }
        });
    } else {
        alert('দয়া করে প্রথমে বিভাগ নির্বাচন করুন');
    }
}

function getDistrict1(id) {
    var district_division_id = id;
    if (district_division_id !== '') {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: "/getDistrict",
            dataType: 'json',
            data: {
                district_division_id: district_division_id
            },
            success: function (response) {
                var obj = response;
                if (obj.output === "success") {
                    var html = '<select onchange="javascript:getPostOffice1(this.value); javascript:getThana1(this.value); javascript:getMunicipality1(this.value)"  class="form-control" id="permanent_address_district_id" name="permanent_address_district_id"><option value=""> -- </option>';

                    $.each(obj.districtList, function (key, Event) {
                        html += '<option value="' + Event.district_track_id + '">' + Event.district_name_bn + '</option>';
                    });

                    html += '</select>';
                    $("#districtDiv1").html(html);
                } else {
                    alert(obj.msg);
                }
            }
        });
    } else {
        alert('দয়া করে প্রথমে বিভাগ নির্বাচন করুন');
    }
}

function getThana(id) {
    var thana_district_id = id;
    if (thana_district_id !== '') {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: "/getThana",
            dataType: 'json',
            data: {
                thana_district_id: thana_district_id
            },
            success: function (response) {
                var obj = response;
                if (obj.output === "success") {
                    var html = '<select onchange="javascript:getMunicipality(this.value)" class="form-control" id="thana_id" name="thana_id"><option value=""> -- </option>';

                    $.each(obj.thanaList, function (key, Event) {
                        html += '<option value="' + Event.thana_track_id + '">' + Event.thana_name_bn + '</option>';
                    });

                    html += '</select>';
                    $("#thanaDiv").html(html);
                } else {
                    alert(obj.msg);
                }
            }
        });
    } else {
        alert('দয়া করে প্রথমে জেলা নির্বাচন করুন');
    }
}
function getThana1(id) {
    var thana_district_id = id;
    if (thana_district_id !== '') {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: "/getThana",
            dataType: 'json',
            data: {
                thana_district_id: thana_district_id
            },
            success: function (response) {
                var obj = response;
                if (obj.output === "success") {
                    var html = '<select onchange="javascript:getMunicipality1(this.value)" class="form-control" id="permanent_address_thana_id" name="permanent_address_thana_id"><option value=""> -- </option>';

                    $.each(obj.thanaList, function (key, Event) {
                        html += '<option value="' + Event.thana_track_id + '">' + Event.thana_name_bn + '</option>';
                    });

                    html += '</select>';
                    $("#thanaDiv1").html(html);
                } else {
                    alert(obj.msg);
                }
            }
        });
    } else {
        alert('দয়া করে প্রথমে জেলা নির্বাচন করুন');
    }
}
function getPostOffice(id) {
    var post_office_district_id = id;
    if (post_office_district_id !== '') {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: "/getPostOffice",
            dataType: 'json',
            data: {
                post_office_district_id: post_office_district_id
            },
            success: function (response) {
                var obj = response;
                if (obj.output === "success") {
                    var html = '<select class="form-control" id="post_office_id" name="post_office_id"><option value=""> -- </option>';

                    $.each(obj.postOfficeList, function (key, Event) {
                        html += '<option value="' + Event.post_office_track_id + '">' + Event.post_office_name_bn + ' ( ' + Event.post_office_code_bn + ' ) ' + '</option>';
                    });

                    html += '</select>';
                    $("#postOfficeDiv").html(html);
                } else {
                    alert(obj.msg);
                }
            }
        });
    } else {
        alert('দয়া করে প্রথমে জেলা নির্বাচন করুন');
    }
}
function getPostOffice1(id) {
    var post_office_district_id = id;
    if (post_office_district_id !== '') {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: "/getPostOffice",
            dataType: 'json',
            data: {
                post_office_district_id: post_office_district_id
            },
            success: function (response) {
                var obj = response;
                if (obj.output === "success") {
                    var html = '<select class="form-control" id="permanent_address_post_office_id" name="permanent_address_post_office_id"><option value=""> -- </option>';

                    $.each(obj.postOfficeList, function (key, Event) {
                        html += '<option value="' + Event.post_office_track_id + '">' + Event.post_office_name_bn + ' ( ' + Event.post_office_code_bn + ' ) ' + '</option>';
                    });

                    html += '</select>';
                    $("#postOfficeDiv1").html(html);
                } else {
                    alert(obj.msg);
                }
            }
        });
    } else {
        alert('দয়া করে প্রথমে জেলা নির্বাচন করুন');
    }
}

function getMunicipality(id) {
    var municipality_thana_id = id;
    if (municipality_thana_id !== '') {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: "/getMunicipality",
            dataType: 'json',
            data: {
                municipality_thana_id: municipality_thana_id
            },
            success: function (response) {
                var obj = response;
                if (obj.output === "success") {
                    var html = '<select class="form-control" id="municipality_id" name="municipality_id"><option value=""> -- </option>';

                    $.each(obj.municipalityList, function (key, Event) {
                        html += '<option value="' + Event.municipality_track_id + '">' + Event.municipality_name_bn + '</option>';
                    });

                    html += '</select>';
                    $("#municipalityDiv").html(html);
                } else {
                    alert(obj.msg);
                }
            }
        });
    } else {
        alert('দয়া করে প্রথমে থানা নির্বাচন করুন');
    }
}

function getMunicipality1(id) {
    var municipality_thana_id = id;
    if (municipality_thana_id !== '') {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: "/getMunicipality",
            dataType: 'json',
            data: {
                municipality_thana_id: municipality_thana_id
            },
            success: function (response) {
                var obj = response;
                if (obj.output === "success") {
                    var html = '<select class="form-control" id="permanent_address_municipality_id" name="permanent_address_municipality_id"><option value=""> -- </option>';

                    $.each(obj.municipalityList, function (key, Event) {
                        html += '<option value="' + Event.municipality_track_id + '">' + Event.municipality_name_bn + '</option>';
                    });

                    html += '</select>';
                    $("#municipalityDiv1").html(html);
                } else {
                    alert(obj.msg);
                }
            }
        });
    } else {
        alert('দয়া করে প্রথমে থানা নির্বাচন করুন');
    }
}

function getPdfcertificate(id, lang) {
    var certificate_generation_religion = id;
    if (certificate_generation_religion !== '') {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: "/getPdfcertificate",
            dataType: 'json',
            data: {
                certificate_generation_religion: certificate_generation_religion
            },
            success: function (response) {
                var obj = response;
                if (obj.output === "success") {
                    if (lang === 1) {
                        var html = '<select class="form-control" id="certificate_generation_type" name="certificate_generation_type"><option value=""> -- </option>';

                        $.each(obj.dataList, function (key, Event) {
                            html += '<option value="' + Event.make_certificate_track_id + '">' + Event.make_certificate_type_bn + '</option>';
                        });
                        html += '</select>';
                        $("#pdfDiv").html(html);
                    } else {
                        var html = '<select class="form-control" id="certificate_generation_type" name="certificate_generation_type"><option value=""> -- </option>';

                        $.each(obj.dataList, function (key, Event) {
                            html += '<option value="' + Event.make_certificate_track_id + '">' + Event.make_certificate_type + '</option>';
                        });
                        html += '</select>';
                        $("#pdfDiv").html(html);
                    }
                } else {
                    alert(obj.msg);
                }
            }
        });
    } else {

    }
}

/*
 * Warish Certificate Type query
 */
function getWarishcertificate(id, lang) {
    var certificate_generation_religion = id;
    if (certificate_generation_religion !== '') {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: "/getPdfcertificate",
            dataType: 'json',
            data: {
                certificate_generation_religion: certificate_generation_religion
            },
            success: function (response) {
                var obj = response;
                if (obj.output === "success") {
                    if (lang === 1) {
                        var html = '<option value=""> -- </option>';
                        $.each(obj.dataList, function (key, Event) {
                            html += '<option value="' + Event.make_certificate_track_id + '">' + Event.make_certificate_type_bn + '</option>';
                        });
                        $("#warish_attachment_certificate_id").html(html);
                        $("#warish_attachment_certificate_id").removeClass('errorInput');
                        $("#warish_attachment_file").val('');
                        $("#warish_attachment_file").removeClass('errorInput');
                        $(".deadAttachment").find(".warish_attachment_certificate_id").html(html);
                    } else {
                        var html = '<option value=""> -- </option>';
                        $.each(obj.dataList, function (key, Event) {
                            html += '<option value="' + Event.make_certificate_track_id + '">' + Event.make_certificate_type + '</option>';
                        });
                        $("#warish_attachment_certificate_id").html(html);
                        $("#warish_attachment_certificate_id").removeClass('errorInput');
                        $("#warish_attachment_file").val('');
                        $("#warish_attachment_file").removeClass('errorInput');
                        $(".deadAttachment").find(".warish_attachment_certificate_id").html(html);
                    }
                } else {
                    alert(obj.msg);
                }
            }
        });
    } else {
        var html = '<option value=""> -- </option>';
        var fieldHTML = $(".defaultDeadAttachment").html();
        $("#attachmentDiv").html(fieldHTML);
        $("#warish_attachment_certificate_id").html(html);
        $("#warish_attachment_file").val('');
        $(".deadAttachment").find(".warish_attachment_certificate_id").html(html);
    }
    $(".defaultDeadAttachment").siblings(".attachment").remove();
}


var finalEnlishToBanglaNumber = {'0': '০', '1': '১', '2': '২', '3': '৩', '4': '৪', '5': '৫', '6': '৬', '7': '৭', '8': '৮', '9': '৯'};

String.prototype.getDigitBanglaFromEnglish = function () {
    var retStr = this;
    for (var x in finalEnlishToBanglaNumber) {
        retStr = retStr.replace(new RegExp(x, 'g'), finalEnlishToBanglaNumber[x]);
    }
    return retStr;
};


/*
 * Calculate Certificate Type Wise Cost
 */
function calculateCertificateType(id) {
    var certificateType = id;
    var certificateCost = '';

    if (certificateType == 'Bangla') {
        $("#setCertificateType").text('বাংলা');
        certificateCost = $("#application_certificate_cost_bangla").val();
        var bangla_converted_number = certificateCost.getDigitBanglaFromEnglish();
        $("#setCertificatePrice, .setCertificatePrice").text(bangla_converted_number + '৳');
    } else if (certificateType == 'English') {
        $("#setCertificateType").text('ইংরেজি');
        certificateCost = $("#application_certificate_cost_english").val();
        var bangla_converted_number = certificateCost.getDigitBanglaFromEnglish();
        $("#setCertificatePrice, .setCertificatePrice").text(bangla_converted_number + '৳');
    } else {
        $("#setCertificatePrice").text('০৳');
        $("#setCertificateType").text('');
    }
}
/*
 * Certificate Cost Calculation
 */
function calculateCost(type) {
    var certificateType = $("#application_certificate_type").val();
    var deliveryType = $("#application_delivery_mode").val();
    var vatCost = parseFloat($("#system_settings_vat_cost").val()) / 100;
    var certificateCost = '';
    var deliveryCost = '';
    var emergencyCost = '';
    var paymentModeCost = '';
    var applicationType = $("#application_type").val();
    var paymentModeType = $("#application_payment_mode").val();

    if (certificateType == '') {
        $("#application_certificate_type").addClass("errorInput");
        $("#application_delivery_mode").val('');
        $("#application_type").val('');
        $("#application_vat_cost").val('');
        $("#application_payment_cost").val('');
        $("#application_emergency_cost").val('');
        $("#application_delivery_cost").val('');
        $("#application_sub_total_cost").val('');
        $("#application_total_cost").val('');
        $("#total-price").text('0৳');
        $("#sub-total").text('0৳');
        $("#vat-cost").text('0৳');
        $("#total-cost").text('0৳');
        $("#application_type").val('');
        $("#deliveryAddress").hide();
        $("#show_delivery_cost").hide();
        $("#show_emergency_cost").hide();
        $("#show_payment_cost").hide();
    } else {
        if (certificateType == 'Bangla') {
            certificateCost = $("#application_certificate_cost_bangla").val();
        } else {
            certificateCost = $("#application_certificate_cost_english").val();
        }
        var deliveryMode = deliveryType;
        var totalCost = 0;
        var thirdCost = 0;
        var subTotalCost = 0;

        var ctlTotalCost = $("#application_total_cost");
        var ctlAppSubTotal = $("#application_sub_total_cost");
        if (deliveryMode == 'Via Post') {

            if (applicationType == 'Emergency') {
                emergencyCost = $("#emergencyCost").val();
                var bangla_emergencyCost = emergencyCost.getDigitBanglaFromEnglish();
                $("#application_emergency_cost").val(emergencyCost);
                $("#show_emergency_cost").show();

                if (paymentModeType == 'Online') {
                    paymentModeCost = $("#paymentModeCost").val();
                    $("#show_payment_cost").show();
                } else {

                    paymentModeCost = 0;
                    $("#show_payment_cost").hide();
                }

            } else {
                emergencyCost = 0;
                var bangla_emergencyCost = '০';
                $("#application_emergency_cost").val(emergencyCost);
                $("#show_emergency_cost").hide();

                if (paymentModeType == 'Online') {
                    paymentModeCost = $("#paymentModeCost").val();
                    $("#show_payment_cost").show();
                } else {

                    paymentModeCost = 0;
                    $("#show_payment_cost").hide();
                }
            }

            deliveryCost = $("#deliveryCost").val();
            var bangla_deliveryCost = deliveryCost.getDigitBanglaFromEnglish();
            $("#setDeliveryCost ,.setDeliveryCost").text(bangla_deliveryCost + '৳');
            $("#setEmergencyCost, .setEmergencyCost").text(bangla_emergencyCost + '৳');
            $("#application_delivery_cost").val(deliveryCost);

            subTotalCost = parseFloat(certificateCost) + parseFloat(deliveryCost) + parseFloat(emergencyCost);
            $("#bangla_subTotalCost").val(subTotalCost);
            var bangla_subTotalCost = $("#bangla_subTotalCost").val().getDigitBanglaFromEnglish();

            var totalVatCost = Math.ceil(parseFloat(subTotalCost) * parseFloat(vatCost));
            $("#bangla_totalVatCost").val(totalVatCost);
            var bangla_totalVatCost = $("#bangla_totalVatCost").val().getDigitBanglaFromEnglish();

            thirdCost = Math.ceil(parseFloat(totalVatCost) + parseFloat(subTotalCost));

            var totalSslCost = Math.ceil((parseFloat(thirdCost) * parseFloat(paymentModeCost)) / 100);
            $("#bangla_totalSslCost").val(totalSslCost);
            var bangla_totalSslCost = $("#bangla_totalSslCost").val().getDigitBanglaFromEnglish();

            totalCost = Math.ceil(parseFloat(totalSslCost) + parseFloat(thirdCost));
            $("#bangla_totalCost").val(totalCost);
            var bangla_totalCost = $("#bangla_totalCost").val().getDigitBanglaFromEnglish();

            $("#application_vat_cost").val(totalVatCost);
            $("#application_payment_cost").val(totalSslCost);
            $("#setPaymentModeCost, .setPaymentModeCost").text(bangla_totalSslCost + '৳');
            $("#total-price, .total-price").text(bangla_totalCost + '৳');
            $("#sub-total").text(bangla_subTotalCost + '৳');
            $("#vat-cost, .vat-cost").text(bangla_totalVatCost + '৳');
            ctlTotalCost.val(totalCost);
            ctlAppSubTotal.val(subTotalCost);
            $("#show_delivery_cost").show();
        } else {
            if (applicationType == 'Emergency') {
                emergencyCost = $("#emergencyCost").val();
                var bangla_emergencyCost = emergencyCost.getDigitBanglaFromEnglish();
                $("#application_emergency_cost").val(emergencyCost);
                $("#show_emergency_cost").show();

                if (paymentModeType == 'Online') {
                    paymentModeCost = $("#paymentModeCost").val();
                    $("#show_payment_cost").show();
                } else {

                    paymentModeCost = 0;
                    $("#show_payment_cost").hide();
                }

            } else {
                emergencyCost = 0;
                var bangla_emergencyCost = '০';
                $("#application_emergency_cost").val(emergencyCost);
                $("#show_emergency_cost").hide();

                if (paymentModeType == 'Online') {
                    paymentModeCost = $("#paymentModeCost").val();
                    $("#show_payment_cost").show();
                } else {

                    paymentModeCost = 0;
                    $("#show_payment_cost").hide();
                }
            }

            deliveryCost = 0;
            var bangla_deliveryCost = '০';
            $("#setDeliveryCost ,.setDeliveryCost").text('০৳');
            $("#setEmergencyCost, .setEmergencyCost").text(bangla_emergencyCost + '৳');
            $("#application_delivery_cost").val(deliveryCost);

            subTotalCost = parseFloat(certificateCost) + parseFloat(deliveryCost) + parseFloat(emergencyCost);
            $("#bangla_subTotalCost").val(subTotalCost);
            var bangla_subTotalCost = $("#bangla_subTotalCost").val().getDigitBanglaFromEnglish();

            var totalVatCost = Math.ceil(parseFloat(subTotalCost) * parseFloat(vatCost));
            $("#bangla_totalVatCost").val(totalVatCost);
            var bangla_totalVatCost = $("#bangla_totalVatCost").val().getDigitBanglaFromEnglish();

            thirdCost = Math.ceil(parseFloat(totalVatCost) + parseFloat(subTotalCost));

            var totalSslCost = Math.ceil((parseFloat(thirdCost) * parseFloat(paymentModeCost)) / 100);
            $("#bangla_totalSslCost").val(totalSslCost);
            var bangla_totalSslCost = $("#bangla_totalSslCost").val().getDigitBanglaFromEnglish();


            totalCost = Math.ceil(parseFloat(totalSslCost) + parseFloat(thirdCost));
            $("#bangla_totalCost").val(totalCost);
            var bangla_totalCost = $("#bangla_totalCost").val().getDigitBanglaFromEnglish();

            $("#application_vat_cost").val(totalVatCost);
            $("#application_payment_cost").val(totalSslCost);
            $("#setPaymentModeCost, .setPaymentModeCost").text(bangla_totalSslCost + '৳');
            $("#total-price, .total-price").text(bangla_totalCost + '৳');
            $("#sub-total").text(bangla_subTotalCost + '৳');
            $("#vat-cost, .vat-cost").text(bangla_totalVatCost + '৳');
            ctlTotalCost.val(totalCost);
            ctlAppSubTotal.val(subTotalCost);
            $("#show_delivery_cost").hide();
        }
    }
}

/*
 * Other Address show
 */

$(document).ready(function () {
    $('input[type="radio"]').click(function () {
        if ($(this).attr('id') == 'others_address') {
            $('#othersAddress').show();
        } else {
            $('#othersAddress').hide();
        }
    });
});

/*
 * Application delivery mode
 */
$(document).ready(function () {
    $('#application_delivery_mode').on('change', function () {
        if (this.value == 'Via Post')
        {
            $("#deliveryAddress").show();
        } else
        {
            $("#deliveryAddress").hide();
        }
    });
});