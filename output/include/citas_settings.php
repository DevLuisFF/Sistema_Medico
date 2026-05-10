<?php




$tdatacitas = array();
$tdatacitas[".searchableFields"] = array();
	$tdatacitas[".truncateText"] = true;
	$tdatacitas[".NumberOfChars"] = 80;
	$tdatacitas[".ShortName"] = "citas";
	$tdatacitas[".OwnerID"] = "";
	$tdatacitas[".OriginalTable"] = "citas";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatacitas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacitas[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelscitas = array();
$fieldToolTipscitas = array();
$pageTitlescitas = array();
$placeHolderscitas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscitas["Spanish"] = array();
	$fieldToolTipscitas["Spanish"] = array();
	$placeHolderscitas["Spanish"] = array();
	$pageTitlescitas["Spanish"] = array();
	$fieldLabelscitas["Spanish"]["id_cita"] = "Id Cita";
	$fieldToolTipscitas["Spanish"]["id_cita"] = "";
	$placeHolderscitas["Spanish"]["id_cita"] = "";
	$fieldLabelscitas["Spanish"]["id_paciente"] = "Id Paciente";
	$fieldToolTipscitas["Spanish"]["id_paciente"] = "";
	$placeHolderscitas["Spanish"]["id_paciente"] = "";
	$fieldLabelscitas["Spanish"]["id_medico"] = "Id Medico";
	$fieldToolTipscitas["Spanish"]["id_medico"] = "";
	$placeHolderscitas["Spanish"]["id_medico"] = "";
	$fieldLabelscitas["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipscitas["Spanish"]["fecha"] = "";
	$placeHolderscitas["Spanish"]["fecha"] = "";
	$fieldLabelscitas["Spanish"]["hora"] = "Hora";
	$fieldToolTipscitas["Spanish"]["hora"] = "";
	$placeHolderscitas["Spanish"]["hora"] = "";
	$fieldLabelscitas["Spanish"]["estado"] = "Estado";
	$fieldToolTipscitas["Spanish"]["estado"] = "";
	$placeHolderscitas["Spanish"]["estado"] = "";
	$fieldLabelscitas["Spanish"]["motivo"] = "Motivo";
	$fieldToolTipscitas["Spanish"]["motivo"] = "";
	$placeHolderscitas["Spanish"]["motivo"] = "";
	$fieldLabelscitas["Spanish"]["diagnostico"] = "Diagnostico";
	$fieldToolTipscitas["Spanish"]["diagnostico"] = "";
	$placeHolderscitas["Spanish"]["diagnostico"] = "";
	$fieldLabelscitas["Spanish"]["tratamiento"] = "Tratamiento";
	$fieldToolTipscitas["Spanish"]["tratamiento"] = "";
	$placeHolderscitas["Spanish"]["tratamiento"] = "";
	$fieldLabelscitas["Spanish"]["receta"] = "Receta";
	$fieldToolTipscitas["Spanish"]["receta"] = "";
	$placeHolderscitas["Spanish"]["receta"] = "";
	$fieldLabelscitas["Spanish"]["notas"] = "Notas";
	$fieldToolTipscitas["Spanish"]["notas"] = "";
	$placeHolderscitas["Spanish"]["notas"] = "";
	$fieldLabelscitas["Spanish"]["created_at"] = "Created At";
	$fieldToolTipscitas["Spanish"]["created_at"] = "";
	$placeHolderscitas["Spanish"]["created_at"] = "";
	if (count($fieldToolTipscitas["Spanish"]))
		$tdatacitas[".isUseToolTips"] = true;
}


	$tdatacitas[".NCSearch"] = true;



$tdatacitas[".shortTableName"] = "citas";
$tdatacitas[".nSecOptions"] = 0;

$tdatacitas[".mainTableOwnerID"] = "";
$tdatacitas[".entityType"] = 0;

$tdatacitas[".strOriginalTableName"] = "citas";

	



$tdatacitas[".showAddInPopup"] = false;

$tdatacitas[".showEditInPopup"] = false;

$tdatacitas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacitas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacitas[".listAjax"] = false;
//	temporary
$tdatacitas[".listAjax"] = false;

	$tdatacitas[".audit"] = false;

	$tdatacitas[".locking"] = false;


$pages = $tdatacitas[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacitas[".edit"] = true;
	$tdatacitas[".afterEditAction"] = 1;
	$tdatacitas[".closePopupAfterEdit"] = 1;
	$tdatacitas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacitas[".add"] = true;
$tdatacitas[".afterAddAction"] = 1;
$tdatacitas[".closePopupAfterAdd"] = 1;
$tdatacitas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacitas[".list"] = true;
}



$tdatacitas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacitas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacitas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacitas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacitas[".printFriendly"] = true;
}



$tdatacitas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacitas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacitas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacitas[".isUseAjaxSuggest"] = true;

$tdatacitas[".rowHighlite"] = true;




$tdatacitas[".flexibleSearch"] = true;


$tdatacitas[".ajaxCodeSnippetAdded"] = false;

$tdatacitas[".buttonsAdded"] = false;

$tdatacitas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacitas[".isUseTimeForSearch"] = false;


$tdatacitas[".badgeColor"] = "6B8E23";


$tdatacitas[".allSearchFields"] = array();
$tdatacitas[".filterFields"] = array();
$tdatacitas[".requiredSearchFields"] = array();

$tdatacitas[".googleLikeFields"] = array();
$tdatacitas[".googleLikeFields"][] = "id_cita";
$tdatacitas[".googleLikeFields"][] = "id_paciente";
$tdatacitas[".googleLikeFields"][] = "id_medico";
$tdatacitas[".googleLikeFields"][] = "fecha";
$tdatacitas[".googleLikeFields"][] = "hora";
$tdatacitas[".googleLikeFields"][] = "estado";
$tdatacitas[".googleLikeFields"][] = "motivo";
$tdatacitas[".googleLikeFields"][] = "diagnostico";
$tdatacitas[".googleLikeFields"][] = "tratamiento";
$tdatacitas[".googleLikeFields"][] = "receta";
$tdatacitas[".googleLikeFields"][] = "notas";
$tdatacitas[".googleLikeFields"][] = "created_at";



$tdatacitas[".tableType"] = "list";

$tdatacitas[".printerPageOrientation"] = 0;
$tdatacitas[".nPrinterPageScale"] = 100;

$tdatacitas[".nPrinterSplitRecords"] = 40;

$tdatacitas[".nPrinterPDFSplitRecords"] = 40;


$tdatacitas[".geocodingEnabled"] = false;










$tdatacitas[".pageSize"] = 20;

$tdatacitas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacitas[".strOrderBy"] = $tstrOrderBy;

$tdatacitas[".orderindexes"] = array();

$tdatacitas[".sqlHead"] = "SELECT id_cita,  	id_paciente,  	id_medico,  	fecha,  	hora,  	estado,  	motivo,  	diagnostico,  	tratamiento,  	receta,  	notas,  	created_at";
$tdatacitas[".sqlFrom"] = "FROM citas";
$tdatacitas[".sqlWhereExpr"] = "";
$tdatacitas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacitas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacitas[".arrGroupsPerPage"] = $arrGPP;

$tdatacitas[".highlightSearchResults"] = true;

$tableKeyscitas = array();
$tableKeyscitas[] = "id_cita";
$tdatacitas[".Keys"] = $tableKeyscitas;


$tdatacitas[".hideMobileList"] = array();




//	id_cita
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_cita";
	$fdata["GoodName"] = "id_cita";
	$fdata["ownerTable"] = "citas";
	$fdata["Label"] = GetFieldLabel("citas","id_cita");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_cita";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_cita";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatacitas["id_cita"] = $fdata;
		$tdatacitas[".searchableFields"][] = "id_cita";
//	id_paciente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_paciente";
	$fdata["GoodName"] = "id_paciente";
	$fdata["ownerTable"] = "citas";
	$fdata["Label"] = GetFieldLabel("citas","id_paciente");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_paciente";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_paciente";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "pacientes";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_paciente";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "id_paciente";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatacitas["id_paciente"] = $fdata;
		$tdatacitas[".searchableFields"][] = "id_paciente";
//	id_medico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_medico";
	$fdata["GoodName"] = "id_medico";
	$fdata["ownerTable"] = "citas";
	$fdata["Label"] = GetFieldLabel("citas","id_medico");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_medico";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_medico";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "medicos";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_medico";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "id_medico";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatacitas["id_medico"] = $fdata;
		$tdatacitas[".searchableFields"][] = "id_medico";
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "citas";
	$fdata["Label"] = GetFieldLabel("citas","fecha");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatacitas["fecha"] = $fdata;
		$tdatacitas[".searchableFields"][] = "fecha";
//	hora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "hora";
	$fdata["GoodName"] = "hora";
	$fdata["ownerTable"] = "citas";
	$fdata["Label"] = GetFieldLabel("citas","hora");
	$fdata["FieldType"] = 134;

	
	
	
			

		$fdata["strField"] = "hora";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hora";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatacitas["hora"] = $fdata;
		$tdatacitas[".searchableFields"][] = "hora";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "citas";
	$fdata["Label"] = GetFieldLabel("citas","estado");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "estado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatacitas["estado"] = $fdata;
		$tdatacitas[".searchableFields"][] = "estado";
//	motivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "motivo";
	$fdata["GoodName"] = "motivo";
	$fdata["ownerTable"] = "citas";
	$fdata["Label"] = GetFieldLabel("citas","motivo");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "motivo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "motivo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatacitas["motivo"] = $fdata;
		$tdatacitas[".searchableFields"][] = "motivo";
//	diagnostico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "diagnostico";
	$fdata["GoodName"] = "diagnostico";
	$fdata["ownerTable"] = "citas";
	$fdata["Label"] = GetFieldLabel("citas","diagnostico");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "diagnostico";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "diagnostico";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatacitas["diagnostico"] = $fdata;
		$tdatacitas[".searchableFields"][] = "diagnostico";
//	tratamiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "tratamiento";
	$fdata["GoodName"] = "tratamiento";
	$fdata["ownerTable"] = "citas";
	$fdata["Label"] = GetFieldLabel("citas","tratamiento");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "tratamiento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tratamiento";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatacitas["tratamiento"] = $fdata;
		$tdatacitas[".searchableFields"][] = "tratamiento";
//	receta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "receta";
	$fdata["GoodName"] = "receta";
	$fdata["ownerTable"] = "citas";
	$fdata["Label"] = GetFieldLabel("citas","receta");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "receta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "receta";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatacitas["receta"] = $fdata;
		$tdatacitas[".searchableFields"][] = "receta";
//	notas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "notas";
	$fdata["GoodName"] = "notas";
	$fdata["ownerTable"] = "citas";
	$fdata["Label"] = GetFieldLabel("citas","notas");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "notas";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "notas";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatacitas["notas"] = $fdata;
		$tdatacitas[".searchableFields"][] = "notas";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "citas";
	$fdata["Label"] = GetFieldLabel("citas","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "created_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_at";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatacitas["created_at"] = $fdata;
		$tdatacitas[".searchableFields"][] = "created_at";


$tables_data["citas"]=&$tdatacitas;
$field_labels["citas"] = &$fieldLabelscitas;
$fieldToolTips["citas"] = &$fieldToolTipscitas;
$placeHolders["citas"] = &$placeHolderscitas;
$page_titles["citas"] = &$pageTitlescitas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["citas"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["citas"] = array();



	
				$strOriginalDetailsTable="medicos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="medicos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "medicos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["citas"][0] = $masterParams;
				$masterTablesData["citas"][0]["masterKeys"] = array();
	$masterTablesData["citas"][0]["masterKeys"][]="id_medico";
				$masterTablesData["citas"][0]["detailKeys"] = array();
	$masterTablesData["citas"][0]["detailKeys"][]="id_medico";
		
	
				$strOriginalDetailsTable="pacientes";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="pacientes";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pacientes";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["citas"][1] = $masterParams;
				$masterTablesData["citas"][1]["masterKeys"] = array();
	$masterTablesData["citas"][1]["masterKeys"][]="id_paciente";
				$masterTablesData["citas"][1]["detailKeys"] = array();
	$masterTablesData["citas"][1]["detailKeys"][]="id_paciente";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_citas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_cita,  	id_paciente,  	id_medico,  	fecha,  	hora,  	estado,  	motivo,  	diagnostico,  	tratamiento,  	receta,  	notas,  	created_at";
$proto0["m_strFrom"] = "FROM citas";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cita",
	"m_strTable" => "citas",
	"m_srcTableName" => "citas"
));

$proto6["m_sql"] = "id_cita";
$proto6["m_srcTableName"] = "citas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_paciente",
	"m_strTable" => "citas",
	"m_srcTableName" => "citas"
));

$proto8["m_sql"] = "id_paciente";
$proto8["m_srcTableName"] = "citas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_medico",
	"m_strTable" => "citas",
	"m_srcTableName" => "citas"
));

$proto10["m_sql"] = "id_medico";
$proto10["m_srcTableName"] = "citas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "citas",
	"m_srcTableName" => "citas"
));

$proto12["m_sql"] = "fecha";
$proto12["m_srcTableName"] = "citas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "hora",
	"m_strTable" => "citas",
	"m_srcTableName" => "citas"
));

$proto14["m_sql"] = "hora";
$proto14["m_srcTableName"] = "citas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "citas",
	"m_srcTableName" => "citas"
));

$proto16["m_sql"] = "estado";
$proto16["m_srcTableName"] = "citas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "motivo",
	"m_strTable" => "citas",
	"m_srcTableName" => "citas"
));

$proto18["m_sql"] = "motivo";
$proto18["m_srcTableName"] = "citas";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "diagnostico",
	"m_strTable" => "citas",
	"m_srcTableName" => "citas"
));

$proto20["m_sql"] = "diagnostico";
$proto20["m_srcTableName"] = "citas";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "tratamiento",
	"m_strTable" => "citas",
	"m_srcTableName" => "citas"
));

$proto22["m_sql"] = "tratamiento";
$proto22["m_srcTableName"] = "citas";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "receta",
	"m_strTable" => "citas",
	"m_srcTableName" => "citas"
));

$proto24["m_sql"] = "receta";
$proto24["m_srcTableName"] = "citas";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "notas",
	"m_strTable" => "citas",
	"m_srcTableName" => "citas"
));

$proto26["m_sql"] = "notas";
$proto26["m_srcTableName"] = "citas";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "citas",
	"m_srcTableName" => "citas"
));

$proto28["m_sql"] = "created_at";
$proto28["m_srcTableName"] = "citas";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "citas";
$proto31["m_srcTableName"] = "citas";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id_cita";
$proto31["m_columns"][] = "id_paciente";
$proto31["m_columns"][] = "id_medico";
$proto31["m_columns"][] = "fecha";
$proto31["m_columns"][] = "hora";
$proto31["m_columns"][] = "estado";
$proto31["m_columns"][] = "motivo";
$proto31["m_columns"][] = "diagnostico";
$proto31["m_columns"][] = "tratamiento";
$proto31["m_columns"][] = "receta";
$proto31["m_columns"][] = "notas";
$proto31["m_columns"][] = "created_at";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "citas";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "citas";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="citas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_citas = createSqlQuery_citas();


	
		;

												

$tdatacitas[".sqlquery"] = $queryData_citas;

$tableEvents["citas"] = new eventsBase;
$tdatacitas[".hasEvents"] = false;

?>