(function ($, Drupal, window, document, undefined) {
"use strict";

$(document).ready(function() {

  $.ajax({
	  'url':'/golden_retriever?destination='+location.pathname,
	  'success':function(data)
	  {
		  $("div.emm-golden-retriever-cart").html(data);
	  }
  });

});

})(jq191, Drupal, this, this.document);