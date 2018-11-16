var products = document.querySelectorAll(".product-item");

var clearProductsClass = function clearProductsClass() {return (
		products.forEach(function (product) {return product.classList.remove("active");}));};
var classForElement = function classForElement(element) {return element.classList.add("active");};
var onProductClickEvent = function onProductClickEvent(product) {
	clearProductsClass();
	classForElement(product);
};
var initProducts = function initProducts() {
	products.forEach(function (product) {return (
			product.addEventListener("click", function () {
				clearProductsClass();
				classForElement(product);
			}));});

};

initProducts();

/**
 * dialog box v0.1
 * Ashwin Saxena
 */
;( function( window ) {
	
	'use strict';

	var support = { animations : Modernizr.cssanimations },
		animEndEventNames = { 'WebkitAnimation' : 'webkitAnimationEnd', 'OAnimation' : 'oAnimationEnd', 'msAnimation' : 'MSAnimationEnd', 'animation' : 'animationend' },
		animEndEventName = animEndEventNames[ Modernizr.prefixed( 'animation' ) ],
		onEndAnimation = function( el, callback ) {
			var onEndCallbackFn = function( ev ) {
				if( support.animations ) {
					if( ev.target != this ) return;
					this.removeEventListener( animEndEventName, onEndCallbackFn );
				}
				if( callback && typeof callback === 'function' ) { callback.call(); }
			};
			if( support.animations ) {
				el.addEventListener( animEndEventName, onEndCallbackFn );
			}
			else {
				onEndCallbackFn();
			}
		};

	function extend( a, b ) {
		for( var key in b ) { 
			if( b.hasOwnProperty( key ) ) {
				a[key] = b[key];
			}
		}
		return a;
	}

	function DialogFx( el, options ) {
		this.el = el;
		this.options = extend( {}, this.options );
		extend( this.options, options );
		this.ctrlClose = this.el.querySelector( '[data-dialog-close]' );
		this.isOpen = false;
		this._initEvents();
	}

	DialogFx.prototype.options = {
		// callbacks
		onOpenDialog : function() { return false; },
		onCloseDialog : function() { return false; }
	}

	DialogFx.prototype._initEvents = function() {
		var self = this;

		// close action
		this.ctrlClose.addEventListener( 'click', this.toggle.bind(this) );

		// esc key closes dialog
		document.addEventListener( 'keydown', function( ev ) {
			var keyCode = ev.keyCode || ev.which;
			if( keyCode === 27 && self.isOpen ) {
				self.toggle();
			}
		} );

		this.el.querySelector( '.dialog__overlay' ).addEventListener( 'click', this.toggle.bind(this) );
	}

	DialogFx.prototype.toggle = function() {
		var self = this;
		if( this.isOpen ) {
			classie.remove( this.el, 'dialog--open' );
			classie.add( self.el, 'dialog--close' );
			
			onEndAnimation( this.el.querySelector( '.dialog__content' ), function() {
				classie.remove( self.el, 'dialog--close' );
			} );

			// callback on close
			this.options.onCloseDialog( this );
		}
		else {
			classie.add( this.el, 'dialog--open' );

			// callback on open
			this.options.onOpenDialog( this );
		}
		this.isOpen = !this.isOpen;
	};

	// add to global namespace
	window.DialogFx = DialogFx;

})( window );

/* call */


			(function() {

				var dlgtrigger1 = document.querySelector( '[data-dialog-1]' ),
					somedialog1 = document.getElementById( dlgtrigger1.getAttribute( 'data-dialog-1' ) ),
					dlg1 = new DialogFx( somedialog1 );
				dlgtrigger1.addEventListener( 'click', dlg1.toggle.bind(dlg1) );

				var dlgtrigger2 = document.querySelector( '[data-dialog-2]' ),
					somedialog2 = document.getElementById( dlgtrigger2.getAttribute( 'data-dialog-2' ) ),
					dlg2 = new DialogFx( somedialog2 );
				dlgtrigger2.addEventListener( 'click', dlg2.toggle.bind(dlg2) );

				var dlgtrigger3 = document.querySelector( '[data-dialog-3]' ),
					somedialog3 = document.getElementById( dlgtrigger3.getAttribute( 'data-dialog-3' ) ),
					dlg3 = new DialogFx( somedialog3 );
				dlgtrigger3.addEventListener( 'click', dlg3.toggle.bind(dlg3) );

				var dlgtrigger4 = document.querySelector( '[data-dialog-4]' ),
					somedialog4 = document.getElementById( dlgtrigger4.getAttribute( 'data-dialog-4' ) ),
					dlg4 = new DialogFx( somedialog4 );
				dlgtrigger4.addEventListener( 'click', dlg4.toggle.bind(dlg4) );

				var dlgtrigger5 = document.querySelector( '[data-dialog-5]' ),
					somedialog5 = document.getElementById( dlgtrigger5.getAttribute( 'data-dialog-5' ) ),
					dlg5 = new DialogFx( somedialog5 );
				dlgtrigger5.addEventListener( 'click', dlg5.toggle.bind(dlg5) );

				var dlgtrigger6 = document.querySelector( '[data-dialog-6]' ),
					somedialog6 = document.getElementById( dlgtrigger6.getAttribute( 'data-dialog-6' ) ),
					dlg6 = new DialogFx( somedialog6 );
				dlgtrigger6.addEventListener( 'click', dlg6.toggle.bind(dlg6) );

			})();
		


//Go Back
// function OpenProduct(i){
//   var i = $('.product-image[item-data="'+i+'"] img');
//   var lbi = $('.lightbox-blanket .product-image img');
//   console.log($(i).attr("src"));
//   $(lbi).attr("src", $(i).attr("src"));
  
//   $(".lightbox-blanket").toggle();
  
  
//   $("#product-quantity-input").val("0");
//   CalcPrice (0);
  
// }

// function GoBack(){
//   $(".lightbox-blanket").toggle();
// }