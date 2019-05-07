//use only many to many relations to show tables;
function readMetadata() {
  if (typeof  metadata !== "undefined"){
    console.log('meta: ', metadata)
    for (var key in metadata.relations) {
        if (metadata.relations.hasOwnProperty(key)) {
          console.log('propMult');
            if (metadata.relations[key].select == 'multiple' && metadata.relations[key].type == 'table') {
                showDatatable(metadata.relations[key], key);
            }
        }
    }
  }
}

function getManyToManyData() {
    var data = {};
    console.log('many!!!!');
    if (typeof  metadata !== "undefined"){
    for (var key in metadata.relations) {
        if (metadata.relations.hasOwnProperty(key)) {
            if (metadata.relations[key].select == 'multiple' && metadata.relations[key].type == 'table') {
                var ob = {};
                console.log(key);
                ob[key] = window[key + '_vue'].items;
                $.extend(data, ob);
            }
        }
    }
    return data;
  }
}

/**
 *
 * @param relationMeta
 * @param relation
 */
function showDatatable(relationMeta, relation) {
    console.log(relationMeta);
    var relationData = window['tableData_' + relation],
        table = $('#table-' + relation),
        div = 'div-' + relation,
        formatedTableData = relationData,
        columns = getTableColumns(relationMeta);

    $('#' + div).append(addRelationDataButtonTemplate());
    $('#' + div).append(addRelationFormTemplate());
    $('#' + div).append(tableTemplate());

    window[relation + '_vue'] = new Vue({
        el: '#'+div,
        data: {
            addFormShow: false,
            headers: columns,
            items: formatedTableData,
            relationOptions: formatedTableData,
            selectedRelation: 'Select smth:',
            newItem: {},
            choice: {'i18n': []},
            path: "/backend/api",
        },
        methods: {
            toggleAddForm: function () {
                this.addFormShow = !this.addFormShow;
                console.log(this.headers);
            },
            addRelationToTable: function (event) {
                this.newItem['id'] = this.choice.id;
                for (var col in this.headers) {
                    this.newItem[this.headers[col].key] = $('#' + this.headers[col].text).val();
                }
                this.items.push(this.newItem);
                // event.preventDefault();
            },
            removeItem: function (item) {
                console.log('Remove item:', item.id);
                var index = this.items.indexOf(item);
                this.items.splice(index, 1);
            },
            loadOptions: function () {
              console.log(getRelationPath(relationMeta));
                //get random record and save id for tests
                this.$http.get(getRelationPath(relationMeta)).then(function (response) {
                    this.relationOptions = response.data.data;
                    console.log(this.selectedRelation);
                })
            },
            focusEditDialog: function () {
                console.log("trying to focus");
                this.$refs.test.focus();
            },
            getSelected: function () {
                var values = this.relationOptions.map(function (o) {
                    return o.id
                });
                var index = values.indexOf(this.selectedRelation);
                this.choice = this.relationOptions[index];
                console.log(this.choice);
            }
        },
        mounted() {
            EventBus.$on('user-was-logged', this.loadOptions);
        },
        created: function () {
          this.loadOptions();
        }
    });

    getManyToManyData();
}

function getRelationPath(meta) {
    loc = getUrl() + '/backend/api' + meta.path;
    console.log(loc);
    return loc;
}

function addRelationDataButtonTemplate() {
    return "<div><button v-on:click='toggleAddForm()' type=\"button\" class=\"btn btn-warning btn-sm\">\n" +
        "          <span class=\"glyphicon glyphicon-plus\"></span> Add\n" +
        "        </button></div>";
}

function addRelationFormTemplate() {
    return "<div v-show='addFormShow'>" +
        "<div class=\"form-group\">\n" +
        "  <label>Select item:</label>\n" +
        "<select  v-on:change=\"getSelected\" class='form-control' v-model=\"selectedRelation\">\n" +
        "  <option v-for=\"option in relationOptions\" v-bind:value=\"option.id\">\n" +
        "    {{ option.id + ' ' + option.i18n.title }}\n" +
        "  </option>\n" +
        "</select>" +
        "</div>" +
        "<div class=\"form-group\" v-for='item in headers'>\n" +
        "  <label>{{item.text}}:</label>\n" +
        "  <input :id='item.text' class='form-control' type=\"text\" :disabled='!item.editable' " +
        ":value=\"!item.translatable ? choice[item.key] : (choice.i18n.length == 0) ? '' : choice.i18n[item.key]\">\n" +
        "</div>" +
        "<button id='addRelationToTable' v-on:click=\"addRelationToTable\" type=\"button\" class=\"btn btn-success btn-sm\">\n" +
        "          <span class=\"glyphicon glyphicon-floppy-disk\"></span> Save to order\n" +
        "        </button>" +
        "<p></p>" +
        "</div>";
}


function tableTemplate() {
    var template = "<template>\n" +
        "  <v-data-table\n" +
        "      v-bind:headers=\"headers\"\n" +
        "      :items=\"items\"\n" +
        "      hide-actions\n" +
        "      class=\"elevation-1\"\n" +
        "    >\n" +
        "    <template slot=\"items\" slot-scope=\"props\">\n" +
        "      <td class=\"text-xs-right\" v-for=\"value in headers\">" +
        "<v-edit-dialog v-if='value.editable' \n" +
        "            @open=\"props.item._iron = props.item[value.key]\"\n" +
        "            @cancel=\"props.item[value.key] = props.item._iron || props.item[value.key]\"\n" +
        "          >\n" +
        "            <div class=\"text-xs-right\">{{ props.item[value.key] }}</div>\n" +
        "            <v-text-field\n" +
        "              slot=\"input\"\n" +
        "              v-model=\"props.item[value.key]\"\n" +
        "              single-line\n" +
        "              counter\n" +
        "            ></v-text-field>\n" +
        "          </v-edit-dialog>" +
        "<span v-else>{{ props.item[value.key] ?  props.item[value.key] : props.item.i18n[value.key] ? props.item.i18n[value.key]: '-'}}</span>\n" +
        "</td>\n" +
        "      <td class=\"text-xs-right\">" +
        "<button id='removeItem' v-on:click=\"removeItem(props.item)\" type=\"button\" class=\"btn btn-danger btn-sm\">\n" +
        "<span class=\"glyphicon glyphicon-remove\"></span></button></td>\n" +
        "    </template>\n" +
        "  </v-data-table>\n" +
        "</template>";

    return template;
}

/**
 * Get table columns
 * @param relationMeta
 * @returns {Array}
 */
function getTableColumns(relationMeta) {
    var columns = [],
        editable = true;

    for (var key in relationMeta.fields) {
        if (relationMeta.fields.hasOwnProperty(key)) {
            editable = relationMeta.fields[key].type.indexOf('label') > -1 ? false : true;
            translatable = relationMeta.fields[key].type.indexOf('label_i18n') > -1 ? true : false;
            columns.push({
                'text': relationMeta.fields[key].label,
                'key': key,
                'value': translatable ? 'i18n.' + key : key,
                'editable': editable,
                'translatable': translatable
            });
        }
    }
    return columns;
}

function initLanguageSelector() {
    var $langSelect = $('#language_selector');
    $langSelect.append(languageSelectTemplate());

    window['langSelector'] = new Vue({
        el: '#language_selector',
        data: {
            options: [
                {'title': 'EN', 'id': 1, 'header': 'en-En;en;q=0.9;'},
                {'title': 'RU', 'id': 2, 'header': 'ru-Ru;ru;q=0.9;'},
            ],
            selectedLanguage: {'title': 'EN', 'id': 1, 'header': 'en-En;en;q=0.9;'},
            path: "/backend/api",
        },
        methods: {
            applyLanguage: function () {
                console.log(this.selectedLanguage.header);
                $('#wLoad').click();
            },
            getUserLanguage: function () {
                //get random record and save id for tests
                this.$http.get(this.path + '/settings').then(function (response) {
                    var companyLanguage = this.options.filter(function (item) {
                        return item.id === parseInt(response.data.data.language);
                    });
                    if (companyLanguage.length) {
                        this.selectedLanguage = companyLanguage[0];
                    }
                    // console.log('Company language:', this.selectedLanguage.title);
                });
            }
        },
        mounted() {
            EventBus.$on('user-was-logged', this.getUserLanguage);
        },
        created: function () {
        }
    });
}

setTimeout(function () {
    initLanguageSelector();
}, 100);

function languageSelectTemplate() {
    return "                <label for=\"sel1\">Select Language:</label>\n" +
        "                <select class=\"form-control\" v-model='selectedLanguage' v-on:change='applyLanguage'>\n" +
        "                    <option v-for=\"option in options\" v-bind:value=\"option\">\n" +
        "    {{ option.title}}\n" +
        "                    </option>\n" +
        "                </select>";
};
