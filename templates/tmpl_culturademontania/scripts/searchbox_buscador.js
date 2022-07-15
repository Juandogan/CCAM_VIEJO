google.load('search', '1', {language: 'es', style: google.loader.themes.V2_DEFAULT});
google.setOnLoadCallback(function() {
  var customSearchOptions = {};
  var orderByOptions = {};
  orderByOptions['keys'] = [{label: 'Relevance', key: ''} , {label: 'Date', key: 'date'}];
  customSearchOptions['enableOrderBy'] = true;
  customSearchOptions['orderByOptions'] = orderByOptions;
  var imageSearchOptions = {};
  imageSearchOptions['layout'] = 'google.search.ImageSearch.LAYOUT_POPUP';
  customSearchOptions['enableImageSearch'] = true;
  var customSearchControl =   new google.search.CustomSearchControl('002383256940623070149:znwpn2j2thu', customSearchOptions);
  customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
  var options = new google.search.DrawOptions();
  options.enableSearchboxOnly('http://www.culturademontania.org.ar/buscar1.php', 'q', 'true');
  options.setAutoComplete(true);
  customSearchControl.draw('cse-search-form', options);  
}, true);