<?php




$tdatapacientes = array();
$tdatapacientes[".searchableFields"] = array();
	$tdatapacientes[".truncateText"] = true;
	$tdatapacientes[".NumberOfChars"] = 80;
	$tdatapacientes[".ShortName"] = "pacientes";
	$tdatapacientes[".OwnerID"] = "";
	$tdatapacientes[".OriginalTable"] = "pacientes";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatapacientes[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapacientes[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelspacientes = array();
$fieldToolTipspacientes = array();
$pageTitlespacientes = array();
$placeHolderspacientes = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspacientes["Spanish"] = array();
	$fieldToolTipspacientes["Spanish"] = array();
	$placeHolderspacientes["Spanish"] = array();
	$pageTitlespacientes["Spanish"] = array();
	$fieldLabelspacientes["Spanish"]["id_paciente"] = "Id Paciente";
	$fieldToolTipspacientes["Spanish"]["id_paciente"] = "";
	$placeHolderspacientes["Spanish"]["id_paciente"] = "";
	$fieldLabelspacientes["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipspacientes["Spanish"]["nombre"] = "";
	$placeHolderspacientes["Spanish"]["nombre"] = "";
	$fieldLabelspacientes["Spanish"]["apellido"] = "Apellido";
	$fieldToolTipspacientes["Spanish"]["apellido"] = "";
	$placeHolderspacientes["Spanish"]["apellido"] = "";
	$fieldLabelspacientes["Spanish"]["fecha_nacimiento"] = "Fecha Nacimiento";
	$fieldToolTipspacientes["Spanish"]["fecha_nacimiento"] = "";
	$placeHolderspacientes["Spanish"]["fecha_nacimiento"] = "";
	$fieldLabelspacientes["Spanish"]["telefono"] = "Telefono";
	$fieldToolTipspacientes["Spanish"]["telefono"] = "";
	$placeHolderspacientes["Spanish"]["telefono"] = "";
	$fieldLabelspacientes["Spanish"]["email"] = "Email";
	$fieldToolTipspacientes["Spanish"]["email"] = "";
	$placeHolderspacientes["Spanish"]["email"] = "";
	$fieldLabelspacientes["Spanish"]["direccion"] = "Direccion";
	$fieldToolTipspacientes["Spanish"]["direccion"] = "";
	$placeHolderspacientes["Spanish"]["direccion"] = "";
	$fieldLabelspacientes["Spanish"]["activo"] = "Activo";
	$fieldToolTipspacientes["Spanish"]["activo"] = "";
	$placeHolderspacientes["Spanish"]["activo"] = "";
	if (count($fieldToolTipspacientes["Spanish"]))
		$tdatapacientes[".isUseToolTips"] = true;
}


	$tdatapacientes[".NCSearch"] = true;



$tdatapacientes[".shortTableName"] = "pacientes";
$tdatapacientes[".nSecOptions"] = 0;

$tdatapacientes[".mainTableOwnerID"] = "";
$tdatapacientes[".entityType"] = 0;

$tdatapacientes[".strOriginalTableName"] = "pacientes";

	



$tdatapacientes[".showAddInPopup"] = false;

$tdatapacientes[".showEditInPopup"] = false;

$tdatapacientes[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapacientes[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapacientes[".listAjax"] = false;
//	temporary
$tdatapacientes[".listAjax"] = false;

	$tdatapacientes[".audit"] = false;

	$tdatapacientes[".locking"] = false;


$pages = $tdatapacientes[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapacientes[".edit"] = true;
	$tdatapacientes[".afterEditAction"] = 1;
	$tdatapacientes[".closePopupAfterEdit"] = 1;
	$tdatapacientes[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapacientes[".add"] = true;
$tdatapacientes[".afterAddAction"] = 1;
$tdatapacientes[".closePopupAfterAdd"] = 1;
$tdatapacientes[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapacientes[".list"] = true;
}



$tdatapacientes[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapacientes[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapacientes[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapacientes[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapacientes[".printFriendly"] = true;
}



$tdatapacientes[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapacientes[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapacientes[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapacientes[".isUseAjaxSuggest"] = true;

$tdatapacientes[".rowHighlite"] = true;




$tdatapacientes[".flexibleSearch"] = true;


$tdatapacientes[".ajaxCodeSnippetAdded"] = false;

$tdatapacientes[".buttonsAdded"] = false;

$tdatapacientes[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapacientes[".isUseTimeForSearch"] = false;


$tdatapacientes[".badgeColor"] = "DAA520";


$tdatapacientes[".allSearchFields"] = array();
$tdatapacientes[".filterFields"] = array();
$tdatapacientes[".requiredSearchFields"] = array();

$tdatapacientes[".googleLikeFields"] = array();
$tdatapacientes[".googleLikeFields"][] = "id_paciente";
$tdatapacientes[".googleLikeFields"][] = "nombre";
$tdatapacientes[".googleLikeFields"][] = "apellido";
$tdatapacientes[".googleLikeFields"][] = "fecha_nacimiento";
$tdatapacientes[".googleLikeFields"][] = "telefono";
$tdatapacientes[".googleLikeFields"][] = "email";
$tdatapacientes[".googleLikeFields"][] = "direccion";
$tdatapacientes[".googleLikeFields"][] = "activo";



$tdatapacientes[".tableType"] = "list";

$tdatapacientes[".printerPageOrientation"] = 0;
$tdatapacientes[".nPrinterPageScale"] = 100;

$tdatapacientes[".nPrinterSplitRecords"] = 40;

$tdatapacientes[".nPrinterPDFSplitRecords"] = 40;


$tdatapacientes[".geocodingEnabled"] = false;










$tdatapacientes[".pageSize"] = 20;

$tdatapacientes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapacientes[".strOrderBy"] = $tstrOrderBy;

$tdatapacientes[".orderindexes"] = array();

$tdatapacientes[".sqlHead"] = "SELECT id_paciente,  	nombre,  	apellido,  	fecha_nacimiento,  	telefono,  	email,  	direccion,  	activo";
$tdatapacientes[".sqlFrom"] = "FROM pacientes";
$tdatapacientes[".sqlWhereExpr"] = "";
$tdatapacientes[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapacientes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapacientes[".arrGroupsPerPage"] = $arrGPP;

$tdatapacientes[".highlightSearchResults"] = true;

$tableKeyspacientes = array();
$tableKeyspacientes[] = "id_paciente";
$tdatapacientes[".Keys"] = $tableKeyspacientes;


$tdatapacientes[".hideMobileList"] = array();




//	id_paciente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_paciente";
	$fdata["GoodName"] = "id_paciente";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","id_paciente");
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


	$tdatapacientes["id_paciente"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "id_paciente";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","nombre");
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


	$tdatapacientes["nombre"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "nombre";
//	apellido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "apellido";
	$fdata["GoodName"] = "apellido";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","apellido");
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


	$tdatapacientes["apellido"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "apellido";
//	fecha_nacimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fecha_nacimiento";
	$fdata["GoodName"] = "fecha_nacimiento";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","fecha_nacimiento");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "fecha_nacimiento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_nacimiento";

	
	
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


	$tdatapacientes["fecha_nacimiento"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "fecha_nacimiento";
//	telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "telefono";
	$fdata["GoodName"] = "telefono";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","telefono");
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


	$tdatapacientes["telefono"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "telefono";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","email");
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


	$tdatapacientes["email"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "email";
//	direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "direccion";
	$fdata["GoodName"] = "direccion";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","direccion");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "direccion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "direccion";

	
	
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


	$tdatapacientes["direccion"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "direccion";
//	activo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "activo";
	$fdata["GoodName"] = "activo";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","activo");
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


	$tdatapacientes["activo"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "activo";


$tables_data["pacientes"]=&$tdatapacientes;
$field_labels["pacientes"] = &$fieldLabelspacientes;
$fieldToolTips["pacientes"] = &$fieldToolTipspacientes;
$placeHolders["pacientes"] = &$placeHolderspacientes;
$page_titles["pacientes"] = &$pageTitlespacientes;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pacientes"] = array();
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


		
	$detailsTablesData["pacientes"][$dIndex] = $detailsParam;

	
		$detailsTablesData["pacientes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pacientes"][$dIndex]["masterKeys"][]="id_paciente";

				$detailsTablesData["pacientes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pacientes"][$dIndex]["detailKeys"][]="id_paciente";

// tables which are master tables for current table (detail)
$masterTablesData["pacientes"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_pacientes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_paciente,  	nombre,  	apellido,  	fecha_nacimiento,  	telefono,  	email,  	direccion,  	activo";
$proto0["m_strFrom"] = "FROM pacientes";
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
	"m_strName" => "id_paciente",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto6["m_sql"] = "id_paciente";
$proto6["m_srcTableName"] = "pacientes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto8["m_sql"] = "nombre";
$proto8["m_srcTableName"] = "pacientes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "apellido",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto10["m_sql"] = "apellido";
$proto10["m_srcTableName"] = "pacientes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_nacimiento",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto12["m_sql"] = "fecha_nacimiento";
$proto12["m_srcTableName"] = "pacientes";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "telefono",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto14["m_sql"] = "telefono";
$proto14["m_srcTableName"] = "pacientes";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto16["m_sql"] = "email";
$proto16["m_srcTableName"] = "pacientes";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "direccion",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto18["m_sql"] = "direccion";
$proto18["m_srcTableName"] = "pacientes";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "activo",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto20["m_sql"] = "activo";
$proto20["m_srcTableName"] = "pacientes";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "pacientes";
$proto23["m_srcTableName"] = "pacientes";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id_paciente";
$proto23["m_columns"][] = "nombre";
$proto23["m_columns"][] = "apellido";
$proto23["m_columns"][] = "fecha_nacimiento";
$proto23["m_columns"][] = "telefono";
$proto23["m_columns"][] = "email";
$proto23["m_columns"][] = "direccion";
$proto23["m_columns"][] = "activo";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "pacientes";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "pacientes";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pacientes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pacientes = createSqlQuery_pacientes();


	
		;

								

$tdatapacientes[".sqlquery"] = $queryData_pacientes;

$tableEvents["pacientes"] = new eventsBase;
$tdatapacientes[".hasEvents"] = false;

?>