$(function() {
	var MyDateField = function(config) {
        jsGrid.Field.call(this, config);
    };
 
    MyDateField.prototype = new jsGrid.Field({
        sorter: function(date1, date2) {
            return new Date(date1) - new Date(date2);
        },
 
        itemTemplate: function(value) {
            return new Date(value).toDateString('d-m-y');
        },
 
        // insertTemplate: function(value) {
        //     return this._insertPicker = $("<input>").datepicker({ defaultDate: new Date() });
        // },
 
        editTemplate: function(value) {
            return this._editPicker = $("<input>").datepicker().datepicker("setDate", new Date(value));
        },
 
        insertValue: function() {
            return this._insertPicker.datepicker("getDate").toISOString();
        },
 
        editValue: function() {
            return this._editPicker.datepicker("getDate").toISOString();
        }
    });
 
    jsGrid.fields.myDateField = MyDateField;

	$.ajax({
		type : "GET",
		url : "getGridDataPegawai/"
	}).done(function(countries) {
		countries.unshift({ id: "0", name: ""});

		$("#pegawaiGrid").jsGrid({
			height: "300px",
	      	width: "100%",
		    filtering: true,
		    inserting: true,
		   	editing: true,
		    sorting: true,
		    paging: true,
		    autoload: true,
		    pageSize: 10,
		    pageButtonCount: 5,
		    deleteConfirm: "Anda yakin ingin menghapus pegawai ini?",
		    controller: {
	      	loadData: function(filter) {
	      		return $.ajax({
	      			type: "GET",
	      			url: "getGridDataPegawai/",
	      			data: filter
	      		});
	      	},
	      	insertItem: function(item) {
	      		return $.ajax({
	      			type: "POST",
	      			url: "insertGridDataPegawai/",
	      			data: item
	      		});
	      	},
	      	updateItem: function(item) {
	      		return $.ajax({
	      			type: "PUT",
		      		url: "/clients/",
		      		data: item
	      		});
	      	},
	      	deleteItem: function(item) {
	      		return $.ajax({
	      			type: "POST",
	      			url: "deleteGridDataPegawai/",
	      			data: item
	      		});
	      	}
	      },
	      fields: [
	      	{
	      		name: "namaPegawai",
	      		title: "Nama Pegawai",
	      		type: "text",
	      		width: 150
	      	},
	      	{
	      		name: "alamatPegawai",
	      		title: "Alamat Pegawai",
	      		type: "text",
	      		width: 100
	      	},
	      	{
	      		name: "tanggalLahir",
	      		title: "Tanggal Lahir",
	      		type: "myDateField",
	      		width: 100,
	      		align: "center"
	      	},
	      	{ type: "control" }
	      ]
		});
	});
});