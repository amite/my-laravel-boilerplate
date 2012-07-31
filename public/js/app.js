
var Client = Backbone.Model.extend({
	
	defaults : {
		name: "Client Name",
		notes: "Enter notes here"
	}

})

var Clients = Backbone.Collection.extend({
	model: Client,
	url: "/laravelbackbone/public/clients"
})

var clients = new Clients;
var info = clients.fetch();
console.log(info);

