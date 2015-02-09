// Spark Backbone JS application

(function($){

// Spark Application
  var AppView = Backbone.View.extend({
  		el: '#ag_application',

  		// Default Variables for Application
  		defaults: function() {
  			return {

  			}
  		},

  		//Delegated Events for user actions
  		events: {
      		"click .mobile-btn": "doSidr",
  		},


  		//Initialization function
  		initialize: function(){
        this.doSidr();
  		},

  		doSidr: function(){
        $('.mobile-btn').sidr({
          name: 'sidr-main',
          source: 'header nav',
          side: 'right',
          body: 'html'
        });
  		}
  });


  $(document).ready(function(){
  		var App = new AppView;
  })
  

})(jQuery);