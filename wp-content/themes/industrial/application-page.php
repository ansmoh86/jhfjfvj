<?php
/*
 Template Name: Application
 */

 
get_header();
?>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style>
.form-row{
    width:100% !important;
}
.help-block{
    color: red;
    font-size: 0.8em;
}
.btn-3d-sub {
  display: block;
  margin: 0 auto;
  width: 50%;
  height: 50px;
  font-family: Helvetica;
  border-bottom: 5px solid #CC0000;
  border-top: none;
  border-left: none;
  border-right: none;
  background: linear-gradient(#CC0000,#CC0000);
  color: white;
  border-radius: 10px;
  box-shadow: 0px 2px 10px grey;
  transition: 150ms ease;
  text-align: center;
  line-height: 50px;
  font-weight: bold;
}
@media only screen and (max-device-width: 600px)
{
select{
    margin-top:10px;
}
}
label {
    color: #024c8b;
    font-size: 16px;
    font-weight: 400;
}
h3 {
    color: #024c8b;
    font-family: 'Lato';
    margin: 0 0 15px;
    font-size: 24px;
    font-weight: bold;
}
p {
    color: #666;
    font-size: 14px;
    line-height: 17px;
    margin-bottom: 30px;
    margin-top: 20px;
}
.btnsub{
    width:auto;
    margin: 5px;
}
hr {
    margin-top: 1.5rem;
    margin-bottom: 1.5rem;
}
.container{
    background-color:#f2eff9;
    padding:30px;
    margin-top:20px;
    margin-bottom:20px;
}


.unknown{
    color: #fff !important;
    background-color: #0f4c8b;
    float: left;
    margin-left: -10px;
}

@media only screen and (max-width: 600px){
  .unknown{
      margin-left: 0px !important;
  }
}

.switch-field {
	display: flex;
	margin-bottom: 36px;
	overflow: hidden;
}

.switch-field input {
	position: absolute !important;
	clip: rect(0, 0, 0, 0);
	height: 1px;
	width: 1px;
	border: 0;
	overflow: hidden;
}

.switch-field label {
	background-color: #e4e4e4;
	color: rgba(0, 0, 0, 0.6);
	font-size: 14px;
	line-height: 1;
	text-align: center;
	padding: 8px 16px;
	margin-right: -1px;
	border: 1px solid rgba(0, 0, 0, 0.2);
	box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
	transition: all 0.1s ease-in-out;
}

.switch-field label:hover {
	cursor: pointer;
}


.switch-field input:checked + label:last-of-type {
	background-color: red;
	box-shadow: none;
}

.switch-field input:checked + label:nth-child(2) {
	background-color: #98ef3a;
	box-shadow: none;
}

.switch-field label:first-of-type {
	border-radius: 4px 0 0 4px;

}

.switch-field label:last-of-type {
	border-radius: 0 4px 4px 0;
	
}

</style>
<?php

$applicationid = date("ymdhis");

$countryoptions = '<option value="" disabled selected>- Select -</option>
<option value="AFGHANISTAN (AFG)">AFGHANISTAN (AFG)</option>
<option value="ALAND ISLANDS (ALA)">ALAND ISLANDS (ALA)</option>
<option value="ALBANIA (ALB)">ALBANIA (ALB)</option>
<option value="ALGERIA (DZA)">ALGERIA (DZA)</option>
<option value="AMERICAN SAMOA (ASM)">AMERICAN SAMOA (ASM)</option>
<option value="ANDORRA (AND)">ANDORRA (AND)</option>
<option value="ANGOLA (AGO)">ANGOLA (AGO)</option>
<option value="ANGUILLA (AIA)">ANGUILLA (AIA)</option>
<option value="ANTARCTICA (ATA)">ANTARCTICA (ATA)</option>
<option value="ANTIGUA AND BARBUDA (ATG)">ANTIGUA AND BARBUDA (ATG)</option>
<option value="ARGENTINA (ARG)">ARGENTINA (ARG)</option>
<option value="ARMENIA (ARM)">ARMENIA (ARM)</option>
<option value="ARUBA (ABW)">ARUBA (ABW)</option>
<option value="AUSTRALIA (AUS)">AUSTRALIA (AUS)</option>
<option value="AUSTRIA (AUT)">AUSTRIA (AUT)</option>
<option value="AZERBAIJAN (AZE)">AZERBAIJAN (AZE)</option>
<option value="BAHAMAS (BHS)">BAHAMAS (BHS)</option>
<option value="BAHRAIN (BHR)">BAHRAIN (BHR)</option>
<option value="BANGLADESH (BGD)">BANGLADESH (BGD)</option>
<option value="BARBADOS (BRB)">BARBADOS (BRB)</option>
<option value="BELARUS (BLR)">BELARUS (BLR)</option>
<option value="BELGIUM (BEL)">BELGIUM (BEL)</option>
<option value="BELIZE (BLZ)">BELIZE (BLZ)</option>
<option value="BENIN (BEN)">BENIN (BEN)</option>
<option value="BERMUDA (BMU)">BERMUDA (BMU)</option>
<option value="BHUTAN (BTN)">BHUTAN (BTN)</option>
<option value="BOLIVIA (BOL)">BOLIVIA (BOL)</option>
<option value="BONAIRE, SINT EUSTATIUS AND SABA (BES)">BONAIRE, SINT EUSTATIUS AND SABA (BES)</option>
<option value="BOSNIA AND HERZEGOVINA (BIH)">BOSNIA AND HERZEGOVINA (BIH)</option>
<option value="BOTSWANA (BWA)">BOTSWANA (BWA)</option>
<option value="BOUVET ISLAND (BVT)">BOUVET ISLAND (BVT)</option>
<option value="BRAZIL (BRA)">BRAZIL (BRA)</option>
<option value="BRITISH INDIAN OCEAN TERRITORY (IOT)">BRITISH INDIAN OCEAN TERRITORY (IOT)</option>
<option value="BRUNEI (BRN)">BRUNEI (BRN)</option>
<option value="BULGARIA (BGR)">BULGARIA (BGR)</option>
<option value="BURKINA FASO (BFA)">BURKINA FASO (BFA)</option>
<option value="BURMA (BUR)">BURMA (BUR)</option>
<option value="BURUNDI (BDI)">BURUNDI (BDI)</option>
<option value="CAMBODIA (KHM)">CAMBODIA (KHM)</option>
<option value="CAMEROON (CMR)">CAMEROON (CMR)</option>
<option value="CANADA (CAN)">CANADA (CAN)</option>
<option value="CANTON AND ENDERBURY ISLANDS (CTE)">CANTON AND ENDERBURY ISLANDS (CTE)</option>
<option value="CAPE VERDE (CPV)">CAPE VERDE (CPV)</option>
<option value="CAYMAN ISLANDS (CYM)">CAYMAN ISLANDS (CYM)</option>
<option value="CENTRAL AFRICAN REPUBLIC (CAF)">CENTRAL AFRICAN REPUBLIC (CAF)</option>
<option value="CHAD (TCD)">CHAD (TCD)</option>
<option value="CHILE (CHL)">CHILE (CHL)</option>
<option value="CHINA (CHN)">CHINA (CHN)</option>
<option value="CHRISTMAS ISLAND (CXR)">CHRISTMAS ISLAND (CXR)</option>
<option value="COCOS (KEELING) ISLANDS (CCK)">COCOS (KEELING) ISLANDS (CCK)</option>
<option value="COLOMBIA (COL)">COLOMBIA (COL)</option>
<option value="COMOROS (COM)">COMOROS (COM)</option>
<option value="CONGO, DEMOCRATIC REPUBLIC OF (COD)">CONGO, DEMOCRATIC REPUBLIC OF (COD)</option>
<option value="CONGO, REPUBLIC OF (COG)">CONGO, REPUBLIC OF (COG)</option>
<option value="COOK ISLANDS (COK)">COOK ISLANDS (COK)</option>
<option value="COSTA RICA (CRI)">COSTA RICA (CRI)</option>
<option value="COTE DIVOIRE (CIV)">COTE DIVOIRE (CIV)</option>
<option value="CROATIA (HRV)">CROATIA (HRV)</option>
<option value="CUBA (CUB)">CUBA (CUB)</option>
<option value="CURACAO (CUW)">CURACAO (CUW)</option>
<option value="CYPRUS (CYP)">CYPRUS (CYP)</option>
<option value="CZECH REPUBLIC (CZE)">CZECH REPUBLIC (CZE)</option>
<option value="DEMOCRATIC YEMEN (YMD)">DEMOCRATIC YEMEN (YMD)</option>
<option value="DENMARK (DNK)">DENMARK (DNK)</option>
<option value="DJIBOUTI (DJI)">DJIBOUTI (DJI)</option>
<option value="DOMINICA (DMA)">DOMINICA (DMA)</option>
<option value="DOMINICAN REPUBLIC (DOM)">DOMINICAN REPUBLIC (DOM)</option>
<option value="DRONNING MAUD LAND (DML)">DRONNING MAUD LAND (DML)</option>
<option value="EAST TIMOR (TMP)">EAST TIMOR (TMP)</option>
<option value="ECUADOR (ECU)">ECUADOR (ECU)</option>
<option value="EGYPT (EGY)">EGYPT (EGY)</option>
<option value="EL SALVADOR (SLV)">EL SALVADOR (SLV)</option>
<option value="EQUATORIAL GUINEA (GNQ)">EQUATORIAL GUINEA (GNQ)</option>
<option value="ERITREA (ERI)">ERITREA (ERI)</option>
<option value="ESTONIA (EST)">ESTONIA (EST)</option>
<option value="ETHIOPIA (ETH)">ETHIOPIA (ETH)</option>
<option value="FALKLAND ISLANDS (FLK)">FALKLAND ISLANDS (FLK)</option>
<option value="FAROE ISLANDS (FRO)">FAROE ISLANDS (FRO)</option>
<option value="FIJI (FJI)">FIJI (FJI)</option>
<option value="FINLAND (FIN)">FINLAND (FIN)</option>
<option value="FRANCE (FRA)">FRANCE (FRA)</option>
<option value="FRANCE METROPOLITAN (FXX)">FRANCE METROPOLITAN (FXX)</option>
<option value="FRENCH GUIANA (GUF)">FRENCH GUIANA (GUF)</option>
<option value="FRENCH POLYNESIA (PYF)">FRENCH POLYNESIA (PYF)</option>
<option value="FRENCH SOUTHERN TERRITORIES (ATF)">FRENCH SOUTHERN TERRITORIES (ATF)</option>
<option value="GABON (GAB)">GABON (GAB)</option>
<option value="GAMBIA (GMB)">GAMBIA (GMB)</option>
<option value="GEORGIA (GEO)">GEORGIA (GEO)</option>
<option value="GERMANY (DEU)">GERMANY (DEU)</option>
<option value="GHANA (GHA)">GHANA (GHA)</option>
<option value="GIBRALTAR (GIB)">GIBRALTAR (GIB)</option>
<option value="GREECE (GRC)">GREECE (GRC)</option>
<option value="GREENLAND (GRL)">GREENLAND (GRL)</option>
<option value="GRENADA (GRD)">GRENADA (GRD)</option>
<option value="GUADELOUPE (GLP)">GUADELOUPE (GLP)</option>
<option value="GUAM (GUM)">GUAM (GUM)</option>
<option value="GUATEMALA (GTM)">GUATEMALA (GTM)</option>
<option value="GUERNSEY (GGY)">GUERNSEY (GGY)</option>
<option value="GUINEA (GIN)">GUINEA (GIN)</option>
<option value="GUINEA-BISSAU (GNB)">GUINEA-BISSAU (GNB)</option>
<option value="GUYANA (GUY)">GUYANA (GUY)</option>
<option value="HAITI (HTI)">HAITI (HTI)</option>
<option value="HEARD AND MC DONALD ISLANDS (HMD)">HEARD AND MC DONALD ISLANDS (HMD)</option>
<option value="HONDURAS (HND)">HONDURAS (HND)</option>
<option value="HONG KONG (HKG)">HONG KONG (HKG)</option>
<option value="HUNGARY (HUN)">HUNGARY (HUN)</option>
<option value="ICELAND (ISL)">ICELAND (ISL)</option>
<option value="INDIA (IND)">INDIA (IND)</option>
<option value="INDONESIA (IDN)">INDONESIA (IDN)</option>
<option value="IRAN (IRN)">IRAN (IRN)</option>
<option value="IRAQ (IRQ)">IRAQ (IRQ)</option>
<option value="IRELAND (IRL)">IRELAND (IRL)</option>
<option value="ISLE OF MAN (IMN)">ISLE OF MAN (IMN)</option>
<option value="ISRAEL (ISR)">ISRAEL (ISR)</option>
<option value="ITALY (ITA)">ITALY (ITA)</option>
<option value="JAMAICA (JAM)">JAMAICA (JAM)</option>
<option value="JAPAN (JPN)">JAPAN (JPN)</option>
<option value="JERSEY (JEY)">JERSEY (JEY)</option>
<option value="JOHNSTON ISLAND (JTN)">JOHNSTON ISLAND (JTN)</option>
<option value="JORDAN (JOR)">JORDAN (JOR)</option>
<option value="KAZAKHSTAN (KAZ)">KAZAKHSTAN (KAZ)</option>
<option value="KENYA (KEN)">KENYA (KEN)</option>
<option value="KIRIBATI (KIR)">KIRIBATI (KIR)</option>
<option value="KOSOVO (KVV)">KOSOVO (KVV)</option>
<option value="KUWAIT (KWT)">KUWAIT (KWT)</option>
<option value="KYRGYZSTAN (KGZ)">KYRGYZSTAN (KGZ)</option>
<option value="LAOS (LAO)">LAOS (LAO)</option>
<option value="LATVIA (LVA)">LATVIA (LVA)</option>
<option value="LEBANON (LBN)">LEBANON (LBN)</option>
<option value="LESOTHO (LSO)">LESOTHO (LSO)</option>
<option value="LIBERIA (LBR)">LIBERIA (LBR)</option>
<option value="LIBYA (LBY)">LIBYA (LBY)</option>
<option value="LIECHTENSTEIN (LIE)">LIECHTENSTEIN (LIE)</option>
<option value="LITHUANIA (LTU)">LITHUANIA (LTU)</option>
<option value="LUXEMBOURG (LUX)">LUXEMBOURG (LUX)</option>
<option value="MACAU (MAC)">MACAU (MAC)</option>
<option value="MACEDONIA (MKD)">MACEDONIA (MKD)</option>
<option value="MADAGASCAR (MDG)">MADAGASCAR (MDG)</option>
<option value="MALAWI (MWI)">MALAWI (MWI)</option>
<option value="MALAYSIA (MYS)">MALAYSIA (MYS)</option>
<option value="MALDIVES (MDV)">MALDIVES (MDV)</option>
<option value="MALI (MLI)">MALI (MLI)</option>
<option value="MALTA (MLT)">MALTA (MLT)</option>
<option value="MARSHALL ISLANDS (MHL)">MARSHALL ISLANDS (MHL)</option>
<option value="MARTINIQUE (MTQ)">MARTINIQUE (MTQ)</option>
<option value="MAURITANIA (MRT)">MAURITANIA (MRT)</option>
<option value="MAURITIUS (MUS)">MAURITIUS (MUS)</option>
<option value="MAYOTTE (MYT)">MAYOTTE (MYT)</option>
<option value="MEXICO (MEX)">MEXICO (MEX)</option>
<option value="MICRONESIA - FEDERATED STATES OF (FSM)">MICRONESIA - FEDERATED STATES OF (FSM)</option>
<option value="MIDWAY ISLANDS (MID)">MIDWAY ISLANDS (MID)</option>
<option value="MOLDOVA (MDA)">MOLDOVA (MDA)</option>
<option value="MONACO (MCO)">MONACO (MCO)</option>
<option value="MONGOLIA (MNG)">MONGOLIA (MNG)</option>
<option value="MONTENEGRO (MNE)">MONTENEGRO (MNE)</option>
<option value="MONTSERRAT (MSR)">MONTSERRAT (MSR)</option>
<option value="MOROCCO (MAR)">MOROCCO (MAR)</option>
<option value="MOZAMBIQUE (MOZ)">MOZAMBIQUE (MOZ)</option>
<option value="MYANMAR (MMR)">MYANMAR (MMR)</option>
<option value="NAMIBIA (NAM)">NAMIBIA (NAM)</option>
<option value="NAURU (NRU)">NAURU (NRU)</option>
<option value="NEPAL (NPL)">NEPAL (NPL)</option>
<option value="NETHERLANDS (NLD)">NETHERLANDS (NLD)</option>
<option value="NETHERLANDS ANTILLES (ANT)">NETHERLANDS ANTILLES (ANT)</option>
<option value="NEUTRAL ZONE (NTZ)">NEUTRAL ZONE (NTZ)</option>
<option value="NEW CALEDONIA (NCL)">NEW CALEDONIA (NCL)</option>
<option value="NEW ZEALAND (NZL)">NEW ZEALAND (NZL)</option>
<option value="NICARAGUA (NIC)">NICARAGUA (NIC)</option>
<option value="NIGER (NER)">NIGER (NER)</option>
<option value="NIGERIA (NGA)">NIGERIA (NGA)</option>
<option value="NIUE (NIU)">NIUE (NIU)</option>
<option value="NORFOLK ISLAND (NFK)">NORFOLK ISLAND (NFK)</option>
<option value="NORTH KOREA (PRK)">NORTH KOREA (PRK)</option>
<option value="NORTHERN MARIANA ISLANDS (MNP)">NORTHERN MARIANA ISLANDS (MNP)</option>
<option value="NORWAY (NOR)">NORWAY (NOR)</option>
<option value="OMAN (OMN)">OMAN (OMN)</option>
<option value="PAKISTAN (PAK)">PAKISTAN (PAK)</option>
<option value="PALAU (PLW)">PALAU (PLW)</option>
<option value="PALESTINIAN TERRITORIES (PSE)">PALESTINIAN TERRITORIES (PSE)</option>
<option value="PANAMA (PAN)">PANAMA (PAN)</option>
<option value="PAPUA NEW GUINEA (PNG)">PAPUA NEW GUINEA (PNG)</option>
<option value="PARAGUAY (PRY)">PARAGUAY (PRY)</option>
<option value="PERU (PER)">PERU (PER)</option>
<option value="PHILIPPINES (PHL)">PHILIPPINES (PHL)</option>
<option value="PITCAIRN ISLANDS (PCN)">PITCAIRN ISLANDS (PCN)</option>
<option value="POLAND (POL)">POLAND (POL)</option>
<option value="PORTUGAL (PRT)">PORTUGAL (PRT)</option>
<option value="PUERTO RICO (PRI)">PUERTO RICO (PRI)</option>
<option value="QATAR (QAT)">QATAR (QAT)</option>
<option value="REUNION (REU)">REUNION (REU)</option>
<option value="ROMANIA (ROM)">ROMANIA (ROM)</option>
<option value="RUSSIA (RUS)">RUSSIA (RUS)</option>
<option value="RWANDA (RWA)">RWANDA (RWA)</option>
<option value="SAINT BARTHELEMY (BLM)">SAINT BARTHELEMY (BLM)</option>
<option value="SAINT KITTS AND NEVIS (KNA)">SAINT KITTS AND NEVIS (KNA)</option>
<option value="SAINT LUCIA (LCA)">SAINT LUCIA (LCA)</option>
<option value="SAINT MARTIN (FRENCH PART) (MAF)">SAINT MARTIN (FRENCH PART) (MAF)</option>
<option value="SAINT VINCENT AND THE GRENADINES (VCT)">SAINT VINCENT AND THE GRENADINES (VCT)</option>
<option value="SAMOA (WSM)">SAMOA (WSM)</option>
<option value="SAN MARINO (SMR)">SAN MARINO (SMR)</option>
<option value="SAO TOME AND PRINCIPE (STP)">SAO TOME AND PRINCIPE (STP)</option>
<option value="SAUDI ARABIA (SAU)">SAUDI ARABIA (SAU)</option>
<option value="SENEGAL (SEN)">SENEGAL (SEN)</option>
<option value="SERBIA (SRB)">SERBIA (SRB)</option>
<option value="SERBIA AND MONTENEGRO (SCG)">SERBIA AND MONTENEGRO (SCG)</option>
<option value="SEYCHELLES (SYC)">SEYCHELLES (SYC)</option>
<option value="SIERRA LEONE (SLE)">SIERRA LEONE (SLE)</option>
<option value="SINGAPORE (SGP)">SINGAPORE (SGP)</option>
<option value="SINT MAARTEN (DUTCH PART) (SXM)">SINT MAARTEN (DUTCH PART) (SXM)</option>
<option value="SLOVAKIA (SVK)">SLOVAKIA (SVK)</option>
<option value="SLOVENIA (SVN)">SLOVENIA (SVN)</option>
<option value="SOLOMON ISLANDS (SLB)">SOLOMON ISLANDS (SLB)</option>
<option value="SOMALIA (SOM)">SOMALIA (SOM)</option>
<option value="SOUTH AFRICA (ZAF)">SOUTH AFRICA (ZAF)</option>
<option value="SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS (SGS)">SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS (SGS)</option>
<option value="SOUTH KOREA (KOR)">SOUTH KOREA (KOR)</option>
<option value="SOUTH SUDAN (SSD)">SOUTH SUDAN (SSD)</option>
<option value="SPAIN (ESP)">SPAIN (ESP)</option>
<option value="SRI LANKA (LKA)">SRI LANKA (LKA)</option>
<option value="ST. HELENA (SHN)">ST. HELENA (SHN)</option>
<option value="ST. PIERRE AND MIQUELON (SPM)">ST. PIERRE AND MIQUELON (SPM)</option>
<option value="SUDAN (SDN)">SUDAN (SDN)</option>
<option value="SURINAME (SUR)">SURINAME (SUR)</option>
<option value="SVALBARD AND JAN MAYEN ISLANDS (SJM)">SVALBARD AND JAN MAYEN ISLANDS (SJM)</option>
<option value="SWAZILAND (SWZ)">SWAZILAND (SWZ)</option>
<option value="SWEDEN (SWE)">SWEDEN (SWE)</option>
<option value="SWITZERLAND (CHE)">SWITZERLAND (CHE)</option>
<option value="SYRIA (SYR)">SYRIA (SYR)</option>
<option value="TAIWAN (TWN)">TAIWAN (TWN)</option>
<option value="TAJIKISTAN (TJK)">TAJIKISTAN (TJK)</option>
<option value="TANZANIA (TZA)">TANZANIA (TZA)</option>
<option value="THAILAND (THA)">THAILAND (THA)</option>
<option value="TIMOR-LESTE (TLS)">TIMOR-LESTE (TLS)</option>
<option value="TOGO (TGO)">TOGO (TGO)</option>
<option value="TOKELAU (TKL)">TOKELAU (TKL)</option>
<option value="TONGA (TON)">TONGA (TON)</option>
<option value="TRINIDAD AND TOBAGO (TTO)">TRINIDAD AND TOBAGO (TTO)</option>
<option value="TUNISIA (TUN)">TUNISIA (TUN)</option>
<option value="TURKEY (TUR)">TURKEY (TUR)</option>
<option value="TURKMENISTAN (TKM)">TURKMENISTAN (TKM)</option>
<option value="TURKS AND CAICOS ISLANDS (TCA)">TURKS AND CAICOS ISLANDS (TCA)</option>
<option value="TUVALU (TUV)">TUVALU (TUV)</option>
<option value="UGANDA (UGA)">UGANDA (UGA)</option>
<option value="UKRAINE (UKR)">UKRAINE (UKR)</option>
<option value="UNITED ARAB EMIRATES (ARE)">UNITED ARAB EMIRATES (ARE)</option>
<option value="UNITED KINGDOM (GBR)">UNITED KINGDOM (GBR)</option>
<option value="UNITED STATES (USA)">UNITED STATES (USA)</option>
<option value="UNITED STATES MINOR OUTLYING ISLANDS (UMI)">UNITED STATES MINOR OUTLYING ISLANDS (UMI)</option>
<option value="URUGUAY (URY)">URUGUAY (URY)</option>
<option value="UZBEKISTAN (UZB)">UZBEKISTAN (UZB)</option>
<option value="VANUATU (VUT)">VANUATU (VUT)</option>
<option value="VATICAN CITY STATE (HOLY SEE) (VAT)">VATICAN CITY STATE (HOLY SEE) (VAT)</option>
<option value="VENEZUELA (VEN)">VENEZUELA (VEN)</option>
<option value="VIETNAM (VNM)">VIETNAM (VNM)</option>
<option value="VIRGIN ISLANDS (BRITISH) (VGB)">VIRGIN ISLANDS (BRITISH) (VGB)</option>
<option value="VIRGIN ISLANDS (U.S.) (VIR)">VIRGIN ISLANDS (U.S.) (VIR)</option>
<option value="WAKE ISLAND (WAK)">WAKE ISLAND (WAK)</option>
<option value="WALLIS AND FUTUNA ISLANDS (WLF)">WALLIS AND FUTUNA ISLANDS (WLF)</option>
<option value="WESTERN SAHARA (ESH)">WESTERN SAHARA (ESH)</option>
<option value="YEMEN (YEM)">YEMEN (YEM)</option>
<option value="ZAIRE (ZAR)">ZAIRE (ZAR)</option>
<option value="ZAMBIA (ZMB)">ZAMBIA (ZMB)</option>
<option value="ZIMBABWE (ZWE)">ZIMBABWE (ZWE)</option>';

$yearoptions = '<option value=" " selected disabled>Year</option>
<option value="2019">2029</option>
<option value="2019">2028</option>
<option value="2019">2027</option>
<option value="2019">2026</option>
<option value="2019">2025</option>
<option value="2019">2024</option>
<option value="2019">2023</option>
<option value="2019">2022</option>
<option value="2019">2021</option>
<option value="2019">2020</option>
<option value="2019">2019</option>
<option value="2018">2018</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
<option value="1969">1969</option>
<option value="1968">1968</option>
<option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>
<option value="1959">1959</option>
<option value="1958">1958</option>
<option value="1957">1957</option>
<option value="1956">1956</option>
<option value="1955">1955</option>
<option value="1954">1954</option>
<option value="1953">1953</option>
<option value="1952">1952</option>
<option value="1951">1951</option>
<option value="1950">1950</option>
<option value="1949">1949</option>
<option value="1948">1948</option>
<option value="1947">1947</option>
<option value="1946">1946</option>
<option value="1945">1945</option>
<option value="1944">1944</option>
<option value="1943">1943</option>
<option value="1942">1942</option>
<option value="1941">1941</option>
<option value="1940">1940</option>
<option value="1939">1939</option>
<option value="1938">1938</option>
<option value="1937">1937</option>
<option value="1936">1936</option>
<option value="1935">1935</option>
<option value="1934">1934</option>
<option value="1933">1933</option>
<option value="1932">1932</option>
<option value="1931">1931</option>
<option value="1930">1930</option>
<option value="1929">1929</option>
<option value="1928">1928</option>
<option value="1927">1927</option>
<option value="1926">1926</option>
<option value="1925">1925</option>
<option value="1924">1924</option>
<option value="1923">1923</option>
<option value="1922">1922</option>
<option value="1921">1921</option>
<option value="1920">1920</option>
<option value="1919">1919</option>
<option value="1918">1918</option>
<option value="1917">1917</option>
<option value="1916">1916</option>
<option value="1915">1915</option>
<option value="1914">1914</option>
<option value="1913">1913</option>
<option value="1912">1912</option>
<option value="1911">1911</option>
<option value="1910">1910</option>
<option value="1909">1909</option>
<option value="1908">1908</option>
<option value="1907">1907</option>
<option value="1906">1906</option>
<option value="1905">1905</option>
<option value="1904">1904</option>
<option value="1903">1903</option>
<option value="1902">1902</option>
<option value="1901">1901</option>
<option value="1900">1900</option>
<option value="1899">1899</option>
<option value="1898">1898</option>
<option value="1897">1897</option>
<option value="1896">1896</option>
<option value="1895">1895</option>
<option value="1894">1894</option>
<option value="1893">1893</option>';

$monthoptions = '<option value="" selected disabled>Month</option>
<option value="01">January</option>
<option value="02">February</option>
<option value="03">March</option>
<option value="04">April</option>
<option value="05">May</option>
<option value="06">June</option>
<option value="07">July</option>
<option value="08">August</option>
<option value="09">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>';

$dayoptions = '<option value="" selected disabled>Day</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>';

$countrycitizenshipoptions = '<option value="" selected disabled>- Select -</option>
<option value="ANDORRA (AND)">ANDORRA (AND)</option>
<option value="AUSTRALIA (AUS)">AUSTRALIA (AUS)</option>
<option value="AUSTRIA (AUT)">AUSTRIA (AUT)</option>
<option value="BELGIUM (BEL)">BELGIUM (BEL)</option>
<option value="BRUNEI (BRN)">BRUNEI (BRN)</option>
<option value="CHILE (CHL)">CHILE (CHL)</option>
<option value="CZECH REPUBLIC (CZE)">CZECH REPUBLIC (CZE)</option>
<option value="DENMARK (DNK)">DENMARK (DNK)</option>
<option value="ESTONIA (EST)">ESTONIA (EST)</option>
<option value="FINLAND (FIN)">FINLAND (FIN)</option>
<option value="FRANCE (FRA)">FRANCE (FRA)</option>
<option value="GERMANY (DEU)">GERMANY (DEU)</option>
<option value="GREECE (GRC)">GREECE (GRC)</option>
<option value="HUNGARY (HUN)">HUNGARY (HUN)</option>
<option value="ICELAND (ISL)">ICELAND (ISL)</option>
<option value="IRELAND (IRL)">IRELAND (IRL)</option>
<option value="ITALY (ITA)">ITALY (ITA)</option>
<option value="JAPAN (JPN)">JAPAN (JPN)</option>
<option value="LATVIA (LVA)">LATVIA (LVA)</option>
<option value="LIECHTENSTEIN (LIE)">LIECHTENSTEIN (LIE)</option>
<option value="LITHUANIA (LTU)">LITHUANIA (LTU)</option>
<option value="LUXEMBOURG (LUX)">LUXEMBOURG (LUX)</option>
<option value="MALTA (MLT)">MALTA (MLT)</option>
<option value="MONACO (MCO)">MONACO (MCO)</option>
<option value="NETHERLANDS (NLD)">NETHERLANDS (NLD)</option>
<option value="NEW ZEALAND (NZL)">NEW ZEALAND (NZL)</option>
<option value="NORWAY (NOR)">NORWAY (NOR)</option>
<option value="PORTUGAL (PRT)">PORTUGAL (PRT)</option>
<option value="SAN MARINO (SMR)">SAN MARINO (SMR)</option>
<option value="SINGAPORE (SGP)">SINGAPORE (SGP)</option>
<option value="SLOVAKIA (SVK)">SLOVAKIA (SVK)</option>
<option value="SLOVENIA (SVN)">SLOVENIA (SVN)</option>
<option value="SOUTH KOREA (KOR)">SOUTH KOREA (KOR)</option>
<option value="SPAIN (ESP)">SPAIN (ESP)</option>
<option value="SWEDEN (SWE)">SWEDEN (SWE)</option>
<option value="SWITZERLAND (CHE)">SWITZERLAND (CHE)</option>
<option value="TAIWAN (TWN)">TAIWAN (TWN)</option>
<option value="UK - BRITISH CITIZEN (GBR)">UK - BRITISH CITIZEN (GBR)</option>
<option value="UK - BRITISH DTC (GBD)">UK - BRITISH DTC (GBD)</option>
<option value="UK - BRITISH NATIONAL (O) (GBN)">UK - BRITISH NATIONAL (O) (GBN)</option>
<option value="UK - BRITISH OVERSEAS (GBO)">UK - BRITISH OVERSEAS (GBO)</option>
<option value="UK - BRITISH SUBJECT (GBS)">UK - BRITISH SUBJECT (GBS)</option>
<option value="UK - PROTECTED PERSON (GBP)">UK - PROTECTED PERSON (GBP)</option>';

$usstates = '<option value="" selected disabled>- Select -</option>
<option value="AK">Alaska</option>
<option value="AL">Alabama</option>
<option value="AR">Arkansas</option>
<option value="AZ">Arizona</option>
<option value="CA">California</option>
<option value="CO">Colorado</option>
<option value="CT">Connecticut</option>
<option value="DC">District of Columbia</option>
<option value="DE">Delaware</option>
<option value="FL">Florida</option>
<option value="GA">Georgia</option>
<option value="HI">Hawaii</option>
<option value="IA">Iowa</option>
<option value="ID">Idaho</option>
<option value="IL">Illinois</option>
<option value="IN">Indiana</option>
<option value="KS">Kansas</option>
<option value="KY">Kentucky</option>
<option value="LA">Louisiana</option>
<option value="MA">Massachusetts</option>
<option value="MD">Maryland</option>
<option value="ME">Maine</option>
<option value="MI">Michigan</option>
<option value="MN">Minnesota</option>
<option value="MO">Missouri</option>
<option value="MS">Mississippi</option>
<option value="MT">Montana</option>
<option value="NC">North Carolina</option>
<option value="ND">North Dakota</option>
<option value="NE">Nebraska</option>
<option value="NH">New Hampshire</option>
<option value="NJ">New Jersey</option>
<option value="NM">New Mexico</option>
<option value="NV">Nevada</option>
<option value="NY">New York</option>
<option value="OH">Ohio</option>
<option value="OK">Oklahoma</option>
<option value="OR">Oregon</option>
<option value="PA">Pennsylvania</option>
<option value="RI">Rhode Island</option>
<option value="SC">South Carolina</option>
<option value="SD">South Dakota</option>
<option value="TN">Tennessee</option>
<option value="TX">Texas</option>
<option value="UT">Utah</option>
<option value="VA">Virginia</option>
<option value="VT">Vermont</option>
<option value="WA">Washington</option>
<option value="WI">Wisconsin</option>
<option value="WV">West Virginia</option>
<option value="WY">Wyoming</option>
<option value="UNKNOWN">UNKNOWN</option>';
?>

<div class="container">
<div class="col-sm-2">
</div>
<div class="col-sm-12">
    <h3>APPLICANT / PASSPORT INFORMATION</h3>
    <p>Refer to your passport and enter all information in the same format.</p>
<form method="post" action="https://applyvisausa.com/review/" name="application" id="application">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Family Name<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="In the Family Name field, enter your family name as the family name appears on your passport under the Family Name or Surname field. The family name is required to complete the application."></i></label>
      <input type="text" class="form-control" name="name1" id="name1" data-validate="required" required>

    </div>
    <div class="form-group col-md-6">
      <label for="givenname">First (Given) Name<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="In the First (Given) Name field, enter your first (given) name as the first name appears on your passport under the First or Given Name field. Do not include the middle name in this field. The first name is required to complete the application. If you have no first name, then enter the letters FNU which stands for First Name Unknown."></i></label>
      <input type="text" class="form-control" id-"givenname" name="givenname" data-validate="required" required>
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6" >
    <label for="gender">Gender<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="Choose your gender, either male or female. The gender is required to complete the application."></i></label>
    <select class="form-control" id="gender1" name="gender1" data-validate="required" required>
        <option value="" selected disabled>- Select -</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>
  </div>
  </div>
  
  <hr>
  
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="applicant_aliases">Are you known by any other names or aliases?<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="Indicate whether you are known by any other names or aliases by selecting yes or no. Answering this question is required to complete your application. Enter up to 10 other names or aliases by which you are known if you selected &quot;yes&quot; to this question. At least one entry is required to complete the application."></i></label>
  </div>
  <div class="form-group col-md-6">
	<div class="switch-field">
		<input type="radio" id="aliasyes" name="alias" value="yes" onclick="javascript:yesnoCheck('aliasyes','aliasfields');"/>
		<label for="aliasyes">Yes</label>
		<input type="radio" id="aliasno" name="alias" value="no" onclick="javascript:yesnoCheck('aliasyes','aliasfields');" checked/>
		<label id="1no" for="aliasno">No</label>
	</div>   
  </div>
  </div>

  <div id="aliasfields" style="display:none;">
  <div class="form-row">
      <div class="form-group col-md-6">
          <label for="applicant_alias_family_name" class="control-label">Family Name<i style="color:red;">*</i></label>
          <input name="aliasfamilyname" id="aliasfamilyname" class="form-control" type="text" data-validate="required">
      </div>
      <div class="form-group col-md-6">
          <label for="applicant_alias_family_name" class="control-label">First (Given) Name<i style="color:red;">*</i></label>
          <input name="aliasgivenname" id="aliasgivenname" class="form-control" type="text" data-validate="required">
      </div>
  </div>
  </div>
 
  <hr>
  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="dob" >Date of Birth<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="In the Day field, choose the day on which you were born. The day of birth is required to complete the application or to check the status of your application. In the Month field, choose the month in which you were born. The month of birth is required to complete the application or to check the status of your application. In the Year field, choose the year in which you were born. The year of birth is required to complete the application and to check the status of your application."></i></label>
      <div class="row">
<div class="col-sm-4">
<select name="dobday" class="form-control" data-validate="required" required>
<?php echo $dayoptions;?>
</select>
</div>
<div class="col-sm-4">
<select name="dobmonth" class="form-control" data-validate="required" required>
<?php echo $monthoptions;?>
</select>
</div>
<div class="col-sm-4">
<select name="dobyear" class="form-control" data-validate="required" required>
<?php echo $yearoptions;?>
</select>
</div>

</div>
    </div>
    <div class="form-group col-md-4">
    
    <label for="cob">City of Birth<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="Enter the city, town, village, or hamlet in which you were born. The city, town, village, or hamlet where you were born is required to complete the application. If you do not know the city in which you were born, enter UNKNOWN."></i></label>
    <div class="form-row">
    <div class="col-sm-8">
    <input type="text" class="form-control" name="cob" id="cob" required>
    </div>
    <div class="col-sm-4">
    <a onclick="unknown('cob')" class="btn unknown btn-block btn-primary">UNKNOWN</a>
    </div>

    </div>
    </div>
    <div class="form-group col-md-4">
      <label for="countryob">Country of Birth<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="Choose the country in which you were born. The country where you were born is required to complete the application."></i></label>
      <select name="countryob" class="form-control" data-validate="required" required>
          <?php echo $countryoptions;?>
      </select>
    </div>
    
  </div>
  
  <hr>
  
  <div class="form-row">
    <div class="form-group col-md-4">
        <label for="applicant_passport_number" class="control-label">Passport Number<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="Enter your passport number as it appears on your passport. The passport number may contain numbers and/or characters. Please closely distinguish between the number zero and the letter O. The passport number is required to complete the application or to check the status of your application."></i></label>
        <input name="passportnumber" id="passportnumber" class="form-control" type="text" maxlength="9" data-validate="required" required>
    </div>
    <div class="form-group col-md-4">
        <label for="applicant_country_of_citizenship" class="control-label">Country of Citizenship<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="Choose the country of citizenship, as it appears on your passport. The country of citizenship is required to complete the application."></i></label>
        <select name="countryofcitizenship" id="countryofcitizenship" class="form-control" data-validate="required" required>
            <?php echo $countrycitizenshipoptions;?>
        </select>
    </div>
    <div class="form-group col-md-4">
        <label for="applicant_country_of_citizenship" class="control-label">National Identification Number</label>
        <input name="nin" id="nin" class="form-control" type="text" >
    
    </div>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-4">
        <label for="applicant_passport_number" class="control-label">Confirm Passport Number<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="Enter your passport number as it appears on your passport. The passport number may contain numbers and/or characters. Please closely distinguish between the number zero and the letter O. The passport number is required to complete the application or to check the status of your application."></i></label>
        <input name="confirmpassportnumber" id="confirmpassportnumber" class="form-control" type="text" maxlength="9" oninput='confirmpassportnumber.setCustomValidity(confirmpassportnumber.value != passportnumber.value ? "Please enter the same passport number." : "")' data-validate="required" required>
    </div>
    <div class="form-group col-md-4">
        <label for="applicant_country_of_citizenship" class="control-label">Issuing Country<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="Choose the country of citizenship, as it appears on your passport. The country of citizenship is required to complete the application."></i></label>
        <select name="issuingcountry" id="issuingcountry" class="form-control" data-validate="required" required>
            <?php echo $countrycitizenshipoptions;?>
        </select>
    </div>
    <div class="form-group col-md-4">
        <label for="applicant_country_of_citizenship" class="control-label">Personal Identification Number</label>
        <input name="pin" id="pin" class="form-control" type="text" >
    </div>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-4">
        <label for="applicant_issuance_date_day" class="control-label">Passport Issuance Date<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="In the Day field, choose the day on which your passport was issued, as it appears on your passport under the Date of Issue field. The day on which the passport was issued is required to complete the application. In the Month field, choose the month in which your passport was issued, as it appears on your passport under the Date of Issue field. The month in which the passport was issued is required to complete the application. In the Year field, choose the year in which your passport was issued, as it appears on your passport under the Date of Issue field. The year in which the passport was issued is required to complete the application."></i></label>

<div class="row">
<div class="col-sm-4">
<select name="passportissuanceday" class="form-control" data-validate="required" required>
<?php echo $dayoptions;?>
</select>
</div>
<div class="col-sm-4">
<select name="passportissuancemonth" class="form-control" data-validate="required" required>
<?php echo $monthoptions;?>
</select>
</div>
<div class="col-sm-4">
<select name="passportissuanceyear" class="form-control" data-validate="required" required>
<?php echo $yearoptions;?>
</select>
</div>
</div>
    </div>
    <div class="form-group col-md-4">
        <label for="applicant_expiration_date_day" class="control-label">Passport Expiration Date<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="In the Day field, choose the day on which your passport expires, as it appears on your passport under the Expiration Date field. The day on which the passport expires is required to complete the application. In the Month field, choose the month in which your passport expires, as it appears on your passport under the Expiration Date field. The month in which the passport expires is required to complete the application. In the Year field, choose the year in which your passport expires, as it appears on your passport under the Expiration Date field. The year in which the passport expires is required to complete the application."></i></label>

<div class="row">
<div class="col-sm-4">
<select name="passportexpirationday" class="form-control" data-validate="required" required>
<?php echo $dayoptions;?>
</select>
</div>
<div class="col-sm-4">
<select name="passportexpirationmonth" class="form-control" data-validate="required" required>
<?php echo $monthoptions;?>
</select>
</div>
<div class="col-sm-4">
<select name="passportexpirationyear" class="form-control" data-validate="required" required>
<?php echo $yearoptions;?>
</select>
</div>
</div>

    </div>
    <div class="form-group col-md-4">
        
    </div>
  </div>
  
  <hr>
  
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="applicant_aliases">Have you ever been issued a passport or national identity card for travel by any other country?<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title='If no other country has issued one of these documents, answer "no" to the question. If any other country has issued one of these documents, but does not remember the passport number or the national identity document number and the expiration year, answer "UNKNOWN" in the field for the passport number and four zeroes "0000" In the field for the year of expiration. '></i></label>
  </div>
  <div class="form-group col-md-6">
	<div class="switch-field">
		<input type="radio" id="othercountryyes" name="othercountry" value="yes" onclick="javascript:yesnoCheck('othercountryyes','issued_passport');"/>
		<label for="othercountryyes">Yes</label>
		<input type="radio" id="othercountryno" name="othercountry" value="no" onclick="javascript:yesnoCheck('othercountryyes','issued_passport');" checked/>
		<label for="othercountryno">No</label>
	</div>   
  </div>
  </div>  
  
  <div id="issued_passport" style="display:none;">
      <div class="form-row">
          <div class="form-group col-md-6">
              <label for="applicant_issuing_country" class="control-label">Issuing Country<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" style="" data-original-title="Choose the country of citizenship, as it appears on your passport. The passport issuing country is required to complete the application."></i></label>
              <select class="form-control" name="issued_country" data-validate="required">
                  <?php echo $countryoptions;?>
              </select>
          </div>
          
          <div class="form-group col-md-6">
              <label for="applicant_document_type" class="control-label">Document Type<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" style="" data-original-title="Please select the travel document type issued by another country."></i></label>
              <select class="form-control" name="document_type" data-validate="required">
                  <option>- Select -</option>
                  <option>Passport Number</option>
                  <option>National Identity Card Number</option>
              </select>
          </div>
      </div>
      
      <div class="form-row">
          <div class="form-group col-md-6">
              <label for="applicant_document_number" class="control-label">Document Number<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="Enter your document number as it appears on your travel document. The travel document may contain numbers and/or characters. Please closely distinguish between the number zero and the letter O."></i></label>
              <input name="document_number" id="document_number" class="form-control" type="text">
          </div>
          <div class="form-group col-md-6">
              <label for="applicant_expiration_year" class="control-label">Expiration Year<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="If you have multiple passports or national identity cards for each country please list all current and expired documents for each country that issued you a document."></i></label>
              <input name="document_expiration_year" id="document_expiration_year" class="form-control" type="text" placeholder="YYYY" >
          </div>
      </div>
      
  </div>
  
  
</div>
<div class="col-sm-2">
</div>
</div>

<div class="container">
<div class="col-sm-2">
    
</div>
<div class="col-sm-12">
    <h3>OTHER CITIZENSHIP/NATIONALITY</h3>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="other_citizenship_now_other_country" class="control-label">Are you now, a citizen or national of any other country?<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="If Yes, select the country first, then select how you acquired the citizenship/nationality."></i></label>
  </div>
  <div class="form-group col-md-6">
	<div class="switch-field">
		<input type="radio" id="othercountrycitizenyes" name="othercountrycitizen" value="yes" onclick="javascript:yesnoCheck('othercountrycitizenyes','othernational');"/>
		<label for="othercountrycitizenyes">Yes</label>
		<input type="radio" id="othercountrycitizenno" name="othercountrycitizen" value="no" onclick="javascript:yesnoCheck('othercountrycitizenyes','othernational');" checked/>
		<label for="othercountrycitizenno">No</label>
	</div>   
  </div>
  </div>
  
  <div id="othernational" style="display:none;">
  <div class="form-row">
      <div class="form-group col-md-4">
          <label for="other_citizenship_nationality" class="control-label">Country of Citizenship / Nationality<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="If you have multiple passports or national identity cards for each country please list all current and expired documents for each country that issued you a document."></i></label>
          <select class="form-control" name="othernationality" data-validate="required">
              <?php echo $countryoptions;?>
          </select>
      </div>
      <div class="form-group col-md-4">
          <label for="other_citizenship_how_acquire" class="control-label">How did you acquire citizenship<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="Please indicate whether you acquired citizenship/nationality by birth, through parents, as a national of another country (born in the territory or possession of another country), or by other means."></i></label>
          <select class="form-control" name="acquirecitizenship">
              <option selected disabled>- Select -</option>
              <option>By Birth</option>
              <option>Through Parents</option>
              <option>Naturalized</option>
              <option>Other</option>
          </select>
      </div>
      <div class="form-group col-md-4">
          <label for="other_citizenship_other" class="control-label">Other <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="If you indicated &quot;Other&quot; as your response, please provide additional information in the text field provided."></i></label>
          <input type="text" class="form-control" name="acquirecitizenshipother" disabled>
      </div>
  </div>
  </div>
  
  <hr>
  
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="other_citizenship_ever_other_country" class="control-label">Have you ever been a citizen or national of any other country?<i style="color:red;">*</i> <i data-toggle="tooltip" data-placement="bottom" title="" class="fa fa-question-circle tipso_style" data-original-title="Please, tell us any additional nationality that you might have."></i></label>
  </div>
  <div class="form-group col-md-6">
	<div class="switch-field">
		<input type="radio" id="wasothercountrycitizenyes" name="wasothercountrycitizen" value="yes" onclick="javascript:yesnoCheck('wasothercountrycitizenyes','othernationalpast');"/>
		<label for="wasothercountrycitizenyes">Yes</label>
		<input type="radio" id="wasothercountrycitizenno" name="wasothercountrycitizen" value="no" onclick="javascript:yesnoCheck('wasothercountrycitizenyes','othernationalpast');" checked/>
		<label for="wasothercountrycitizenno">No</label>
	</div>   
  </div>
  
  </div>
  
  <div id="othernationalpast" style="display:none;">
      <div class="form-row">
          <div class="form-group col-md-4">
              <label for="other_citizenship_ever_nationality" class="control-label">Country of Citizenship / Nationality<i style="color:red;">*</i></label>
              <select class="form-control" name="othernationalpast">
                  <?php echo $countryoptions;?>
              </select>
          </div>
      </div>
  </div>
  
</div>
<div class="col-sm-2">
    
</div>
</div> 


<div class="container">
<div class="col-sm-2">
    
</div>
<div class="col-sm-12">
    <h3>GE Membership</h3>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="ge_member_cbp" class="control-label" style="margin-top:10px;">Are you a member of the CBP Global Entry Program?<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="If you answer Yes to the question, please enter your PASSID/Membership Number."></i></label>
  </div>
  <div class="form-group col-md-6">
	<div class="switch-field">
		<input type="radio" id="ge_member_cbpyes" name="ge_member_cbp" value="yes" onclick="javascript:yesnoCheck('ge_member_cbpyes','passid');"/>
		<label for="ge_member_cbpyes">Yes</label>
		<input type="radio" id="ge_member_cbpno" name="ge_member_cbp" value="no" onclick="javascript:yesnoCheck('ge_member_cbpyes','passid');" checked/>
		<label for="ge_member_cbpno">No</label>
	</div>   
  </div>
  </div>
  
  <div id="passid" class="form-row" style="display:none;">
      <div class="form-group col-md-6">
          <label for="ge_passid" class="control-label">PASSID / Membership Number<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="The Membership Number is exactly nine digits. It is labeled as Membership Number / PASSID  and can be found by logging into your GOES account."></i></label>
          <input type="text" class="form-control" name="membershipnumber" data-validate="required">
      </div>
  </div>

  
</div>
<div class="col-sm-2">
    
</div>
</div>



<div class="container">
<div class="col-sm-2">
    
</div>
<div class="col-sm-12">
    <h3>PARENTS</h3>
    <p>Please list your parents names in the boxes to the right. All applicants are required to fill out this section.</p>
  <div class="form-row">
  <div class="form-group col-md-5">
    <label for="parents_family_name_mother" class="control-label">Family Name<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="In the Family Name field, enter your parent's family name. The family name is required to complete the application. If you do not know one or both of your parents, enter UNKNOWN."></i></label> 
    <div class="form-row">
    <div class="col-sm-8">
    <input type="text" class="form-control" name="parentlastname1" id="parentlastname1" required>
    </div>
    <div class="col-sm-4">
    <a onclick="unknown('parentlastname1')" class="btn unknown btn-block btn-primary">UNKNOWN</a>
    </div>
    </div>
  </div>
  
  <div class="form-group col-md-5">
    <label for="parents_given_name_mother" class="control-label">First (Given) Name<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="In the First (Given) Name field, enter your parent's first (given) name. Do not include the middle name in this field. The first name is required to complete the application. If your parent has no first name, or if you do not know one or both of your parents, enter UNKNOWN."></i></label>
    <div class="form-row">
    <div class="col-sm-8">
    <input type="text" class="form-control" name="parentfirstname1" id="parentfirstname1" required>
    </div>
    <div class="col-sm-4">
    <a onclick="unknown('parentfirstname1')" class="btn unknown btn-block btn-primary">UNKNOWN</a>
    </div>
    </div>
  </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-5">
    <label for="parents_family_name_mother" class="control-label">Family Name<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="In the Family Name field, enter your parent's family name. The family name is required to complete the application. If you do not know one or both of your parents, enter UNKNOWN."></i></label> 
    <div class="form-row">
    <div class="col-sm-8">
    <input type="text" class="form-control" name="parentlastname2" id="parentlastname2" required>
    </div>
    <div class="col-sm-4">
    <a onclick="unknown('parentlastname2')" class="btn unknown btn-block btn-primary">UNKNOWN</a>
    </div>
    </div>
  </div>
  
  <div class="form-group col-md-5">
    <label for="parents.given_name_mother" class="control-label">First (Given) Name<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="In the First (Given) Name field, enter your parent's first (given) name. Do not include the middle name in this field. The first name is required to complete the application. If your parent has no first name, or if you do not know one or both of your parents, enter UNKNOWN."></i></label>
    
    <div class="form-row">
    <div class="col-sm-8">
    <input type="text" class="form-control" name="parentfirstname2" id="parentfirstname2" required>
    </div>
    <div class="col-sm-4">
    <a onclick="unknown('parentfirstname2')" class="btn unknown btn-block btn-primary">UNKNOWN</a>
    </div>
    </div>
  </div>
  </div>
  
</div>
<div class="col-sm-2">
    
</div>
</div>



<div class="container">
<div class="col-sm-2">
    
</div>
<div class="col-sm-12">
    <h3>YOUR CONTACT INFORMATION</h3>
    <p>Please enter your contact information below.</p>
  <div class="form-row">
  <div class="form-group col-md-4">
    <label for="addressline1" class="control-label">Address Line 1<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="In the Address Line 1 field, enter the number and street of the location of your home address. Do not include the city and state in this field. Address line 1 is required to complete the application."></i></label>
    <input name="addressline1" id="addressline1" class="form-control" type="text" data-validate="required" required>  
  </div>
  
  <div class="form-group col-md-4">
    <label for="addressline2" class="control-label">Address Line 2 <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="In the Address Line 2 field, enter the number and street of the location of your home address. Do not include the city and state in this field. Address line 2 is required to complete the application."></i></label>
    <input name="addressline2" id="addressline2" class="form-control" type="text">  
  </div>

  <div class="form-group col-md-4">
    <label for="contact_apartment_number" class="control-label">Apartment Number <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="In the Apartment Number field, enter apartment, suite, unit, or other, as appropriate. Do not include the city and state in this field. Apartment number is optional to complete the application."></i></label>
    <input name="apartmentnumber" id="apartmentnumber" class="form-control" type="text">  
  </div>  
  </div>
  
  <div class="form-row">
      <div class="form-group col-md-4">
          <label for="contact_city" class="control-label">City<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="In the City field, enter the city, town, village, or hamlet. The city, town, village, or hamlet is required to complete the application."></i></label>
          <input name="contact_city" id="contact_city" class="form-control" value="" type="text" data-validate="required" required>
      </div>
      <div class="form-group col-md-4">
          <label for="contact_state" class="control-label">State/Province/Region<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="In the State/Province/Region field, enter the state, province, or region. The state/province/region is required to complete the application."></i></label>
          <input name="contact_state" id="contact_state" class="form-control" value="" type="text" data-validate="required" required>
      </div>
      <div class="form-group col-md-4">
          <label for="contact_country" class="control-label">Country<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="In the Country field, choose the country. The country is required to complete the application."></i></label>
          <select class="form-control" name="contact_country" data-validate="required" required>
              <?php echo $countryoptions;?>
          </select>
      </div>
  </div>
  
  <div class="form-row">
      <div class="form-group col-md-4">
          <label for="contact_telephone_type" class="control-label">Telephone Type<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="At least one telephone number is required to complete the application. If you do not have a telephone number, you may provide an alternative third-party telephone number belonging to a point of contact (e.g. a family member, friend, or business associate). In the Type field, choose the type of the telephone number where you may be contacted. The telephone type is required to complete the application."></i></label>
          <select class="form-control" name="contact_telephone" data-validate="required">
              <option selected disabled>- Select -</option>
              <option>Home</option>
              <option>Work</option>
              <option>Mobile</option>
              <option>Other</option>
          </select>
      </div>
      
      <div class="form-group col-md-4">
          <label for="contact_phone_code" class="control-label">Country Code + Phone<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="At least one telephone number is required to complete the application. If you do not have a telephone number, you may provide an alternative third-party telephone number belonging to a point of contact (e.g. a family member, friend, or business associate). In the Country Code field, enter the country code of the telephone number where you may be contacted. The country code is required to complete the application. In the Phone field, enter the telephone number where you may be contacted. The telephone number is required to complete the application."></i></label>
          <div class="form-row">
              <div class="col-md-2">
                  <input maxlength="4" name="contact_phone_code" id="contact_phone_code" class="form-control" type="text" data-validate="required" required>
              </div>
              <div class="col-md-10">
                  <input maxlength="20" name="contact_phone_number" id="contact_phone_number" class="form-control" value="" type="text" data-validate="required" required>
              </div>
          </div>
      </div>
      
  </div>
  
  <div class="form-row">
      <div class="form-group col-md-6">
          <label for="contact_email" class="control-label">E-mail Address<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="Enter the email address at which you can be contacted. The email address is required to complete the application. If you do not have an email address, you may provide an alternative third-party email address belonging to a point of contact (e.g. a family member, friend or business associate.)"></i></label>
          <input name="contact_email" id="contact_email" class="form-control input-block" type="email" data-validate="required" required>
      </div>
      <div class="form-group col-md-6">
          <label for="contact_email_confirm" class="control-label">Confirm E-mail Address<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="Confirm the email address at which you can be contacted."></i></label>
          <input name="contact_email_confirm" id="contact_email_confirm" class="form-control" type="email" data-validate="required" oninput='contact_email_confirm.setCustomValidity(contact_email_confirm.value != contact_email.value ? "Please enter the same email address." : "")' required>
      </div>
  </div>


  
</div>
<div class="col-sm-2">
    
</div>
</div>


<div class="container">
<div class="col-sm-2">
</div>    
<div class="col-sm-12">
    <h3>EMPLOYMENT INFORMATION</h3>
  <div class="form-row">
  <div class="form-group col-md-6">
  <label for="employment_employer" class="control-label" style="margin-top:10px;">Do you have a current or previous employer?<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="Indicate whether you have a current or previous employer by selecting yes or no. Answering this question is required to complete your application."></i></label>  
  </div>
  <div class="form-group col-md-6">
	<div class="switch-field">
		<input type="radio" id="employment_employeryes" name="employment_employer" value="yes" onclick="javascript:yesnoCheck('employment_employeryes','employ');"/>
		<label for="employment_employeryes">Yes</label>
		<input type="radio" id="employment_employerno" name="employment_employer" value="no" onclick="javascript:yesnoCheck('employment_employeryes','employ');" checked/>
		<label for="employment_employerno">No</label>
	</div>   
  </div>
  </div> 
<div id="employ" style="display:none;">  
<div class="form-row">
    <div class="form-group col-md-4">
        <label for="employment_job_title" class="control-label">Job Title <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="Enter the job title of your current or previous employment. Job title is optional to complete this application."></i></label>
        <input type="text" class="form-control" name="jobtitle" data-validate="required">
    </div>
    <div class="form-group col-md-4">
        <label for="employment_name" class="control-label col-md-12 col-sm-12 col-xs-12 no-padding">Employer Name <span class="required" aria-required="true"><i style="color:red;">*</i></span> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="Enter the name of your current employer (the company or organization for whom you work). If you are not currently employed, enter the name of your previous employer. Employer name is required to complete the application. You may also enter SELF-EMPLOYED, STUDENT, CHILD, HOMEMAKER, STAY-AT-HOME PARENT, or any other word to describe your employment status."></i></label>
       
    <div class="form-row">
    <div class="col-sm-8">
    <input type="text" class="form-control" name="employername" id="employername">
    </div>
    <div class="col-sm-4">
    <a onclick="unknown('employername')" class="btn unknown btn-block btn-primary">UNKNOWN</a>
    </div>
    </div>
    
    </div>
    <div class="form-group col-md-4">
        <label for="employment_address_line1" class="control-label col-md-12 col-sm-12 col-xs-12 no-padding">Address Line 1 <span class="required" aria-required="true"><i style="color:red;">*</i></span> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="In the Address Line 1 field, enter the number and street of the location of the employer you listed. Do not include the city and state in this field. Address line 1 is required to complete the application. If you do not know the address of the employer you listed you may enter UNKNOWN."></i></label>
        
    <div class="form-row">
    <div class="col-sm-8">
    <input type="text" class="form-control" name="employeraddress1" id="employeraddress1">
    </div>
    <div class="col-sm-4">
    <a onclick="unknown('employeraddress1')" class="btn unknown btn-block btn-primary">UNKNOWN</a>
    </div>
    </div>
    
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label for="employment_address_line2" class="control-label">Address Line 2 <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="In the Address Line 2 field, enter floor, building, or other, as appropriate. Do not include the city and state in this field. Address line 2 is optional to complete the application."></i></label>
        
        
    <div class="form-row">
    <div class="col-sm-8">
    <input type="text" class="form-control" name="employeraddress2" id="employeraddress2">
    </div>
    <div class="col-sm-4">
    <a onclick="unknown('employeraddress2')" class="btn unknown btn-block btn-primary">UNKNOWN</a>
    </div>
    </div>
    
    </div>
    <div class="form-group col-md-4">
        <label for="employment_city" class="control-label col-md-12 col-sm-12 col-xs-12 no-padding">City <span class="required" aria-required="true"><i style="color:red;">*</i></span> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="In the City field, enter the city, town, village, or hamlet. The city, town, village, or hamlet is required to complete the application. If you do not know the city you may enter UNKNOWN."></i></label>
        
        
    <div class="form-row">
    <div class="col-sm-8">
    <input type="text" class="form-control" name="employercity" id="employercity">
    </div>
    <div class="col-sm-4">
    <a onclick="unknown('employercity')" class="btn unknown btn-block btn-primary">UNKNOWN</a>
    </div>
    </div>
    
    </div>
    <div class="form-group col-md-4">
        <label for="employment_state" class="control-label col-md-12 col-sm-12 col-xs-12 no-padding">State/Province/Region <span class="required" aria-required="true"><i style="color:red;">*</i></span> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="In the State/Province/Region field, enter the state, province, or region. The state/province/region is required to complete the application. If you do not know the state/province/region you may enter UNKNOWN."></i></label>
        
        
    <div class="form-row">
    <div class="col-sm-8">
    <input type="text" class="form-control" name="employerstate" id="employerstate">
    </div>
    <div class="col-sm-4">
    <a onclick="unknown('employerstate')" class="btn unknown btn-block btn-primary">UNKNOWN</a>
    </div>
    </div>
    
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label for="employment_country" class="control-label col-md-12 col-sm-12 col-xs-12 no-padding">Country <span class="required" aria-required="true"><i style="color:red;">*</i></span> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="In the Country field, choose the country. The country is required to complete the application. You may also select UNKNOWN"></i></label>
        <select class="form-control" name="employercountry" data-validate="required">
            <?php echo $countryoptions;?>
        </select>
    </div>
    <div class="form-group col-md-4">
        <label for="employment_phone_code" class="control-label">Country Code + Phone <span class="required" aria-required="true"><i style="color:red;">*</i></span> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="In the Country Code field, enter the country code of your employer's telephone number. The country code is optional to complete the application. In the Phone field, enter your employer's telephone number. The telephone number is optional to complete the application. "></i></label>
        <div class="form-row">
              <div class="col-md-2">
                  <input maxlength="4" name="employer_phone_code" id="employer_phone_code" class="form-control" type="text" data-validate="required">
              </div>
              <div class="col-md-10">
                  <input maxlength="20" name="employer_phone_number" id="employer_phone_number" class="form-control" value="" type="text" data-validate="required">
              </div>
          </div>
    </div>
    <div class="form-group col-md-4">
        
    </div>
</div>
</div>  
  
</div>
<div class="col-sm-2">
</div>    
</div>


<div class="container">
<div class="col-sm-2">
</div>
<div class="col-sm-12">
    <h3>TRAVEL INFORMATION</h3>
  <div class="form-row">
  <div class="form-group col-md-6">
  <label for="us_point_transit" class="control-label">Is your travel to the US occurring in transit to another country? <span class="required" aria-required="true"><i style="color:red;">*</i></span> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="Is your travel to the US occurring in transit to another country?"></i></label>  
  </div>
  <div class="form-group col-md-6">
	<div class="switch-field">
		<input type="radio" id="us_point_transitno" name="us_point_transit" value="no" onclick="javascript:yesnoCheck('us_point_transityes','nottransit');"/>
		<label for="us_point_transitno">Yes</label>
		<input type="radio" id="us_point_transityes" name="us_point_transit" value="yes" onclick="javascript:yesnoCheck('us_point_transityes','nottransit');" checked/>
		<label for="us_point_transityes">No</label>
	</div>   
  </div>
  </div>
</div>
<div class="col-sm-2">
</div>
</div>


<div id="nottransit" style="display:block;">
<div class="container">
<div class="col-sm-2">
</div>
<div class="col-sm-12">
    <h3>U.S. POINT OF CONTACT INFORMATION</h3>
  <div class="form-row">
  <div class="form-group col-md-4">
    <label for="us_point_name" class="control-label col-md-12 col-sm-12 col-xs-12 no-padding">Name <span class="required" aria-required="true"><i style="color:red;">*</i></span> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="A U.S. point of contact may be a friend, relative, or business associate. If you do not have a U.S. point of contact, please enter the name, address and telephone number of the location where you will be staying (e.g. a hotel name). You may also enter UNKNOWN."></i></label>
    
    <div class="form-row">
    <div class="col-sm-8">
    <input type="text" class="form-control" name="usname" id="usname" required>
    </div>
    <div class="col-sm-4">
    <a onclick="unknown('usname')" class="btn unknown btn-block btn-primary">UNKNOWN</a>
    </div>
    </div>
  
  </div>
  <div class="form-group col-md-4">
    <label for="us_point_address_line1" class="control-label col-md-12 col-sm-12 col-xs-12 no-padding">Address Line 1 <span class="required" aria-required="true"><i style="color:red;">*</i></span> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="In the Address Line 1 field, enter the number and street of your US point of contact's address. Do not include the city and state in this field. Address line 1 is required to complete the application. You may also enter UNKNOWN."></i></label>
    
    
    <div class="form-row">
    <div class="col-sm-8">
    <input type="text" class="form-control" name="usaddress1" id="usaddress1" required>
    </div>
    <div class="col-sm-4">
    <a onclick="unknown('usaddress1')" class="btn unknown btn-block btn-primary">UNKNOWN</a>
    </div>
    </div>
 
  </div>
  <div class="form-group col-md-4">
    <label for="us_point_address_line2" class="control-label">Address Line 2 <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="In the Address Line 2 field, enter floor, building, or other, as appropriate. Do not include the city and state in this field. Address line 2 is optional to complete the application."></i></label>
    
    
    <div class="form-row">
    <div class="col-sm-8">
    <input type="text" class="form-control" name="usaddress2" id="usaddress2">
    </div>
    <div class="col-sm-4">
    <a onclick="unknown('usaddress2')" class="btn unknown btn-block btn-primary">UNKNOWN</a>
    </div>
    </div>
  
  </div>
  </div>
  
  <div class="form-row">
  <div class="form-group col-md-4">
    <label for="us_point_apartment_number" class="control-label">Apartment Number <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="In the Apartment Number field, enter apartment, suite, unit, or other, as appropriate. Do not include the city and state in this field. Apartment number is optional to complete the application."></i></label>
    
    
    <div class="form-row">
    <div class="col-sm-8">
    <input type="text" class="form-control" name="usaptnumber" id="usaptnumber">
    </div>
    <div class="col-sm-4">
    <a onclick="unknown('usaptnumber')" class="btn unknown btn-block btn-primary">UNKNOWN</a>
    </div>
    </div>
  
  </div>
  <div class="form-group col-md-4">
    <label for="us_point_city" class="control-label col-md-12 col-sm-12 col-xs-12 no-padding">City <span class="required" aria-required="true"><i style="color:red;">*</i></span> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="In the City field, enter the city. The city is required to complete the application."></i></label>
    
    
    <div class="form-row">
    <div class="col-sm-8">
    <input type="text" class="form-control" name="uscity" id="uscity" required>
    </div>
    <div class="col-sm-4">
    <a onclick="unknown('uscity')" class="btn unknown btn-block btn-primary">UNKNOWN</a>
    </div>
    </div>
  
  </div>
  <div class="form-group col-md-4">
    <label for="us_point_state" class="control-label col-md-12 col-sm-12 col-xs-12 no-padding">State <span class="required" aria-required="true"><i style="color:red;">*</i></span> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="In the State field, enter the state. The state is required to complete the application."></i></label>
    <!--<select class="form-control" name="usstates" data-validate="required" required>
        <?php echo $usstates;?>
    </select>-->
    
    <div class="form-row">
    <div class="col-sm-8">
    <input type="text" class="form-control" name="usstates" id="usstates" data-validate="required" required>
    </div>
    <div class="col-sm-4">
    <a onclick="unknown('usstates')" class="btn unknown btn-block btn-primary">UNKNOWN</a>
    </div>
    </div>
    
    
  </div>
  </div>
  
  <div class="form-row">
  <div class="form-group col-md-4">
    <label for="us_point_phone_number" class="control-label col-md-12 col-sm-12 col-xs-12 no-padding">Phone Number <span class="required" aria-required="true"><i style="color:red;">*</i></span> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="Enter your U.S. point of contact's telephone number. The number is required to complete the application. If you do not have a point of contact telephone number you may enter zeros."></i></label>
    
    <div class="form-row">
    <div class="col-sm-8">
    <input type="text" class="form-control" name="usnumber" id="usnumber" required>
    </div>
    <div class="col-sm-4">
    <a onclick="unknown('usnumber')" class="btn unknown btn-block btn-primary">UNKNOWN</a>
    </div>
    </div>
  
  </div>
  <div class="form-group col-md-4">

  </div>
  <div class="form-group col-md-4">

  </div>
  </div>
</div>
<div class="col-sm-2">
</div>
</div>



<div class="container">
<div class="col-sm-2">
</div>
<div class="col-sm-12">
    <h3>ADDRESS WHILE IN THE U.S.</h3>
  <div class="form-row">
  <div class="form-group col-md-6">
  <label for="us_point_transit_sameaddress" class="control-label col-md-12 col-sm-12 col-xs-12 no-padding">Use the same address as above? <span class="required" aria-required="true"><i style="color:red;">*</i></span></label>
  </div>
  <!-- <div class="form-group col-md-6">
	<div class="switch-field">
		<input type="radio" id="us_point_transit_sameaddressyes" name="us_point_transit_sameaddress" value="yes" onclick="javascript:yesnoCheck('us_point_transit_sameaddressno','ustransit');"/>
		<label for="us_point_transit_sameaddressyes">Yes</label>
		<input type="radio" id="us_point_transit_sameaddressno" name="us_point_transit_sameaddress" value="no" onclick="javascript:yesnoCheck('us_point_transit_sameaddressno','ustransit');" checked/>
		<label for="us_point_transit_sameaddressno">No</label>
	</div>   
  </div> -->
  </div>

<div id="ustransit">  
<div class="form-row">
    <div class="form-group col-md-4">
        <label for="while_in_us_address_line1" class="control-label">Address Line 1 <span class="required" aria-required="true"><i style="color:red;">*</i></span> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="In the Address Line 1 field, enter the number and street of the location where you will stay while in the United States. Do not include the city and state in this field. Address line 1 is optional to complete the application."></i></label>
        <div class="form-row">
         <div class="col-sm-8">
        <input type="text" class="form-control" name="wusaddress1" id="wusaddress1" data-validate="required" required>
</div>
          <div class="col-sm-4">
          <a onclick="unknown('wusaddress1')" class="btn unknown btn-block btn-primary">UNKNOWN</a>
          </div>
         </div>
    </div>

    <div class="form-group col-md-4">
        <label for="while_in_us_address_line2" class="control-label">Address Line 2 <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="In the Address Line 2 field, enter floor, building, or other, as appropriate. Do not include the city and state in this field. Address line 2 is optional to complete the application."></i></label>
        <input type="text" class="form-control" name="wusaddress2">
    </div>
    <div class="form-group col-md-4">
        <label for="while_in_us_apartment_number" class="control-label">Apartment Number <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="In the Apartment Number field, enter apartment, suite, unit, or other, as appropriate. Do not include the city and state in this field. Apartment number is optional to complete the application."></i></label>
        <div class="form-row">
         <div class="col-sm-8">
        <input type="text" class="form-control" name="wusaptnumber" id="wusaptnumber" data-validate="required">
        </div>
          <div class="col-sm-4">
          <a onclick="unknown('wusaptnumber')" class="btn unknown btn-block btn-primary">UNKNOWN</a>
          </div>
         </div>
    </div>
</div> 

<div class="form-row">
    <div class="form-group col-md-4">
        <label for="while_in_us_city" class="control-label">City <span class="required" aria-required="true"><i style="color:red;">*</i></span> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="In the City field, enter the city. The city is required to complete the application."></i></label>
        <div class="form-row">
         <div class="col-sm-8">
        <input type="text" class="form-control" name="wuscity" id="wuscity" data-validate="required" required>
        </div>
          <div class="col-sm-4">
          <a onclick="unknown('wuscity')" class="btn unknown btn-block btn-primary">UNKNOWN</a>
          </div>
         </div>
    </div>
    <div class="form-group col-md-4">
        <label for="while_in_us_state" class="control-label">State <span class="required" aria-required="true"><i style="color:red;">*</i></span> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="In the State field, choose the state. The state is required to complete the application."></i></label>
        <!--<select class="form-control" name="wusstates" data-validate="required" required>
            <?php echo $usstates;?>
        </select>-->
        
    <div class="form-row">
    <div class="col-sm-8">
    <input type="text" class="form-control" name="wusstates" id="wusstates" data-validate="required" required>
    </div>
    <div class="col-sm-4">
    <a onclick="unknown('wusstates')" class="btn unknown btn-block btn-primary">UNKNOWN</a>
    </div>
    </div>
        
        
        
    </div>
    <div class="form-group col-md-4">
        
    </div>
</div> 
</div>
  
</div>
<div class="col-sm-2">
</div>
</div>
</div>


<div class="container">
<div class="col-sm-2">
</div>    
<div class="col-sm-12">
    <h3>EMERGENCY CONTACT INFORMATION IN OR OUT OF THE U.S.</h3>

<div class="form-row">
    <div class="form-group col-md-4">
        <label for="emergency_family_name" class="control-label col-md-12 col-sm-12 col-xs-12 no-padding">Family Name<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="Enter your emergency point of contact who may be a person in or outside of the United States, e.g., a family member, friend, or business associate. In the Family Name field, enter your emergency contact's family name. You must complete this field to complete the application. If you have no emergency contact, enter UNKNOWN."></i></label>
        
        
    <div class="form-row">
    <div class="col-sm-8">
    <input type="text" class="form-control" name="emergency_family_name" id="emergency_family_name">
    </div>
    <div class="col-sm-4">
    <a onclick="unknown('emergency_family_name')" class="btn unknown btn-block btn-primary">UNKNOWN</a>
    </div>
    </div>
    
    </div>
    <div class="form-group col-md-4">
        <label for="emergency_given_name" class="control-label col-md-12 col-sm-12 col-xs-12 no-padding">First (Given) Name<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="Enter your emergency point of contact who may be a person in or outside of the United States, e.g., a family member, friend, or business associate. In the First (Given) Name field, enter the emergency contact's first name. You must complete this field to complete the application. If you have no emergency contact (or your contact has only one name), enter UNKNOWN."></i></label>
       
       
    <div class="form-row">
    <div class="col-sm-8">
    <input type="text" class="form-control" name="emergency_given_name" id="emergency_given_name">
    </div>
    <div class="col-sm-4">
    <a onclick="unknown('emergency_given_name')" class="btn unknown btn-block btn-primary">UNKNOWN</a>
    </div>
    </div>
    
    </div>
    <div class="form-group col-md-4">
        <label for="emergency_email_address" class="control-label col-md-12 col-sm-12 col-xs-12 no-padding">E-mail Address<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="Enter your emergency contact's email address. Email address is required to complete the application. You may also enter UNKNOWN."></i></label>
        
        
    <div class="form-row">
    <div class="col-sm-8">
    <input type="text" class="form-control" name="emergency_email_address" id="emergency_email_address">
    </div>
    <div class="col-sm-4">
    <a onclick="unknown('emergency_email_address')" class="btn unknown btn-block btn-primary">UNKNOWN</a>
    </div>
    </div>
    
    </div>
</div>   

<div class="form-row">
    <div class="form-group col-md-4">
        <label for="emergency_phone_code" class="control-label col-md-12 col-sm-12 col-xs-12 no-padding">Country Code + Phone<i style="color:red;">*</i> <i data-toggle="tooltip" title="" class="fa fa-question-circle tipso_style" data-original-title="In the Country Code field, enter the country code of your emergency contact's telephone number. The country code is required to complete the application. If you do not have an emergency contact telephone country code you may enter zeros. In the Phone field, enter your emergency contact's telephone number. The telephone number is required to complete the application. If you do not have an emergency contact telephone number you may enter zeros."></i></label>
        <div class="form-row">
              <div class="col-md-2">
                  <input maxlength="4" name="emcontact_phone_code" id="emcontact_phone_code" class="form-control" type="text" data-validate="required">
              </div>
              <div class="col-md-6">
                  <input maxlength="20" name="emcontact_phone_number" id="emcontact_phone_number" class="form-control" value="" type="text" data-validate="required">
              </div>
              <div class="col-sm-4">
                  <a onclick="unknown('emcontact_phone_number');unknowncode('emcontact_phone_code')" class="btn unknown btn-block btn-primary">UNKNOWN</a>
              </div>
          </div>
          
    </div>
</div>
    
</div>
<div class="col-sm-2">
</div>    
</div>



<div class="container">
<div class="col-sm-2">
    
</div>
<div class="col-sm-12">
    <h3>ELIGIBILITY QUESTIONS</h3>

<div class="form-row">
<div class="col-sm-10">
<p>1) Do you have a physical or mental disorder; or are you a drug abuser or addict; or do you currently have any of the following diseases (communicable diseases are specified pursuant to section 361(b) of the Public Health Service Act):</p>
<p>Cholera<br><br>Diphtheria<br><br>Tuberculosis, infectious<br><br>Plague<br><br>Smallpox<br><br>Yellow Fever<br><br>Viral Hemorrhagic Fevers, including Ebola, Lassa, Marburg, Crimean-Congo<br><br>Severe acute respiratory illnesses capable of transmission to other persons and likely to cause mortality.<br><br></p></div>
<div class="col-sm-2">

    <div class="switch-field">
		<input type="radio" id="mentaldisorderyes" name="mentaldisorder" onclick="modaldisplay()" value="yes"/>
		<label for="mentaldisorderyes">Yes</label>
		<input type="radio" id="mentaldisorderno" name="mentaldisorder" value="no" checked/>
		<label for="mentaldisorderno">No</label>
	</div>

</div> 
</div>

<hr>

<div class="form-row">
<div class="col-sm-10">
<p>2) Have you ever been arrested or convicted for a crime that resulted in serious damage to property, or serious harm to another person or government authority? </p></div>
<div class="col-sm-2">

    <div class="switch-field">
		<input type="radio" id="convictedforcrimeyes" name="convictedforcrime" onclick="modaldisplay()" value="yes"/>
		<label for="convictedforcrimeyes">Yes</label>
		<input type="radio" id="convictedforcrimeno" name="convictedforcrime" value="no" checked/>
		<label for="convictedforcrimeno">No</label>
	</div>
</div> 
</div>

<hr>

<div class="form-row">
<div class="col-sm-10">
<p>3) Have you ever violated any law related to possessing, using, or distributing illegal drugs?	</p>
</div>
<div class="col-sm-2">

    <div class="switch-field">
		<input type="radio" id="violatedlawyes" name="violatedlaw" onclick="modaldisplay()" value="yes"/>
		<label for="violatedlawyes">Yes</label>
		<input type="radio" id="violatedlawno" name="violatedlaw" value="no" checked/>
		<label for="violatedlawno">No</label>
	</div>

</div> 
</div>


<hr>

<div class="form-row">
<div class="col-sm-10">
<p>4) Do you seek to engage in or have you ever engaged in terrorist activities, espionage, sabotage, or genocide?</p>
</div>
<div class="col-sm-2">
    <div class="switch-field">
		<input type="radio" id="terroristactivityyes" name="terroristactivity" onclick="modaldisplay()" value="yes"/>
		<label for="terroristactivityyes">Yes</label>
		<input type="radio" id="terroristactivityno" name="terroristactivity" value="no" checked/>
		<label for="terroristactivityno">No</label>
	</div> 
</div> 
</div>
<hr>

<div class="form-row">
<div class="col-sm-10">
<p>5) Have you ever committed fraud or misrepresented yourself or others to obtain, or assist others to obtain, a visa or entry into the United States?</p>
</div>
<div class="col-sm-2">
    <div class="switch-field">
		<input type="radio" id="commitfraudyes" name="commitfraud" onclick="modaldisplay()" value="yes"/>
		<label for="commitfraudyes">Yes</label>
		<input type="radio" id="commitfraudno" name="commitfraud" value="no" checked/>
		<label for="commitfraudno">No</label>
	</div> 
</div> 
</div>

<hr>

<div class="form-row">
<div class="col-sm-10">
<p>6) Are you currently seeking employment in the United States or were you previously employed in the United States without prior permission from the U.S. government? </p>
</div>
<div class="col-sm-2">
    <div class="switch-field">
		<input type="radio" id="seekingemploymentyes" name="seekingemployment" onclick="modaldisplay()" value="yes"/>
		<label for="seekingemploymentyes">Yes</label>
		<input type="radio" id="seekingemploymentno" name="seekingemployment" value="no" checked/>
		<label for="seekingemploymentno">No</label>
	</div> 
</div> 
</div>
</div>
<hr>

<div class="form-row">
<div class="col-sm-10">
<p>7) Have you ever been denied a U.S. visa you applied for with your current or previous passport, or have you ever been refused admission to the United States or withdrawn your application for admission at a U.S. port of entry?</p>
</div>
<div class="col-sm-2">
    <div class="switch-field">
		<input type="radio" id="deniedvisayes" name="deniedvisa" onclick="modaldisplay()" value="yes"/>
		<label for="deniedvisayes">Yes</label>
		<input type="radio" id="deniedvisano" name="deniedvisa" value="no" checked/>
		<label for="deniedvisano">No</label>
	</div>
</div> 
</div>

<hr>

<div class="form-row">
<div class="col-sm-10">
<p>8) Have you ever stayed in the United States longer than the admission period granted to you by the U.S. government?	</p>
</div>
<div class="col-sm-2">
    <div class="switch-field">
		<input type="radio" id="stayedlongeryes" name="stayedlonger" onclick="modaldisplay()" value="yes"/>
		<label for="stayedlongeryes">Yes</label>
		<input type="radio" id="stayedlongerno" name="stayedlonger" value="no" checked/>
		<label for="stayedlongerno">No</label>
	</div>
</div> 
</div>

<hr>

<div class="form-row">
<div class="col-sm-10">
<p><p>9) Have you traveled to, or been present in Iraq, Syria, Iran, Sudan, Libya, Somalia or Yemen on or after March 1, 2011?</p>
</div>
<div class="col-sm-2">
    <div class="switch-field">
		<input type="radio" id="traveledtoyes" name="traveledto" onclick="modaldisplay()" value="yes"/>
		<label for="traveledtoyes">Yes</label>
		<input type="radio" id="traveledtono" name="traveledto" value="no" checked/>
		<label for="traveledtono">No</label>
	</div>
</div> 
</div>






<div class="col-sm-2">
    
</div>
</div>

</div>


<div class="container">
<div class="col-sm-2">
</div>
<div class="col-sm-12">
    <h3>APPLICANT'S DECLARATION</h3>
<p>
I declare that the information I have provided in this application is truthful, complete and accurate to the best of my knowledge.
</p>
<p>
I understand that an approved travel authorization is NOT a visa. It does not meet the legal or regulatory requirements to serve in lieu of a United States visa when a visa is required under United States law. Individuals who possess a valid visa will still be able to travel to the United States on that visa for the purpose for which it was issued. Individuals traveling on valid visas are not required to apply for a travel authorization.
</p>
<p>
I have read and understood the terms of the Visa Waiver Program. I understand that If my Electronic Travel Authorization is approved, this approval establishes that I am eligible to travel to the United States under the Visa Waiver Program but does not guarantee that I am admissible to the United States. Upon arrival in the United States, I will be inspected by a Customs and Border Protection officer at a port of entry who may determine that I am inadmissible under the Visa Waiver Program or for any reason under United States law.
</p>
<p>
I understand that attempting to obtain an Electronic System for Travel Authorization (ESTA) under the US Visa Waiver Program by the willful misrepresentation of a material fact, or fraud, is an offense under <a href="http://uscode.house.gov/view.xhtml?req=granuleid:USC-prelim-title8-section1187&amp;num=0&amp;edition=prelim" target="_blank">INA 217, 8 U.S.C. 1187</a> and the <a href="https://www.govinfo.gov/app/details/CFR-2019-title8-vol1/CFR-2019-title8-vol1-part217" target="_blank">CFR Title 8, Subchapter B, Part 217</a> and may result in the permanent refusal of a Travel Authorization, or adjudicated inadmissibility for entry into the USA as well as removal from the United States and its territories after entry has been granted based on such willful misrepresentations.
</p>
<div class="switch-field">
		<input type="radio" id="declarationyes" name="declaration" value="yes" required onclick="enablesub()" checked/>
		<label for="declarationyes">Yes</label>
		<input type="radio" id="declarationno" name="declaration" value="no" onclick="modaldisplayno()"/>
		<label for="declarationno">No</label>
	</div>
<hr>

<h3>Third-Party Authorization</h3>
<p>I understand that I am applying via applyvisausa, LLC; a third-party that is not affiliated with the United States’ government, that the third-party cannot guarantee application approval, that the third-Party service is offered to help expedite the process as experts and that I have the option to apply directly with the pertinent government websites. I also understand that my purchase includes a processing and service fee to applyvisausa, which includes the USD $14.00 non-refundable government fee, required by the <a href="https://www.congress.gov/111/bills/hr2935/BILLS-111hr2935ih.xml" target="_blank">Travel Promotion Act of 2009</a> (Section 9 of the United States Capitol Police Administrative Technical Corrections Act of 2009, Pub. L. No. 111-145).</p>
<p>I confirm and authorize applyvisausa LLC to assist me, by using their processing service in completing and reviewing my application. I understand and acknowledge that I have not been offered legal advice and that this company or its agents and affiliates have never claimed to be qualified to offer legal advice under any circumstance. I also confirm that I am submitting my application and signing it myself.
By obtaining services from the applyvisausa website I have agreed to the following: <a href="/terms-conditions" target="_blank">Terms &amp; Conditions</a> | <a href="/refund-policy" target="_blank">Refund Policy</a> | <a href="/privacy-policy" target="_blank">Privacy Policy</a> <!-- | <a href="/disclaimer" target="_blank">Disclaimer</a> --> </p> 
<div class="switch-field">
		<input type="radio" id="authorizationyes" name="authorization" value="yes" required onclick="enablesub()" checked/>
		<label for="authorizationyes">Yes</label>
		<input type="radio" id="authorizationno" name="authorization" onclick="modaldisplayno()" value="no" />
		<label for="authorizationno">No</label>
	</div>
<hr>

<h3>APPLICANT'S SIGNATURE</h3>
<input type="text" class="form-control col-sm-4" name="signature" placeholder="Enter your full name" required>
<p>
To sign, please enter your full name exactly as it appears on your passport
</p>
<hr>
<input type="hidden" name="applicationid" value="<?php echo $applicationid;?>">
<center><button id="fsubbtn" type="submit" class="btn-3d-sub" style="border-radius:20px;" >SUBMIT</button></center>
</div>
<div class="col-sm-2">
</div>
</div>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.10.1/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script>
// Tooltips Initialization
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>

<script>
var field
    function unknown(field){
        document.getElementById(field).value = "UNKNOWN";
        if(document.getElementById(field).value==="UNKNOWN"){
            
        }else{
            document.getElementById(field).value = "";
        }
    }
    
    
    function unknowncode(field){
        document.getElementById(field).value = "-";
        if(document.getElementById(field).value==="-"){
            
        }else{
            document.getElementById(field).value = "";
        }
    }    
    
    
</script>
<script type="text/javascript">

function yesnoCheck(p1,p2) {

    if (document.getElementById(p1).checked) {
        document.getElementById(p2).style.display = 'block';
    }
    else document.getElementById(p2).style.display = 'none';

}

</script> 

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" style="background: #024C8B; color: white; text-align: center;">
<h5 class="modal-title" style="font-size: 18px;text-align:center;">Are you sure you want to answer YES to this question?</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
          <div class="modal-body" style="text-align:center;">
<p style="font-size:18px;padding: 20px 0;margin-bottom: 0;">Answering "Yes" to any of these eligibility questions may result in an automatic denial of your visa application.</p>
</div>
          <div class="modal-footer" style="text-align: center;">
<button type="button" class="btn btn-primary" data-dismiss="modal" style="background-color: #dc3462; border-color: #dc3462;">OK</button>
<!--<button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="if (!window.__cfRLUnblockHandlers) return false; restoreEligibilityOption()">CANCEL</button>
--></div>
        </div>
      </div>
    </div>
    
    
<div class="modal fade" id="myModalno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" style="background: #024C8B; color: white; text-align: center;">
<h5 class="modal-title" style="font-size: 18px;text-align:center;color:white;">It is Mandatory to accept the Declaration & Third Party Authorization in order to proceed with the submission of the application.</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
          <div class="modal-body" style="text-align:center;">
<p style="font-size:18px;padding: 20px 0;margin-bottom: 0;">Kindly select "Yes" to be able to submit the application.</p>
</div>
          <div class="modal-footer" style="text-align: center;">
<button type="button" class="btn btn-primary" data-dismiss="modal" onclick="checkyesforauth()" style="background-color: #dc3462; border-color: #dc3462;">OK</button>
<!--<button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="if (!window.__cfRLUnblockHandlers) return false; restoreEligibilityOption()">CANCEL</button>
--></div>
        </div>
      </div>
    </div>    
<script>
function checkyesforauth(){
    $("#declarationyes").prop("checked", true);
    $("#authorizationyes").prop("checked", true);
    enablesub();
}

function enablesub(){
    document.getElementById("fsubbtn").disabled = false;
}

function modaldisplay(){
$('#myModal').modal('show');
}

function modaldisplayno(){
$('#myModalno').modal('show');
document.getElementById("fsubbtn").disabled = true;
}
</script>

<script>
$("#application").validate({
            errorElement: "span",
            errorClass: "help-block",
            focusInvalid: !1,
			ignore: ":disabled",
            rules: {

						name1:{
									required: true,
									noSpace: true
							},
						givenname:{
									required: true,
									noSpace: true
							},
						gender1:{
									required: true
							},
						aliasfamilyname:{
									required: true
							},
						aliasgivenname:{
									required: true
							},
						dobday:{
									required: true
							}
							,
						dobmonth:{
									required: true
							}
							,
						dobyear:{
									required: true
							},
						cob:{
									required: true
							},
						passportnumber:{
									required: true,
									noSpace: true
							},
						countryofcitizenship:{
									required: true
							},
						nin:{
									required: true
							},
						confirmpassportnumber:{
									required: true,
									noSpace: true,
									equalTo:"#passportnumber"
							},
							membershipnumber{
							    required: true
							},
							addressline1{
							    required: true
							},
							contact_city{
							    required: true
							},
							contact_state{
							    required: true
							},
							contact_country{
							    required: true
							},
							contact_phone_code{
							    required: true
							},
							contact_phone_number{
							    required: true
							},
							contact_email{
							    required: true,
							    email: true
							},
							contact_email_confirm{
							    equalTo:"#contact_email"
							},
							emergency_family_name{
							    required: true
							},
							emergency_given_name{
							    required: true
							},
							emergency_email_address{
							    required: true
							},
							emcontact_phone_code{
							    required: true
							},
							emcontact_phone_number{
							    required: true
							}
							
             },

             messages: {
             	name1:{
									required: "Family name cannot be empty"

							},
						givenname:{
									required: "Please enter your given name"

							},
						gender1:{
									required: "Please enter your gender"
							},
						aliasfamilyname:{
									required: "Please enter your alias family name"
							},
						aliasgivenname:{
									required: "Please enter your alias given name"
							},
						dobday:{
									required: "Please enter your day of birth"
							}
							,
						dobmonth:{
									required: "Please enter your month of birth"
							}
							,
						dobyear:{
									required: "Please enter your year of birth"
							},
						cob:{
									required: "Please enter your country of birth"
							},
						passportnumber:{
									required: "Please enter your passport number"
							},
						countryofcitizenship:{
									required: "Please enter your country of citizenship"
							},
						nin:{
									required: "Please enter your national identification number"
							},
						confirmpassportnumber:{
									required: "Please enter your passport number",
									equalTo:"Should be same as passport number"
							},
						membershipnumber:{
									required: "Please enter your membership number"
							},
							addressline1{
							    required: required: "Please enter your address line"
							},
							contact_city{
							    required: "Please enter your contact city"
							},
							contact_state{
							    required: "Please enter your state"
							},
							contact_country{
							    required: "Please enter your country"
							},
							contact_phone_code{
							    required: "Please enter your phone code"
							},
							contact_phone_number{
							    required: "Please enter your phone number"
							},
							contact_email{
							    required: "Please enter your email"
							},
							contact_email_confirm{
							    equalTo:"Email must be same"
							},
							emergency_family_name{
							    required: "Please enter your emergency contact's family name"
							},
							emergency_given_name{
							    required: "Please enter your emergency contact's given name"
							},
							emergency_email_address{
							    required: "Please enter the email address"
							},
							emcontact_phone_code{
							    required: "Please enter the phone code"
							},
							emcontact_phone_number{
							    required: "Please enter the phone number"
							}


             },
             errorPlacement: function(error, element) {
		            if (element.hasClass('customError')) {
		            	$(element).parents('.row').find('.cstError').html('');
		                error.appendTo($(element).parents('.row').find('.cstError'));
		            }
		            else if (element.hasClass('customError_exp')) {
		            	$(element).parents('.row').find('.cstError_exp').html('');
		                error.appendTo($(element).parents('.row').find('.cstError_exp'));
		            }
		            else if (element.hasClass('customError_iss')) {
		            	$(element).parents('.row').find('.cstError_iss').html('');
		                error.appendTo($(element).parents('.row').find('.cstError_iss'));
		            }
		            else {
									element.after(error); // default error placement

									// Corrects the span width depending on the case
								//	correct_span(error[0].id.split('_')[0], error, element);
								}
		      },
             invalidHandler: function(form, validator) {

			        if (!validator.numberOfInvalids())
			            return;
                   // console.log($(validator.errorList[0].element).prop("id"))
			        $('html, body').animate({

			            scrollTop: $(validator.errorList[0].element).offset().top
			        }, 2000);

			    },
             highlight: function(e) {

                    $(e).parent().addClass("error-red")
                },
             submitHandler: function(e) {


                 //e.submit()
                 valid=$("#application").valid();



                }
                
                



             })

</script>


<?php
get_footer(); 
?>