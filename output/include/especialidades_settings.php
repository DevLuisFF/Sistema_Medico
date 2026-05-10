<?php




$tdataespecialidades = array();
$tdataespecialidades[".searchableFields"] = array();
	$tdataespecialidades[".truncateText"] = true;
	$tdataespecialidades[".NumberOfChars"] = 80;
	$tdataespecialidades[".ShortName"] = "especialidades";
	$tdataespecialidades[".OwnerID"] = "";
	$tdataespecialidades[".OriginalTable"] = "especialidades";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdataespecialidades[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataespecialidades[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsespecialidades = array();
$fieldToolTipsespecialidades = array();
$pageTitlesespecialidades = array();
$placeHoldersespecialidades = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsespecialidades["Spanish"] = array();
	$fieldToolTipsespecialidades["Spanish"] = array();
	$placeHoldersespecialidades["Spanish"] = array();
	$pageTitlesespecialidades["Spanish"] = array();
	$fieldLabelsespecialidades["Spanish"]["id_especialidad"] = "Id Especialidad";
	$fieldToolTipsespecialidades["Spanish"]["id_especialidad"] = "";
	$placeHoldersespecialidades["Spanish"]["id_especialidad"] = "";
	$fieldLabelsespecialidades["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsespecialidades["Spanish"]["nombre"] = "";
	$placeHoldersespecialidades["Spanish"]["nombre"] = "";
	if (count($fieldToolTipsespecialidades["Spanish"]))
		$tdataespecialidades[".isUseToolTips"] = true;
}


	$tdataespecialidades[".NCSearch"] = true;



$tdataespecialidades[".shortTableName"] = "especialidades";
$tdataespecialidades[".nSecOptions"] = 0;

$tdataespecialidades[".mainTableOwnerID"] = "";
$tdataespecialidades[".entityType"] = 0;

$tdataespecialidades[".strOriginalTableName"] = "especialidades";

	



$tdataespecialidades[".showAddInPopup"] = false;

$tdataespecialidades[".showEditInPopup"] = false;

$tdataespecialidades[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataespecialidades[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataespecialidades[".listAjax"] = false;
//	temporary
$tdataespecialidades[".listAjax"] = false;

	$tdataespecialidades[".audit"] = false;

	$tdataespecialidades[".locking"] = false;


$pages = $tdataespecialidades[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdataespecialidades[".edit"] = true;
	$tdataespecialidades[".afterEditAction"] = 1;
	$tdataespecialidades[".closePopupAfterEdit"] = 1;
	$tdataespecialidades[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataespecialidades[".add"] = true;
$tdataespecialidades[".afterAddAction"] = 1;
$tdataespecialidades[".closePopupAfterAdd"] = 1;
$tdataespecialidades[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataespecialidades[".list"] = true;
}



$tdataespecialidades[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataespecialidades[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataespecialidades[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataespecialidades[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataespecialidades[".printFriendly"] = true;
}



$tdataespecialidades[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataespecialidades[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataespecialidades[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataespecialidades[".isUseAjaxSuggest"] = true;

$tdataespecialidades[".rowHighlite"] = true;




$tdataespecialidades[".flexibleSearch"] = true;


$tdataespecialidades[".ajaxCodeSnippetAdded"] = false;

$tdataespecialidades[".buttonsAdded"] = false;

$tdataespecialidades[".addPageEvents"] = false;

// use timepicker for search panel
$tdataespecialidades[".isUseTimeForSearch"] = false;


$tdataespecialidades[".badgeColor"] = "008B8B";


$tdataespecialidades[".allSearchFields"] = array();
$tdataespecialidades[".filterFields"] = array();
$tdataespecialidades[".requiredSearchFields"] = array();

$tdataespecialidades[".googleLikeFields"] = array();
$tdataespecialidades[".googleLikeFields"][] = "id_especialidad";
$tdataespecialidades[".googleLikeFields"][] = "nombre";



$tdataespecialidades[".tableType"] = "list";

$tdataespecialidades[".printerPageOrientation"] = 0;
$tdataespecialidades[".nPrinterPageScale"] = 100;

$tdataespecialidades[".nPrinterSplitRecords"] = 40;

$tdataespecialidades[".nPrinterPDFSplitRecords"] = 40;


$tdataespecialidades[".geocodingEnabled"] = false;










$tdataespecialidades[".pageSize"] = 20;

$tdataespecialidades[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataespecialidades[".strOrderBy"] = $tstrOrderBy;

$tdataespecialidades[".orderindexes"] = array();

$tdataespecialidades[".sqlHead"] = "SELECT id_especialidad,  	nombre";
$tdataespecialidades[".sqlFrom"] = "FROM especialidades";
$tdataespecialidades[".sqlWhereExpr"] = "";
$tdataespecialidades[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataespecialidades[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataespecialidades[".arrGroupsPerPage"] = $arrGPP;

$tdataespecialidades[".highlightSearchResults"] = true;

$tableKeysespecialidades = array();
$tableKeysespecialidades[] = "id_especialidad";
$tdataespecialidades[".Keys"] = $tableKeysespecialidades;


$tdataespecialidades[".hideMobileList"] = array();




//	id_especialidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_especialidad";
	$fdata["GoodName"] = "id_especialidad";
	$fdata["ownerTable"] = "especialidades";
	$fdata["Label"] = GetFieldLabel("especialidades","id_especialidad");
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


	$tdataespecialidades["id_especialidad"] = $fdata;
		$tdataespecialidades[".searchableFields"][] = "id_especialidad";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "especialidades";
	$fdata["Label"] = GetFieldLabel("especialidades","nombre");
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


	$tdataespecialidades["nombre"] = $fdata;
		$tdataespecialidades[".searchableFields"][] = "nombre";


$tables_data["especialidades"]=&$tdataespecialidades;
$field_labels["especialidades"] = &$fieldLabelsespecialidades;
$fieldToolTips["especialidades"] = &$fieldToolTipsespecialidades;
$placeHolders["especialidades"] = &$placeHoldersespecialidades;
$page_titles["especialidades"] = &$pageTitlesespecialidades;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["especialidades"] = array();
//	medicos
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="medicos";
		$detailsParam["dOriginalTable"] = "medicos";


	
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "medicos";
	$detailsParam["dCaptionTable"] = GetTableCaption("medicos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["especialidades"][$dIndex] = $detailsParam;

	
		$detailsTablesData["especialidades"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["especialidades"][$dIndex]["masterKeys"][]="id_especialidad";

				$detailsTablesData["especialidades"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["especialidades"][$dIndex]["detailKeys"][]="id_especialidad";

// tables which are master tables for current table (detail)
$masterTablesData["especialidades"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_especialidades()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_especialidad,  	nombre";
$proto0["m_strFrom"] = "FROM especialidades";
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
	"m_strName" => "id_especialidad",
	"m_strTable" => "especialidades",
	"m_srcTableName" => "especialidades"
));

$proto6["m_sql"] = "id_especialidad";
$proto6["m_srcTableName"] = "especialidades";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "especialidades",
	"m_srcTableName" => "especialidades"
));

$proto8["m_sql"] = "nombre";
$proto8["m_srcTableName"] = "especialidades";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "especialidades";
$proto11["m_srcTableName"] = "especialidades";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_especialidad";
$proto11["m_columns"][] = "nombre";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "especialidades";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "especialidades";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="especialidades";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_especialidades = createSqlQuery_especialidades();


	
		;

		

$tdataespecialidades[".sqlquery"] = $queryData_especialidades;

$tableEvents["especialidades"] = new eventsBase;
$tdataespecialidades[".hasEvents"] = false;

?>