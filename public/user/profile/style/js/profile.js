$(document).ready(function () {
  $(function () {
    $(".profile-toggle").click(function () {
      $(".basicShow").add($(".basicEdit")).toggleClass("dn");
    });
  });
  $(function () {
    $(".expect-toggle").click(function () {
      $(".expectAdd").add($(".expectEdit")).toggleClass("dn");
    });
  });
  $(function () {
    $(".experience-toggle").click(function () {
      $(".experienceAdd").add($(".experienceEdit")).toggleClass("dn");
    });
  });
  $(function () {
    $(".project-toggle").click(function () {
      $(".projectAdd").add($(".projectEdit")).toggleClass("dn");
    });
  });
  $(function () {
    $(".education-toggle").click(function () {
      $(".educationalAdd").add($(".educationalEdit")).toggleClass("dn");
    });
  });
  $(function () {
    $(".showcase-toggle").click(function () {
      $(".workAdd").add($(".workEdit")).toggleClass("dn");
    });
  });
  $(function () {
    $(".description-toggle").click(function () {
      $(".descriptionShow").add($(".descriptionEdit")).toggleClass("dn");
    });
  });

  var loc = new locationInfo();
  loc.getCountries();

  $("body").on("change", 'select.countries', function(ev) {
    var countryId = jQuery("option:selected", this).attr('countryid');
    if (countryId != '') {
      loc.getStates(countryId);
    } else {
      jQuery(".states option:gt(0)").remove();
    }
  });
  $("body").on("change", 'select.states', function(ev) {
    var stateId = jQuery("option:selected", this).attr('stateid');
    if (stateId != '') {
      loc.getCities(stateId);
    } else {
      jQuery(".cities option:gt(0)").remove();
    }
  });
  $("body").on("change", 'select.cities', function(ev) {
    var cityId = jQuery("option:selected", this).val();
    if (cityId != '') {
      loc.confCity(cityId);
    }
  });

  var expect_location_num = 1;

  $(function() {
    $("#expect-new-add").click(function () {
      var num = ++expect_location_num;
      var new_city = "<tr><td><select name='countries[]' class='countries form-control profile_select_287 profile_select_normal' id='countryId'><option id = 'selecountry' selected = 'selected' ></option><option v-for='country in location.country' id = 'selectcountry'   v-bind:value=country.id></option></select></td><td><select name='states[]'  onchange = 'stateid()' class='states form-control profile_select_287 profile_select_normal' id='stateId'><option id = 'selestate'  selected = 'selected' ></option><option v-for='state in location.state' id = 'selectstate'   v-bind:value=state.id></option></select></td></tr><tr><td><select name='cities[]' class='cities form-control profile_select_287 profile_select_normal' id='cityId'><option id = 'selecity  selected='selected' ></option><option v-for='city in location.city' id = 'selectcity'   v-bind:value=city.name></option></select></td></tr>";
      $(".countries").removeAttr('id').toggleClass('countries');
      $(".states").removeAttr('id').toggleClass('states');
      $(".cities").removeAttr('id').toggleClass('cities');
      $("#expect-new-add-city").append(new_city);
      loc.getCountries();
    });
  });



  function ajaxCall() {
    this.send = function(data, url, method, success, type) {
      type = type || 'json';
      var successRes = function(data) {
        success(data);
      }
      var errorRes = function(e) {
        console.log(e);
      }
      jQuery.ajax({
        url: url,
        type: method,
        data: data,
        success: successRes,
        error: errorRes,
        dataType: type,
        timeout: 60000
      });
    }
  }

  function locationInfo() {
    var rootUrl = "//geodata.solutions/api/api.php";
    var username = 'demo';
    var ordering = 'name';
    var addParams = '';
    if (jQuery("#gds_appid").length > 0) {
      addParams += '&appid=' + jQuery("#gds_appid").val();
    }
    if (jQuery("#gds_hash").length > 0) {
      addParams += '&hash=' + jQuery("#gds_hash").val();
    }
    var call = new ajaxCall();
    this.confCity = function(id) {
      var url = rootUrl + '?type=confCity&countryId=' + jQuery('#countryId option:selected').attr('countryid') + '&stateId=' + jQuery('#stateId option:selected').attr('stateid') + '&cityId=' + id;
      var method = "post";
      var data = {};
      call.send(data, url, method, function(data) {
        if (data) {} else {}
      });
    };
    this.getCities = function(id) {
      jQuery(".cities option:gt(0)").remove();
      var stateClasses = jQuery('#cityId').attr('class');
      var cC = stateClasses.split(" ");
      cC.shift();
      var addClasses = '';
      if (cC.length > 0) {
        acC = cC.join();
        addClasses = '&addClasses=' + encodeURIComponent(acC);
      }
      var url = rootUrl + '?type=getCities&countryId=' + jQuery('#countryId option:selected').attr('countryid') + '&stateId=' + id + addParams + addClasses;
      var method = "post";
      var data = {};
      jQuery('.cities').find("option:eq(0)").html("Please wait..");
      call.send(data, url, method, function(data) {
        jQuery('.cities').find("option:eq(0)").html("Select City");
        if (data.tp == 1) {
          if (data.hits > 1000) {
            console.log('Daily geodata.solutions request limit exceeded count:' + data.hits + ' of 1000');
          } else {
            console.log('Daily geodata.solutions request count:' + data.hits + ' of 1000')
          }
          var listlen = Object.keys(data['result']).length;
          if (listlen > 0) {
            jQuery.each(data['result'], function(key, val) {
              var option = jQuery('<option />');
              option.attr('value', val).text(val);
              jQuery('.cities').append(option);
            });
          } else {
            var usestate = jQuery('#stateId option:selected').val();
            var option = jQuery('<option />');
            option.attr('value', usestate).text(usestate);
            option.attr('selected', 'selected');
            jQuery('.cities').append(option);
          }
          jQuery(".cities").prop("disabled", false);
        } else {
          alert(data.msg);
        }
      });

    };
    this.getStates = function(id) {
      jQuery(".states option:gt(0)").remove();
      jQuery(".cities option:gt(0)").remove();
      var stateClasses = jQuery('#stateId').attr('class');
      var cC = stateClasses.split(" ");
      cC.shift();
      var addClasses = '';
      if (cC.length > 0) {
        acC = cC.join();
        addClasses = '&addClasses=' + encodeURIComponent(acC);
      }
      var url = rootUrl + '?type=getStates&countryId=' + id + addParams + addClasses;
      var method = "post";
      var data = {};
      jQuery('.states').find("option:eq(0)").html("Please wait..");
      call.send(data, url, method, function(data) {
        jQuery('.states').find("option:eq(0)").html("Select State");
        if (data.tp == 1) {
          if (data.hits > 1000) {
            console.log('Daily geodata.solutions request limit exceeded:' + data.hits + ' of 1000');
          } else {
            console.log('Daily geodata.solutions request count:' + data.hits + ' of 1000')
          }
          jQuery.each(data['result'], function(key, val) {
            var option = jQuery('<option />');
            option.attr('value', val).text(val);
            option.attr('stateid', key);
            jQuery('.states').append(option);
          });
          jQuery(".states").prop("disabled", false);
        } else {
          alert(data.msg);
        }
      });
    };
    this.getCountries = function() {
      var countryClasses = jQuery('#countryId').attr('class');
      var cC = countryClasses.split(" ");
      cC.shift();
      var addClasses = '';
      if (cC.length > 0) {
        acC = cC.join();
        addClasses = '&addClasses=' + encodeURIComponent(acC);
      }
      var presel = false;
      var iip = 'N';
      jQuery.each(cC, function(index, value) {
        if (value.match("^presel-")) {
          presel = value.substring(7);
        }
        if (value.match("^presel-byi")) {
          var iip = 'Y';
        }
      });
      var url = rootUrl + '?type=getCountries' + addParams + addClasses;
      var method = "post";
      var data = {};
      jQuery('.countries').find("option:eq(0)").html("Please wait..");
      call.send(data, url, method, function(data) {
        jQuery('.countries').find("option:eq(0)").html("Select Country");
        if (data.tp == 1) {
          if (data.hits > 1000) {
            console.log('Daily geodata.solutions request limit exceeded:' + data.hits + ' of 1000');
          } else {
            console.log('Daily geodata.solutions request count:' + data.hits + ' of 1000')
          }
          if (presel == 'byip') {
            presel = data['presel'];
            console.log('2 presel is set as ' + presel);
          }
          if (jQuery.inArray("group-continents", cC) > -1) {
            var $select = jQuery('.countries');
            console.log(data['result']);
            jQuery.each(data['result'], function(i, optgroups) {
              var $optgroup = jQuery("<optgroup>", {
                label: i
              });
              if (optgroups.length > 0) {
                $optgroup.appendTo($select);
              }
              jQuery.each(optgroups, function(groupName, options) {
                var coption = jQuery('<option />');
                coption.attr('value', options.name).text(options.name);
                coption.attr('countryid', options.id);
                if (presel) {
                  if (presel.toUpperCase() == options.id) {
                    coption.attr('selected', 'selected');
                  }
                }
                coption.appendTo($optgroup);
              });
            });
          } else {
            jQuery.each(data['result'], function(key, val) {
              var option = jQuery('<option />');
              option.attr('value', val).text(val);
              option.attr('countryid', key);
              if (presel) {
                if (presel.toUpperCase() == key) {
                  option.attr('selected', 'selected');
                }
              }
              jQuery('.countries').append(option);
            });
          }
          if (presel) {
            jQuery('.countries').trigger('change');
          }
          jQuery(".countries").prop("disabled", false);
        } else {
          alert(data.msg);
        }
      });
    };
  }

});
