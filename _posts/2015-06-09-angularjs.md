---
layout: post
title:  AngularJs
date:   2015-06-09 12:00:00
categories: [web-development, tutorial]
published: true
---

AngularJS is a JavaScript framework. It can be added to an HTML page with a `<script>` tag.
AngularJS extends HTML attributes with Directives, and binds data to HTML with Expressions.

##JavaScript Framework
* is a JavaScript framework
* add with a script

	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>

* extends HTML with new attributes
* perfect for Single Page Applications (SPAs)

##Extends HTML
* `ng-app` - defines an Angular JS app
* `ng-model` - binds the HTML value to app data
* `ng-bind` - binds app data to HTML:

		<div ng-app="">
		    <p>Name: <input type="text" ng-model="name"></p>
		    <p ng-bind="name"></p>
		</div>