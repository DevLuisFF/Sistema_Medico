<?php




$tdatamedicos = array();
$tdatamedicos[".searchableFields"] = array();
	$tdatamedicos[".truncateText"] = true;
	$tdatamedicos[".NumberOfChars"] = 80;
	$tdatamedicos[".ShortName"] = "medicos";
	$tdatamedicos[".OwnerID"] = "";
	$tdatamedicos[".OriginalTable"] = "medicos";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatamedicos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamedicos[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsmedicos = array();
$fieldToolTipsmedicos = array();
$pageTitlesmedicos = array();
$placeHoldersmedicos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmedicos["Spanish"] = array();
	$fieldToolTipsmedicos["Spanish"] = array();
	$placeHoldersmedicos["Spanish"] = array();
	$pageTitlesmedicos["Spanish"] = array();
	$fieldLabelsmedicos["Spanish"]["id_medico"] = "Id Medico";
	$fieldToolTipsmedicos["Spanish"]["id_medico"] = "";
	$placeHoldersmedicos["Spanish"]["id_medico"] = "";
	$fieldLabelsmedicos["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsmedicos["Spanish"]["nombre"] = "";
	$placeHoldersmedicos["Spanish"]["nombre"] = "";
	$fieldLabelsmedicos["Spanish"]["apellido"] = "Apellido";
	$fieldToolTipsmedicos["Spanish"]["apellido"] = "";
	$placeHoldersmedicos["Spanish"]["apellido"] = "";
	$fieldLabelsmedicos["Spanish"]["telefono"] = "Telefono";
	$fieldToolTipsmedicos["Spanish"]["telefono"] = "";
	$placeHoldersmedicos["Spanish"]["telefono"] = "";
	$fieldLabelsmedicos["Spanish"]["email"] = "Email";
	$fieldToolTipsmedicos["Spanish"]["email"] = "";
	$placeHoldersmedicos["Spanish"]["email"] = "";
	$fieldLabelsmedicos["Spanish"]["id_especialidad"] = "Id Especialidad";
	$fieldToolTipsmedicos["Spanish"]["id_especialidad"] = "";
	$placeHoldersmedicos["Spanish"]["id_especialidad"] = "";
	$fieldLabelsmedicos["Spanish"]["activo"] = "Activo";
	$fieldToolTipsmedicos["Spanish"]["activo"] = "";
	$placeHoldersmedicos["Spanish"]["activo"] = "";
	if (count($fieldToolTipsmedicos["Spanish"]))
		$tdatamedicos[".isUseToolTips"] = true;
}


	$tdatamedicos[".NCSearch"] = true;



$tdatamedicos[".shortTableName"] = "medicos";
$tdatamedicos[".nSecOptions"] = 0;

$tdatamedicos[".mainTableOwnerID"] = "";
$tdatamedicos[".entityType"] = 0;

$tdatamedicos[".strOriginalTableName"] = "medicos";

	



$tdatamedicos[".showAddInPopup"] = false;

$tdatamedicos[".showEditInPopup"] = false;

$tdatamedicos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamedicos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamedicos[".listAjax"] = false;
//	temporary
$tdatamedicos[".listAjax"] = false;

	$tdatamedicos[".audit"] = false;

	$tdatamedicos[".locking"] = false;


$pages = $tdatamedicos[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamedicos[".edit"] = true;
	$tdatamedicos[".afterEditAction"] = 1;
	$tdatamedicos[".closePopupAfterEdit"] = 1;
	$tdatamedicos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamedicos[".add"] = true;
$tdatamedicos[".afterAddAction"] = 1;
$tdatamedicos[".closePopupAfterAdd"] = 1;
$tdatamedicos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamedicos[".list"] = true;
}



$tdatamedicos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamedicos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamedicos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamedicos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamedicos[".printFriendly"] = true;
}



$tdatamedicos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamedicos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamedicos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamedicos[".isUseAjaxSuggest"] = true;

$tdatamedicos[".rowHighlite"] = true;




$tdatamedicos[".flexibleSearch"] = true;


$tdatamedicos[".ajaxCodeSnippetAdded"] = false;

$tdatamedicos[".buttonsAdded"] = false;

$tdatamedicos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamedicos[".isUseTimeForSearch"] = false;


$tdatamedicos[".badgeColor"] = "EDCA00";


$tdatamedicos[".allSearchFields"] = array();
$tdatamedicos[".filterFields"] = array();
$tdatamedicos[".requiredSearchFields"] = array();

$tdatamedicos[".googleLikeFields"] = array();
$tdatamedicos[".googleLikeFields"][] = "id_medico";
$tdatamedicos[".googleLikeFields"][] = "nombre";
$tdatamedicos[".googleLikeFields"][] = "apellido";
$tdatamedicos[".googleLikeFields"][] = "telefono";
$tdatamedicos[".googleLikeFields"][] = "email";
$tdatamedicos[".googleLikeFields"][] = "id_especialidad";
$tdatamedicos[".googleLikeFields"][] = "activo";



$tdatamedicos[".tableType"] = "list";

$tdatamedicos[".printerPageOrientation"] = 0;
$tdatamedicos[".nPrinterPageScale"] = 100;

$tdatamedicos[".nPrinterSplitRecords"] = 40;

$tdatamedicos[".nPrinterPDFSplitRecords"] = 40;


$tdatamedicos[".geocodingEnabled"] = false;










$tdatamedicos[".pageSize"] = 20;

$tdatamedicos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamedicos[".strOrderBy"] = $tstrOrderBy;

$tdatamedicos[".orderindexes"] = array();

$tdatamedicos[".sqlHead"] = "SELECT id_medico,  	nombre,  	apellido,  	telefono,  	email,  	id_especialidad,  	activo";
$tdatamedicos[".sqlFrom"] = "FROM medicos";
$tdatamedicos[".sqlWhereExpr"] = "";
$tdatamedicos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamedicos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamedicos[".arrGroupsPerPage"] = $arrGPP;

$tdatamedicos[".highlightSearchResults"] = true;

$tableKeysmedicos = array();
$tableKeysmedicos[] = "id_medico";
$tdatamedicos[".Keys"] = $tableKeysmedicos;


$tdatamedicos[".hideMobileList"] = array();




//	id_medico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_medico";
	$fdata["GoodName"] = "id_medico";
	$fdata["ownerTable"] = "medicos";
	$fdata["Label"] = GetFieldLabel("medicos","id_medico");
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


	$tdatamedicos["id_medico"] = $fdata;
		$tdatamedicos[".searchableFields"][] = "id_medico";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "medicos";
	$fdata["Label"] = GetFieldLabel("medicos","nombre");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nombre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatamedicos["nombre"] = $fdata;
		$tdatamedicos[".searchableFields"][] = "nombre";
//	apellido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "apellido";
	$fdata["GoodName"] = "apellido";
	$fdata["ownerTable"] = "medicos";
	$fdata["Label"] = GetFieldLabel("medicos","apellido");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "apellido";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "apellido";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatamedicos["apellido"] = $fdata;
		$tdatamedicos[".searchableFields"][] = "apellido";
//	telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "telefono";
	$fdata["GoodName"] = "telefono";
	$fdata["ownerTable"] = "medicos";
	$fdata["Label"] = GetFieldLabel("medicos","telefono");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "telefono";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "telefono";

	
	
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


	$tdatamedicos["telefono"] = $fdata;
		$tdatamedicos[".searchableFields"][] = "telefono";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "medicos";
	$fdata["Label"] = GetFieldLabel("medicos","email");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatamedicos["email"] = $fdata;
		$tdatamedicos[".searchableFields"][] = "email";
//	id_especialidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "id_especialidad";
	$fdata["GoodName"] = "id_especialidad";
	$fdata["ownerTable"] = "medicos";
	$fdata["Label"] = GetFieldLabel("medicos","id_especialidad");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_especialidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_especialidad";

	
	
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
	$edata["LookupTable"] = "especialidades";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_especialidad";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "id_especialidad";

	

	
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


	$tdatamedicos["id_especialidad"] = $fdata;
		$tdatamedicos[".searchableFields"][] = "id_especialidad";
//	activo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "activo";
	$fdata["GoodName"] = "activo";
	$fdata["ownerTable"] = "medicos";
	$fdata["Label"] = GetFieldLabel("medicos","activo");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "activo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "activo";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatamedicos["activo"] = $fdata;
		$tdatamedicos[".searchableFields"][] = "activo";


$tables_data["medicos"]=&$tdatamedicos;
$field_labels["medicos"] = &$fieldLabelsmedicos;
$fieldToolTips["medicos"] = &$fieldToolTipsmedicos;
$placeHolders["medicos"] = &$placeHoldersmedicos;
$page_titles["medicos"] = &$pageTitlesmedicos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["medicos"] = array();
//	citas
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="citas";
		$detailsParam["dOriginalTable"] = "citas";


	
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "citas";
	$detailsParam["dCaptionTable"] = GetTableCaption("citas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["medicos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["medicos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["medicos"][$dIndex]["masterKeys"][]="id_medico";

				$detailsTablesData["medicos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["medicos"][$dIndex]["detailKeys"][]="id_medico";

// tables which are master tables for current table (detail)
$masterTablesData["medicos"] = array();



	
				$strOriginalDetailsTable="especialidades";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="especialidades";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "especialidades";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["medicos"][0] = $masterParams;
				$masterTablesData["medicos"][0]["masterKeys"] = array();
	$masterTablesData["medicos"][0]["masterKeys"][]="id_especialidad";
				$masterTablesData["medicos"][0]["detailKeys"] = array();
	$masterTablesData["medicos"][0]["detailKeys"][]="id_especialidad";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_medicos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_medico,  	nombre,  	apellido,  	telefono,  	email,  	id_especialidad,  	activo";
$proto0["m_strFrom"] = "FROM medicos";
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
	"m_strName" => "id_medico",
	"m_strTable" => "medicos",
	"m_srcTableName" => "medicos"
));

$proto6["m_sql"] = "id_medico";
$proto6["m_srcTableName"] = "medicos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "medicos",
	"m_srcTableName" => "medicos"
));

$proto8["m_sql"] = "nombre";
$proto8["m_srcTableName"] = "medicos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "apellido",
	"m_strTable" => "medicos",
	"m_srcTableName" => "medicos"
));

$proto10["m_sql"] = "apellido";
$proto10["m_srcTableName"] = "medicos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "telefono",
	"m_strTable" => "medicos",
	"m_srcTableName" => "medicos"
));

$proto12["m_sql"] = "telefono";
$proto12["m_srcTableName"] = "medicos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "medicos",
	"m_srcTableName" => "medicos"
));

$proto14["m_sql"] = "email";
$proto14["m_srcTableName"] = "medicos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "id_especialidad",
	"m_strTable" => "medicos",
	"m_srcTableName" => "medicos"
));

$proto16["m_sql"] = "id_especialidad";
$proto16["m_srcTableName"] = "medicos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "activo",
	"m_strTable" => "medicos",
	"m_srcTableName" => "medicos"
));

$proto18["m_sql"] = "activo";
$proto18["m_srcTableName"] = "medicos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "medicos";
$proto21["m_srcTableName"] = "medicos";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id_medico";
$proto21["m_columns"][] = "nombre";
$proto21["m_columns"][] = "apellido";
$proto21["m_columns"][] = "telefono";
$proto21["m_columns"][] = "email";
$proto21["m_columns"][] = "id_especialidad";
$proto21["m_columns"][] = "activo";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "medicos";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "medicos";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="medicos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_medicos = createSqlQuery_medicos();


	
		;

							

$tdatamedicos[".sqlquery"] = $queryData_medicos;

$tableEvents["medicos"] = new eventsBase;
$tdatamedicos[".hasEvents"] = false;

?>