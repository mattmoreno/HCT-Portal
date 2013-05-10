if (navigator.userAgent.indexOf('Safari')!= -1)
  {
  var cssNode = document.createElement('link');
  cssNode.setAttribute('rel', 'stylesheet');
  cssNode.setAttribute('type', 'text/css');
  cssNode.setAttribute('href', 'safari-hacks.css');
  document.getElementsByTagName('head')[0].appendChild(cssNode);
  }

if (navigator.userAgent.indexOf('Firefox')!= -1)
  {
  var cssNode = document.createElement('link');
  cssNode.setAttribute('rel', 'stylesheet');
  cssNode.setAttribute('type', 'text/css');
  cssNode.setAttribute('href', 'firefox-hacks.css');
  document.getElementsByTagName('head')[0].appendChild(cssNode);
  }