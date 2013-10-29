
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="HandheldFriendly" content="true" />
<title>Form</title>
<link href="http://cdn.jotfor.ms/static/formCss.css?3.1.322" rel="stylesheet" type="text/css" />
<link type="text/css" media="print" rel="stylesheet" href="http://cdn.jotfor.ms/css/printForm.css?3.1.322" />
<style type="text/css">
    .form-label{
        width:150px !important;
    }
    .form-label-left{
        width:150px !important;
    }
    .form-line{
        padding-top:12px;
        padding-bottom:12px;
    }
    .form-label-right{
        width:150px !important;
    }
    body, html{
        margin:0;
        padding:0;
        background:false;
    }

    .form-all{
        margin:0px auto;
        padding-top:0px;
        width:710px;
        color:#555 !important;
        font-family:'Verdana';
        font-size:12px;
    }
</style>

<link type="text/css" rel="stylesheet" href="http://jotform.co/css/styles/buttons/form-submit-button-light_rounded.css?3.1.322"/>
<script src="http://cdn.jotfor.ms/js/vendor/imageinfo.js?v=3.1.322" type="text/javascript"></script>
<script src="http://cdn.jotfor.ms/static/jotform.js?3.1.322" type="text/javascript"></script>
<script type="text/javascript">
   JotForm.init(function(){
      $('input_7').hint('ex: myname@example.com');
   });
</script>
</head>
<body>
<form class="jotform-form" action="" method="post" enctype="multipart/form-data" name="form_32933155844862" id="32933155844862" accept-charset="utf-8">
  <input type="hidden" name="formID" value="32933155844862" />
  <div class="form-all">
    <ul class="form-section">
      <li id="cid_1" class="form-input-wide">
        <div class="form-header-group">
          <h1 id="header_1" class="form-header">
            Add Association Members
          </h1>
        </div>
      </li>
      <li id="cid_2" class="form-input-wide">
        <div class="form-header-group">
          <h2 id="header_2" class="form-header">
            Concern Information
          </h2>
        </div>
      </li>
      <li class="form-line" id="id_3">
        <label class="form-label-left" id="label_3" for="input_3">
          Concern Name<span class="form-required">*</span>
        </label>
        <div id="cid_3" class="form-input">
          <input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_3" name="q3_concernName" size="20" value="" />
        </div>
      </li>
      <li class="form-line" id="id_4">
        <label class="form-label-left" id="label_4" for="input_4">
          Region<span class="form-required">*</span>
        </label>
        <div id="cid_4" class="form-input">
          <select class="form-dropdown validate[required]" style="width:150px" id="input_4" name="q4_region">
            <option value="">  </option>
            <option value="Option 1"> Option 1 </option>
            <option value="Option 2"> Option 2 </option>
            <option value="Option 3"> Option 3 </option>
          </select>
        </div>
      </li>
      <li class="form-line" id="id_5">
        <label class="form-label-left" id="label_5" for="input_5">
          ESTD ON Year<span class="form-required">*</span>
        </label>
        <div id="cid_5" class="form-input">
          <select class="form-dropdown validate[required]" style="width:150px" id="input_5" name="q5_estdOn">
            <option value="">  </option>
            <option value="Option 1"> Option 1 </option>
            <option value="Option 2"> Option 2 </option>
            <option value="Option 3"> Option 3 </option>
          </select>
        </div>
      </li>
      <li class="form-line" id="id_6">
        <label class="form-label-left" id="label_6" for="input_6">
          Address<span class="form-required">*</span>
        </label>
        <div id="cid_6" class="form-input">
          <table summary="" class="form-address-table" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="2"><span class="form-sub-label-container"><input class="form-textbox validate[required] form-address-line" type="text" name="q6_address6[addr_line1]" id="input_6_addr_line1" />
                  <label class="form-sub-label" for="input_6_addr_line1" id="sublabel_6_addr_line1"> Street Address </label></span>
              </td>
            </tr>
            <tr>
              <td colspan="2"><span class="form-sub-label-container"><input class="form-textbox form-address-line" type="text" name="q6_address6[addr_line2]" id="input_6_addr_line2" size="46" />
                  <label class="form-sub-label" for="input_6_addr_line2" id="sublabel_6_addr_line2"> Street Address Line 2 </label></span>
              </td>
            </tr>
            <tr>
              <td width="50%"><span class="form-sub-label-container"><input class="form-textbox validate[required] form-address-city" type="text" name="q6_address6[city]" id="input_6_city" size="21" />
                  <label class="form-sub-label" for="input_6_city" id="sublabel_6_city"> City </label></span>
              </td>
              <td><span class="form-sub-label-container"><input class="form-textbox validate[required] form-address-state" type="text" name="q6_address6[state]" id="input_6_state" size="22" />
                  <label class="form-sub-label" for="input_6_state" id="sublabel_6_state"> State / Province </label></span>
              </td>
            </tr>
            <tr>
              <td width="50%"><span class="form-sub-label-container"><input class="form-textbox validate[required] form-address-postal" type="text" name="q6_address6[postal]" id="input_6_postal" size="10" />
                  <label class="form-sub-label" for="input_6_postal" id="sublabel_6_postal"> Postal / Zip Code </label></span>
              </td>
              <td><span class="form-sub-label-container"><select class="form-dropdown validate[required] form-address-country" name="q6_address6[country]" id="input_6_country">
                    <option value="India" selected> India </option>
                  </select>
                  <label class="form-sub-label" for="input_6_country" id="sublabel_6_country"> Country </label></span>
              </td>
            </tr>
          </table>
        </div>
      </li>
      <li class="form-line" id="id_7">
        <label class="form-label-left" id="label_7" for="input_7">
          E-mail<span class="form-required">*</span>
        </label>
        <div id="cid_7" class="form-input">
          <input type="email" class=" form-textbox validate[required, Email]" id="input_7" name="q7_email7" size="30" value="" />
        </div>
      </li>
      <li class="form-line" id="id_8">
        <label class="form-label-left" id="label_8" for="input_8"> Shop Phone </label>
        <div id="cid_8" class="form-input"><span class="form-sub-label-container"><input class="form-textbox" type="tel" name="q8_shopPhone[area]" id="input_8_area" size="3">
            -
            <label class="form-sub-label" for="input_8_area" id="sublabel_area"> Area Code </label></span><span class="form-sub-label-container"><input class="form-textbox" type="tel" name="q8_shopPhone[phone]" id="input_8_phone" size="8">
            <label class="form-sub-label" for="input_8_phone" id="sublabel_phone"> Phone Number </label></span>
        </div>
      </li>
      <li class="form-line" id="id_9">
        <label class="form-label-left" id="label_9" for="input_9"> Logo </label>
        <div id="cid_9" class="form-input">
          <input class="form-upload" type="file" id="input_9" name="q9_logo" data-imagevalidate="yes" file-accept="pdf, doc, docx, xls, xlsx, csv, txt, rtf, html, zip, mp3, wma, mpg, flv, avi, jpg, jpeg, png, gif" file-maxsize="1024" />
        </div>
      </li>
      <li id="cid_10" class="form-input-wide">
        <div class="form-header-group">
          <h2 id="header_10" class="form-header">
            Business Information
          </h2>
        </div>
      </li>
      <li class="form-line" id="id_11">
        <label class="form-label-left" id="label_11" for="input_11">
          Business Type<span class="form-required">*</span>
        </label>
        <div id="cid_11" class="form-input">
          <div class="form-single-column"><span class="form-checkbox-item" style="clear:left;"><input type="checkbox" class="form-checkbox validate[required]" id="input_11_0" name="q11_businessType[]" value="<input type=&quot;text&quot; value=&quot;Retailer&quot; class=&quot;edit-option&quot; style=&quot;width: 300px; padding: 0px; margin: 0px;&quot;><img src=&quot;images/delete.png&quot; align=&quot;absmiddle&quot; style=&quot;margin-left: 3px;&quot;>" />
              <label for="input_11_0">
                <input type="text" value="Retailer" class="edit-option" style="width: 300px; padding: 0px; margin: 0px;">
                <img src="images/delete.png" align="absmiddle" style="margin-left: 3px;">
              </label></span><span class="clearfix"></span><span class="form-checkbox-item" style="clear:left;"><input type="checkbox" class="form-checkbox validate[required]" id="input_11_1" name="q11_businessType[]" value="Wholesale Shop" />
              <label for="input_11_1"> Wholesale Shop </label></span><span class="clearfix"></span><span class="form-checkbox-item" style="clear:left;"><input type="checkbox" class="form-checkbox validate[required]" id="input_11_2" name="q11_businessType[]" value="Wholesale" />
              <label for="input_11_2"> Wholesale </label></span><span class="clearfix"></span><span class="form-checkbox-item" style="clear:left;"><input type="checkbox" class="form-checkbox validate[required]" id="input_11_3" name="q11_businessType[]" value="Manufacture" />
              <label for="input_11_3"> Manufacture </label></span><span class="clearfix"></span><span class="form-checkbox-item" style="clear:left;"><input type="checkbox" class="form-checkbox validate[required]" id="input_11_4" name="q11_businessType[]" value="Bullion" />
              <label for="input_11_4"> Bullion </label></span><span class="clearfix"></span>
          </div>
        </div>
      </li>
      <li class="form-line" id="id_12">
        <label class="form-label-left" id="label_12" for="input_12">
          Concern Type<span class="form-required">*</span>
        </label>
        <div id="cid_12" class="form-input">
          <div class="form-single-column"><span class="form-radio-item" style="clear:left;"><input type="radio" class="form-radio validate[required]" id="input_12_0" name="q12_concernType" value="Sole proprietorship" />
              <label for="input_12_0"> Sole proprietorship </label></span><span class="clearfix"></span><span class="form-radio-item" style="clear:left;"><input type="radio" class="form-radio validate[required]" id="input_12_1" name="q12_concernType" value="Partnership" />
              <label for="input_12_1"> Partnership </label></span><span class="clearfix"></span><span class="form-radio-item" style="clear:left;"><input type="radio" class="form-radio validate[required]" id="input_12_2" name="q12_concernType" value="Private Limited" />
              <label for="input_12_2"> Private Limited </label></span><span class="clearfix"></span><span class="form-radio-item" style="clear:left;"><input type="radio" class="form-radio validate[required]" id="input_12_3" name="q12_concernType" value="Public Limited" />
              <label for="input_12_3"> Public Limited </label></span><span class="clearfix"></span>
          </div>
        </div>
      </li>
      <li id="cid_13" class="form-input-wide">
        <div class="form-header-group">
          <h2 id="header_13" class="form-header">
            Contact Information
          </h2>
        </div>
      </li>
      <li class="form-line" id="id_14">
        <label class="form-label-left" id="label_14" for="input_14"> TIN </label>
        <div id="cid_14" class="form-input">
          <input type="text" class=" form-textbox" data-type="input-textbox" id="input_14" name="q14_tin" size="20" value="" />
        </div>
      </li>
      <li class="form-line" id="id_15">
        <label class="form-label-left" id="label_15" for="input_15"> PAN </label>
        <div id="cid_15" class="form-input">
          <input type="text" class=" form-textbox" data-type="input-textbox" id="input_15" name="q15_pan" size="20" value="" />
        </div>
      </li>
      <li class="form-line" id="id_16">
        <label class="form-label-left" id="label_16" for="input_16"> Contact Person </label>
        <div id="cid_16" class="form-input"><span class="form-sub-label-container"><input class="form-textbox" type="text" size="10" name="q16_contactPerson[first]" id="first_16" />
            <label class="form-sub-label" for="first_16" id="sublabel_first"> First Name </label></span><span class="form-sub-label-container"><input class="form-textbox" type="text" size="15" name="q16_contactPerson[last]" id="last_16" />
            <label class="form-sub-label" for="last_16" id="sublabel_last"> Last Name </label></span>
        </div>
      </li>
      <li class="form-line" id="id_17">
        <label class="form-label-left" id="label_17" for="input_17"> Contact Person Mobile </label>
        <div id="cid_17" class="form-input">
          <input type="text" class=" form-textbox" data-type="input-textbox" id="input_17" name="q17_contactPerson17" size="20" value="" />
        </div>
      </li>
      <li class="form-line" id="id_18">
        <label class="form-label-left" id="label_18" for="input_18"> Alternative Contact Person </label>
        <div id="cid_18" class="form-input"><span class="form-sub-label-container"><input class="form-textbox" type="text" size="10" name="q18_alternativeContact[first]" id="first_18" />
            <label class="form-sub-label" for="first_18" id="sublabel_first"> First Name </label></span><span class="form-sub-label-container"><input class="form-textbox" type="text" size="15" name="q18_alternativeContact[last]" id="last_18" />
            <label class="form-sub-label" for="last_18" id="sublabel_last"> Last Name </label></span>
        </div>
      </li>
      <li class="form-line" id="id_19">
        <label class="form-label-left" id="label_19" for="input_19"> Alternative Mobile No </label>
        <div id="cid_19" class="form-input">
          <input type="text" class=" form-textbox validate[Numeric]" data-type="input-textbox" id="input_19" name="q19_alternativeMobile" size="20" value="" />
        </div>
      </li>
      <li id="cid_20" class="form-input-wide">
        <div class="form-header-group">
          <h2 id="header_20" class="form-header">
            Subscription Information
          </h2>
        </div>
      </li>
      <li class="form-line" id="id_21">
        <label class="form-label-left" id="label_21" for="input_21">
          Subscribed on<span class="form-required">*</span>
        </label>
        <div id="cid_21" class="form-input"><span class="form-sub-label-container"><select class="form-dropdown validate[required]" name="q21_subscribedOn[month]" id="input_21_month">
              <option>  </option>
              <option value="January"> January </option>
              <option value="February"> February </option>
              <option value="March"> March </option>
              <option value="April"> April </option>
              <option value="May"> May </option>
              <option value="June"> June </option>
              <option value="July"> July </option>
              <option value="August"> August </option>
              <option value="September"> September </option>
              <option value="October"> October </option>
              <option value="November"> November </option>
              <option value="December"> December </option>
            </select>
            <label class="form-sub-label" for="input_21_month" id="sublabel_month"> Month </label></span><span class="form-sub-label-container"><select class="form-dropdown validate[required]" name="q21_subscribedOn[day]" id="input_21_day">
              <option>  </option>
              <option value="1"> 1 </option>
              <option value="2"> 2 </option>
              <option value="3"> 3 </option>
              <option value="4"> 4 </option>
              <option value="5"> 5 </option>
              <option value="6"> 6 </option>
              <option value="7"> 7 </option>
              <option value="8"> 8 </option>
              <option value="9"> 9 </option>
              <option value="10"> 10 </option>
              <option value="11"> 11 </option>
              <option value="12"> 12 </option>
              <option value="13"> 13 </option>
              <option value="14"> 14 </option>
              <option value="15"> 15 </option>
              <option value="16"> 16 </option>
              <option value="17"> 17 </option>
              <option value="18"> 18 </option>
              <option value="19"> 19 </option>
              <option value="20"> 20 </option>
              <option value="21"> 21 </option>
              <option value="22"> 22 </option>
              <option value="23"> 23 </option>
              <option value="24"> 24 </option>
              <option value="25"> 25 </option>
              <option value="26"> 26 </option>
              <option value="27"> 27 </option>
              <option value="28"> 28 </option>
              <option value="29"> 29 </option>
              <option value="30"> 30 </option>
              <option value="31"> 31 </option>
            </select>
            <label class="form-sub-label" for="input_21_day" id="sublabel_day"> Day </label></span><span class="form-sub-label-container"><select class="form-dropdown validate[required]" name="q21_subscribedOn[year]" id="input_21_year">
              <option>  </option>
              <option value="2037"> 2037 </option>
              <option value="2036"> 2036 </option>
              <option value="2035"> 2035 </option>
              <option value="2034"> 2034 </option>
              <option value="2033"> 2033 </option>
              <option value="2032"> 2032 </option>
              <option value="2031"> 2031 </option>
              <option value="2030"> 2030 </option>
              <option value="2029"> 2029 </option>
              <option value="2028"> 2028 </option>
              <option value="2027"> 2027 </option>
              <option value="2026"> 2026 </option>
              <option value="2025"> 2025 </option>
              <option value="2024"> 2024 </option>
              <option value="2023"> 2023 </option>
              <option value="2022"> 2022 </option>
              <option value="2021"> 2021 </option>
              <option value="2020"> 2020 </option>
              <option value="2019"> 2019 </option>
              <option value="2018"> 2018 </option>
              <option value="2017"> 2017 </option>
              <option value="2016"> 2016 </option>
              <option value="2015"> 2015 </option>
              <option value="2014"> 2014 </option>
              <option value="2013"> 2013 </option>
              <option value="2012"> 2012 </option>
              <option value="2011"> 2011 </option>
              <option value="2010"> 2010 </option>
              <option value="2009"> 2009 </option>
              <option value="2008"> 2008 </option>
              <option value="2007"> 2007 </option>
              <option value="2006"> 2006 </option>
              <option value="2005"> 2005 </option>
              <option value="2004"> 2004 </option>
              <option value="2003"> 2003 </option>
              <option value="2002"> 2002 </option>
              <option value="2001"> 2001 </option>
              <option value="2000"> 2000 </option>
              <option value="1999"> 1999 </option>
              <option value="1998"> 1998 </option>
              <option value="1997"> 1997 </option>
              <option value="1996"> 1996 </option>
              <option value="1995"> 1995 </option>
              <option value="1994"> 1994 </option>
              <option value="1993"> 1993 </option>
              <option value="1992"> 1992 </option>
              <option value="1991"> 1991 </option>
              <option value="1990"> 1990 </option>
              <option value="1989"> 1989 </option>
              <option value="1988"> 1988 </option>
              <option value="1987"> 1987 </option>
              <option value="1986"> 1986 </option>
              <option value="1985"> 1985 </option>
              <option value="1984"> 1984 </option>
              <option value="1983"> 1983 </option>
              <option value="1982"> 1982 </option>
              <option value="1981"> 1981 </option>
              <option value="1980"> 1980 </option>
              <option value="1979"> 1979 </option>
              <option value="1978"> 1978 </option>
              <option value="1977"> 1977 </option>
              <option value="1976"> 1976 </option>
              <option value="1975"> 1975 </option>
              <option value="1974"> 1974 </option>
              <option value="1973"> 1973 </option>
              <option value="1972"> 1972 </option>
              <option value="1971"> 1971 </option>
              <option value="1970"> 1970 </option>
              <option value="1969"> 1969 </option>
              <option value="1968"> 1968 </option>
              <option value="1967"> 1967 </option>
              <option value="1966"> 1966 </option>
              <option value="1965"> 1965 </option>
              <option value="1964"> 1964 </option>
              <option value="1963"> 1963 </option>
              <option value="1962"> 1962 </option>
              <option value="1961"> 1961 </option>
              <option value="1960"> 1960 </option>
              <option value="1959"> 1959 </option>
              <option value="1958"> 1958 </option>
              <option value="1957"> 1957 </option>
              <option value="1956"> 1956 </option>
              <option value="1955"> 1955 </option>
              <option value="1954"> 1954 </option>
              <option value="1953"> 1953 </option>
              <option value="1952"> 1952 </option>
              <option value="1951"> 1951 </option>
              <option value="1950"> 1950 </option>
              <option value="1949"> 1949 </option>
              <option value="1948"> 1948 </option>
              <option value="1947"> 1947 </option>
              <option value="1946"> 1946 </option>
              <option value="1945"> 1945 </option>
              <option value="1944"> 1944 </option>
              <option value="1943"> 1943 </option>
              <option value="1942"> 1942 </option>
              <option value="1941"> 1941 </option>
              <option value="1940"> 1940 </option>
              <option value="1939"> 1939 </option>
              <option value="1938"> 1938 </option>
              <option value="1937"> 1937 </option>
              <option value="1936"> 1936 </option>
              <option value="1935"> 1935 </option>
              <option value="1934"> 1934 </option>
              <option value="1933"> 1933 </option>
              <option value="1932"> 1932 </option>
              <option value="1931"> 1931 </option>
              <option value="1930"> 1930 </option>
              <option value="1929"> 1929 </option>
              <option value="1928"> 1928 </option>
              <option value="1927"> 1927 </option>
              <option value="1926"> 1926 </option>
              <option value="1925"> 1925 </option>
              <option value="1924"> 1924 </option>
              <option value="1923"> 1923 </option>
              <option value="1922"> 1922 </option>
              <option value="1921"> 1921 </option>
              <option value="1920"> 1920 </option>
            </select>
            <label class="form-sub-label" for="input_21_year" id="sublabel_year"> Year </label></span>
        </div>
      </li>
      <li class="form-line" id="id_22">
        <label class="form-label-left" id="label_22" for="input_22"> Subscribed Period </label>
        <div id="cid_22" class="form-input">
          <input type="text" class=" form-textbox" data-type="input-textbox" id="input_22" name="q22_subscribedPeriod" size="20" value="" />
        </div>
      </li>
      <li class="form-line" id="id_23">
        <label class="form-label-left" id="label_23" for="input_23"> Expires On </label>
        <div id="cid_23" class="form-input">
          <input type="text" class=" form-textbox" data-type="input-textbox" id="input_23" name="q23_expiresOn" size="20" value="" />
        </div>
      </li>
      <li class="form-line" id="id_24">
        <label class="form-label-left" id="label_24" for="input_24"> Subscription Charge </label>
        <div id="cid_24" class="form-input">
          <input type="text" class=" form-textbox validate[Numeric]" data-type="input-textbox" id="input_24" name="q24_subscriptionCharge" size="20" value="" />
        </div>
      </li>
      <li class="form-line" id="id_25">
        <label class="form-label-left" id="label_25" for="input_25"> Registration Fee </label>
        <div id="cid_25" class="form-input">
          <input type="text" class=" form-textbox validate[Numeric]" data-type="input-textbox" id="input_25" name="q25_registrationFee" size="20" value="" />
        </div>
      </li>
      <li class="form-line" id="id_26">
        <div id="cid_26" class="form-input-wide">
          <div style="text-align:center" class="form-buttons-wrapper">
            <button id="input_26" type="submit" class="form-submit-button form-submit-button-light_rounded">
              Create Members
            </button>
            &nbsp;
            <button id="input_reset_26" type="reset" class="form-submit-reset form-submit-button-light_rounded">
              Clear Form
            </button>
            &nbsp;
            <button id="input_print_26" style="margin-left:25px;" class="form-submit-print form-submit-button-light_rounded" type="button">
              <img src="http://cdn.jotfor.ms/images/printer.png" align="absmiddle" />
              Print Form
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  <input type="hidden" id="simple_spc" name="simple_spc" value="32933155844862" />
  <script type="text/javascript">
  document.getElementById("si" + "mple" + "_spc").value = "32933155844862-32933155844862";
  </script>
</form></body>
</html>
