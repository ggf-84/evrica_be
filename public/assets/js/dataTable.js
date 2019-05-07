setTimeout(function () { dataTable() }, 100);

function dataTable() {
    jsArr.forEach(function(el) {
        var searchByCol = [];
        el['perPage'] = el['perPage'] <= 0 ? 15 : el['perPage'];
        el['searchByCol'] = el['searchByCol'].length > 0 ? el['searchByCol'] : [];

        el['searchByCol'].forEach(function(col) {
            searchByCol[col] = "";
        });

        new Vue({
            el: '#' + el['id'],
            hdrs: [],
            data () {
                return {
                    pagination: {
                        page: 1,
                        sortBy: ''
                    },
                    searchByColumn: [],
                    notSearchable: el['notSearchable'],
                    relationSearchable: [],
                    predefinedFilters: [],
                    activePredefinedFilters: '',
                    selected: [],
                    headers: [],
                    hdrs: [],
                    items: [],
                    totalItems: el['paginateData'].itemsCount !== undefined ? el['paginateData'].itemsCount : null,
                    path: '/backend/api/',
                    dataSource: '',
                    sortSign: '',
                    column: '',
                    filterSelected: [],
                    search: '',
                    dateFrom: '',//'2016-08-09 10:19:25',
                    dateTo: '',//'2017-05-09 00:49:49',
                    groupActions: {},
                    filterStr: '&'
                }
            },
            filters: {
                Truncate(value, i) {
                    var val = value;
                    if(i !== undefined) i = 15;
                    if(value !== undefined && i > 0 ){
                        if(value.length > i) val = value.substring(0,i) + '...';
                    }

                    return val;
                },
                GetI18n(propItem, column, hdrClass) {
                    if (column !== undefined && column.length > 0){
                        var colSplit = column.split(".");
                        var result = '';
                        for (var i = 0; i < colSplit.length; i++) {
                            if(propItem !== undefined && Array.isArray(propItem)){
                                result = '';
                                propItem.forEach(function(obj) {
                                    if(obj[colSplit[i]] !== undefined && obj[colSplit[i]] !== null)
                                        result += "<li>" + obj[colSplit[i]] + "</li>";
                                });
                                return result;
                            }
                            else if(
                                propItem !== undefined && propItem !== null &&
                                propItem[colSplit[i]] !== undefined && propItem[colSplit[i]] !== null
                            ){
                                propItem = propItem[colSplit[i]];
                            }
                            else if(
                                propItem !== undefined && propItem !== null &&
                                propItem['i18n'] !== undefined && Array.isArray(propItem['i18n'])
                            ){
                                result = '';
                                propItem['i18n'].forEach(function(obj) {
                                    if(obj[colSplit[i]] !== undefined && obj[colSplit[i]] !== null)
                                        result += "<li>" + obj[colSplit[i]] + "</li>";
                                });
                                return result;
                            }
                            else if(
                                propItem !== undefined && propItem !== null &&
                                propItem['i18n'] !== undefined && propItem['i18n'] !== null &&
                                propItem['i18n'][colSplit[i]] !== undefined && propItem['i18n'][colSplit[i]] !== null
                            ){
                                propItem = propItem['i18n'][colSplit[i]];
                            }else{
                                propItem = null
                            }
                        }
                        if(propItem === null) return '';
                    }

                    if (hdrClass !== undefined){
                        switch (hdrClass) {
                            case "money_short":
                                var text = parseInt(propItem);
                                var mults = [];
                                mults = {0:"", 1:"K", 2:"M", 3:"B", 4:"T"};
                                var m = 0;
                                while (text > 100) {
                                    text = text / 1000;
                                    m++;
                                }
                                text = parseInt(text * 10) / 10.0;
                                text += mults[m];
                                propItem = text;
                                break;
                            case "date":
                                propItem = propItem.substring(0, 10);
                                break;
                        }
                    }

                    return propItem;
                }
            },
            computed: {
                pages () {
                    return el['perPage'] ? Math.ceil(this.totalItems / el['perPage']) : 0
                }
            },
            methods: {
                getDataTable() {
                    this.searchByColumn     = searchByCol;
                    this.headers            = this.hdrs = Object.values(el['headers']);
                    this.groupActions       = el['groupActions'];
                    this.items              = Object.values(el['dataList'].data);
                    this.dataSource         = this.path + el['url'] + '&_limit=' + el['perPage'];
                    this.relationSearchable = el['relationSearchable'];
                    this.predefinedFilters  = el['predefinedFilters'];
                    this.selected = [];

                    // console.log('actions:', this.groupActions);
                    // console.log('headers:', this.headers);
                     console.log('headers:', this.totalItems);
                    // console.log('fitersPr:', this.predefinedFilters);
                    // console.log('items:', this.items);
                },
                toggleAll() {
                    if (this.selected.length) this.selected = [];
                    else this.selected = this.items.slice();
                },
                toggleItem(item) {
                    this.selected.includes(item) ? remove(this.selected, item) : this.selected.push(item);
                },
                changeSort(column) {
                    var page    = this.pagination.page;
                    this.column = column;

                    if (this.pagination.sortBy === column) {
                        this.sortSign = sortSign(this.sortSign);
                    } else {
                        this.pagination.sortBy = column;
                        this.sortSign = sortSign(this.sortSign);
                    }

                    Vue.http.headers.common['Authorization'] = 'Bearer ' + jsToken;
                    this.$http.get(this.dataSource  + this.filterStr  + '_sort=' + this.sortSign + column + '&_page=' + page).then(function (response) {
                        this.items = Object.values(response.data.data);
                        this.pagination.page = page;
                    });
                },
                // loadSelect(prop) {
                //     Vue.http.headers.common['Authorization'] = 'Bearer ' + jsToken;
                //     this.$http.get(this.path  + prop.relation_path.slice(1)).then(function (response) {
                //         var items  = Object.values(response.data.data);
                //         this.relationSearchable[prop.column] = filterItems(items, response.data.data);
                //     });
                //     console.log('rs:',this.relationSearchable);
                // },
                filterBy(column, pred_filter, isSelected) {

                    if(column === 'predefined-filter'){
                        this.search = '';
                        var filter = this.filterStr;
                        this.filterSelected[pred_filter] = !this.filterSelected[pred_filter];

                        if(isSelected === undefined || isSelected !== true){
                            filter += filter.slice(-1) !== '&' ? '&' + pred_filter + '&' : pred_filter + '&';
                            this.activePredefinedFilters +=
                                this.activePredefinedFilters.slice(-1) !== '&' ? '&' + pred_filter + '&' : pred_filter + '&';
                        }else{
                            if(filter.indexOf(pred_filter) !== -1)
                                filter = filter.replace("&"+pred_filter, '');
                            filter += filter.slice(-1) !== '&' ? '&' : '';

                            if(this.activePredefinedFilters.indexOf(pred_filter) !== -1)
                                this.activePredefinedFilters = this.activePredefinedFilters.replace("&"+pred_filter, '');

                            this.activePredefinedFilters +=
                                this.activePredefinedFilters.slice(-1) !== '&' ? '&' : '';
                        }
                    }
                    else if(column === 'clear-filter'){
                        var filterArr = this.searchByColumn;
                        var filter = '&';
                        Object.keys(filterArr).forEach(function (field) {
                            searchByCol[field] = "";
                        });
                        this.searchByColumn = searchByCol;
                        this.search = this.activePredefinedFilters = this.dateFrom = this.dateTo = "";
                        this.filterSelected = [];
                        this.selected = [];

                    }else if(column === 'all-fields'){
                        var filter     = '&_filters[]=',
                            filterArr  = searchByCol,
                            notSearche = this.notSearchable,
                            search     = this.search;

                        if(search.toString().length > 0){

                            Object.keys(filterArr).forEach(function (field) {
                                var col = field;
                                if(field.indexOf('.i18n') !== -1 )
                                    col = field.replace('i18n.', '');

                                if(notSearche.indexOf(col) === -1 )
                                    filter +=  col + '-lk=*'+ search +'*-!or!-';

                            });

                            if(filter !== '&_filters[]=' && filter.slice(-6) === '-!or!-')
                                filter = filter.slice(0, -6) + '&';
                            else
                                filter += '&';

                            filter += this.activePredefinedFilters;
                        }else{
                            filter = '&';
                            Object.keys(filterArr).forEach(function (field) {
                                if(filterArr[field].length > 0) {
                                    var col = field;
                                    if(field.indexOf('.i18n') !== -1 ) col = field.replace('i18n.', '');
                                    filter += '_filters[]=' + col + '-lk=*'+ filterArr[field] +'*&';
                                }
                            });
                            filter += this.activePredefinedFilters;
                        }

                        Object.keys(filterArr).forEach(function (field) {
                            if(filterArr[field].length > 0) {
                                var col = field;
                                if(field.indexOf('.i18n') !== -1 ) col = field.replace('i18n.', '');
                                filter += '_filters[]=' + col + '-lk=*'+ filterArr[field] +'*&';
                            }
                        });
                        filter += this.activePredefinedFilters;

                    } else {
                        var filter = '&';
                        var filterArr = this.searchByColumn;
                        this.search = '';
                        Object.keys(filterArr).forEach(function (field) {
                            if(filterArr[field].length > 0) {
                                var col = field;
                                if(field.indexOf('.i18n') !== -1 ) col = field.replace('i18n.', '');
                                filter += '_filters[]=' + col + '-lk=*'+ filterArr[field] +'*&';
                            }
                        });
                        filter += this.activePredefinedFilters;
                    }

                    if(this.dateFrom.length > 0 && this.dateTo.length > 0){
                        var isDateFrom = isDate(this.dateFrom);
                        var isDateTo = isDate(this.dateTo);
                        if(isDateFrom === true && isDateTo === true)
                            filter += '_filters[]=created_at-between=' + this.dateFrom + ',' + this.dateTo + '&'
                    }
                    else if(this.dateFrom.length > 0 && this.dateTo.length === 0){
                        var isDateFrom = isDate(this.dateFrom);
                        if(isDateFrom === true)
                            filter += '_filters[]=created_at-ge=' + this.dateFrom + '&'
                    }
                    else if(this.dateFrom.length === 0 && this.dateTo.length > 0){
                        var isDateTo = isDate(this.dateTo);
                        if(isDateTo === true)
                            filter += '_filters[]=created_at-le=' + this.dateTo + '&'
                    }

                    filter = filter.replace('&&', '&');

                    this.filterStr = filter;
                    console.log('fltr:',column, this.filterStr);

                    Vue.http.headers.common['Authorization'] = 'Bearer ' + jsToken;
                    this.$http.get(this.dataSource  + this.filterStr + '_page=' + 1).then(function (response) {
                        this.items = Object.values(response.data.data);
                        this.totalItems = response.data.paginate.itemsCount;
                        this.pagination.page = 1;
                        this.selected = [];
                    });
                },
                towindow(url, prItem) {
                    if(prItem !== undefined){
                        var id    = prItem['id'];
                        var match = url.match(/\$s*([^&]+)/);
                        if(match[0] !== null ) url = url.replace( match[0], id);
                    }
                    gotowindow(url);
                },
                submit(button, item) {
                    var url = getLink(button),
                        method = getMethod(button),
                        success = getSuccess(button),
                        windowLink = setWindowLink(success);

                    if(url.length === 0 || method.length === 0 ) return;

                    url = url.replace( "$id", item.id);

                    Vue.http.headers.common['Authorization'] = 'Bearer ' + jsToken;
                    setVueRequest(this, this.path + url, method, windowLink);
                },
                submitSelected(button) {
                    var url = getLink(button),
                        method = getMethod(button),
                        success = getSuccess(button),
                        windowLink = setWindowLink(success);

                    if(url.length === 0 || method.length === 0 ) return;

                    if(this.selected.length === 0) {
                        alert('Not selected!');
                        return;
                    }

                    var id = '';
                    this.selected.forEach(function(col ) {
                        id += col['id'] +",";
                    });

                    if(id.length > 0) id = id.slice(0, -1);

                    var m = url.match(/\$s*([^&]+)/);
                    if(m[0] !== null ) url = url.replace( m[0], id);

                    Vue.http.headers.common['Authorization'] = 'Bearer ' + jsToken;
                    setVueRequest(this, this.path + url, method, windowLink);
                },
                paginate () {
                    var sortSign = this.sortSign;
                    var column = this.column;
                    var sort = (column.length > 0) ? '&_sort=' + sortSign + column : '';
                    this.selected = [];

                    Vue.http.headers.common['Authorization'] = 'Bearer ' + jsToken;
                    this.$http.get(this.dataSource + this.filterStr + '_page=' + this.pagination.page + sort).then(function (response) {
                        this.items = Object.values(response.data.data);
                    });
                }
            },
            created: function () {
                this.getDataTable();
            }
        });
    });
}

function sortSign(sign) {
    if(sign.length < 1) sign = '-';
    else sign = '';

    return sign
}

function remove(array, element) {
    const index = array.indexOf(element);

    if (index !== -1) {
        array.splice(index, 1);
    }
}

function isDate(date) {
    return ((new Date(date)).toString() !== "Invalid Date") ? true : false;
}

function isObject (value) {
    return value && typeof value === 'object' && value.constructor === Object;
}

function getLink(btn) {
    if(btn !== undefined && btn.url !== undefined && btn.url !== null && btn.url.length > 0) {
        return btn.url;
    }
    else{
        alert('Didn`t find link for this action!');
        return '';
    }
}

function getMethod(btn) {
    if(btn !== undefined && btn.method !== undefined && btn.method !== null && btn.method.length > 0){
        return btn.method.toLowerCase();
    }
    else{
        alert('Didn`t find method for this action!');
        return ';'
    }
}

function getSuccess(btn) {
    if(btn.onsuccess !== undefined && btn.onsuccess !== null )
        return btn.onsuccess;
    // else
    //     alert('Didn`t find method for this action!');
}

function setVueRequest(thisVue, url, mtd, windowLink) {
    thisVue.$http[mtd](url).then(result => {
        setResult(result.data.data);
        if(result.status === 200 && windowLink.length > 0) thisVue.towindow(windowLink);
    }, result => {
        setResult(result.body);
    });
    thisVue.selected = [];
}

function setResult(result) {
    var txt = '';
    if(Array.isArray(result) || isObject(result)){
        for (var i = 0; i < result.length; i++) {
            txt += result[i].toString() + "\n";
        }
    }
    result = result.message !== undefined ? result.message : result.toString();
    txt.length > 0 ? alert(txt) : alert(result);
}

function setWindowLink(onsuccess) {
    if(
        onsuccess.type !== undefined && onsuccess.type === 'nav' &&
        onsuccess.linktype !== undefined && onsuccess.linktype === 'window' &&
        onsuccess.link !== undefined && onsuccess.link.length > 0
    ){
        return onsuccess.link;
    }
    return '';
}
