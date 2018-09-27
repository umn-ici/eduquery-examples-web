/* globals $: true */
/*jslint
    this
*/
'use strict';

var InteractiveExample = function(activating_control_id) {
  // initialize
  this.activating_control = $(activating_control_id);
  this.boxy;
  this.boxy_iframe;
  this.path;
  this.iframe_height;
  this.init();
};

InteractiveExample.prototype.interaction_box = $('<div class="boxy"><a href="" class="close">Close this example</a><iframe src="" width="100% height="1px" frameborder="0" scrolling="no"/></iframe></div>');

InteractiveExample.prototype.init = function(){
  this.boxy = this.interaction_box.clone();
  this.boxy_iframe = this.boxy.find('iframe');
  this.path = this.activating_control.attr('href');
  this.iframe_height = this.activating_control.attr('data-height');
  this.text_source = this.activating_control.attr('text-script-path');
  this.close_button = this.boxy.find('.close');
  this.animation_dur = 300;

  //add link text as a heading to boxy
  this.boxy.prepend('<h3>'+ this.activating_control.text() +'</h3>');

  //listener for close control
  this.close_button.on('click.INTERACTIVEEXAMPLE', jQuery.proxy(function(e){
    e.preventDefault();

    //animate it to 1px tall and suspend
    this.boxy_iframe.animate({"height" : "1px"}, this.animation_dur, jQuery.proxy(this.suspend, this));
  }, this));

  this.activate();
};

InteractiveExample.prototype.getPath = function(){
  return this.path + '?d=' + window.Date();
};

InteractiveExample.prototype.activate = function(){
  var p = this.getPath();
  //set control to current
  this.activating_control.addClass('current');
  //set the iframe path to interaction url
  this.boxy_iframe.attr('src', p);
  //add link to text write up of interaction if one doesn't already exist.
  if(this.boxy.find('.link-to-text').length === 0) {
    this.boxy.append('<div class="link-to-text"><h4>Thinking about using this eduQuery component in your course?</h4><a href="'+ this.text_source +'" target="_blank">Check out the text write-up of the interactive example above</a></div>');
  }
  //attach boxy
  this.activating_control.closest('dd').append(this.boxy);
  //animate open
  this.boxy_iframe.animate({"height" : this.iframe_height+"px"}, this.animation_dur);
};

InteractiveExample.prototype.suspend = function(){
  //neutralize the iframe
  this.boxy_iframe.attr('src', '');

  //extract interaction box from the DOM
  this.boxy.detach();

  //remove visually current class from control
  this.activating_control.removeClass('current');
};

(function(){
  //get all the controls
  var controls = $('.controls a');
  var instances = [];

  controls.each(function(index){
    //give each an id and then add that id to an array
    var uid = 'c'+index;
    $(this).attr('id', uid);
    instances.push({
      id : uid,
      instance : null
    });
  });

  $('.main').eq(0).on('click.EXAMPLESWEB', '.controls a', function(e){
    e.preventDefault();
    var targ = $(this);
    var targ_id = targ.attr('id');
    for (var i=0; i<instances.length; i++){
      if(instances[i].id === targ_id){
        if(!instances[i].instance){
          instances[i].instance = new InteractiveExample('#'+targ_id);
        }
        else {
          if(targ.hasClass('current')){
            instances[i].instance.close_button.trigger('click.INTERACTIVEEXAMPLE');
          }
          else {
            instances[i].instance.activate();
          }
        }
      }
    }
  });

  function objWithIdIsInArray(arr, uid) {
    for(var i=0;i<arr.length;i++){
      if(arr[i].id === uid){
        return true;
      }
    }
    return false;
  }
})();
