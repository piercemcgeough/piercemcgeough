---
layout: post
title:  AngularJs - 1st look, part 1
date:   2015-04-27 12:00:00
categories: [web-development, tutorial]
published: true
---

This is my own personal first look into AngularJS. After seeing it crop up many times over the past year I finally decided to have a look and see if it is of any benefit to my current work application project. Working from <a href="https://angularjs.org/" target="_blank">AngularJS.org</a> and <a href="http://www.w3schools.com/angular/" target="_blank">W3Schools.com</a> this is my following of their guides and content.

<hr>

AngularJS is a JavaScript framework. It can be added to an HTML page with a `<script>` tag.
AngularJS extends HTML attributes with Directives, and binds data to HTML with Expressions.

##JavaScript Framework
* is a JavaScript framework
* add with a script

```html
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
```

* extends HTML with new attributes
* perfect for Single Page Applications (SPAs)

##Extends HTML
* `ng-app` - defines an Angular JS app
* `ng-model` - binds the HTML value to app data
* `ng-bind` - binds app data to HTML

```html
<div ng-app="">
    <p>Name: <input type="text" ng-model="name"></p>
    <p ng-bind="name"></p>
</div>
```

<hr>

##AngularJS Directives
Directives are HTML attributes with an `ng` prefix. Use `ng-init` to initialise variables.

```html
<div ng-app="" ng-init="firstName='John'">
    <p ng-bind="firstName"></p>
</div>
```

_Page output:_


```
John
```

If you are worried about having vaild HTML code you can alway use the `data-ng-` instead of `ng-`.

<hr>

##AngularJS Expressions
Expressions are inside double brances: `{{ expression }}`. It will output the data where the expression is written.

```html
<div ng-app="">
    <p>2+3 = {% raw %}{{ 2 + 3 }}{% endraw %}</p>
</div>
```

_Page output:_

````
2+3 = 5
```

```html
<div ng-app="">
  <p>Name: <input type="text" ng-model="name"></p>
  <p>{% raw %}{{name}}{% endraw %}</p>
</div>
```

<hr>

##Creating an application
AngularJS **modules** define applications, **controllers** control the application.

`ng-app` defines the app<br>
`ng-controller` defines the controller

```html
<div ng-app="myApp" ng-controller="myController">
    First name: <input type="text" ng-model="firstName"><br>
    Surname: <input type="text" ng-model="surname"><br><br>

    Full name: {% raw %}{{ firstName + " " + surname}}{% endraw %}
</div>

<script>
    var app = angular.module('myApp', []);
    app.controller('myController', function($scope) {
        $scope.firstName = "Pierce";
        $scope.surname = "McGeough";
    });
</script>
```

**So what is happening here?** Lets walk through step by step what's going on.

First we define the application

```javascript
var app = angular.module('myApp', []);
```

Then the AngularJS controllers will control the application

```javascript
app.controller('myController', function($scope) {
    $scope.firstName = "Pierce";
    $scope.surname = "McGeough";
});
```

<hr>

##Using Expressions
As noted before expressions are written inside double braces: `{% raw %}{{ expression }}{% endraw %}`. The expressions will bind data to HTML the same way you can use `ng-bind`.

AngularJS will output the data exactly where is written on the page.

Expressions within AngularJS work very much like JavaScript. They can contain literals, operators and variables.

```html
<div ng-app="">
    <p>Basic expression: {% raw %}{{ 2 + 2 }}{% endraw %}</p>
</div>
```

_Page output:_

```
Basic expression: 4
```

**Wana see something cool?** Try removing `ng-app=""` and see what the output will be

```html
<div>
    <p>Basic expression: {% raw %}{{ 2 + 2 }}{% endraw %}</p>
</div>
```

_Page output:_

```
Basic expression: {% raw %}{{ 2 + 2 }}{% endraw %}
```

<hr>

##Using Numbers
Now we want to try some basic math with expressions and variables. The operations work similar to JavaScript.

```html
<div ng-app="" ng-init="width=2;height=5">
    <p>Area: {% raw %}{{ width * height }}{% endraw %}</p>
    <p>Perimeter: {% raw %}{{ width + width + height + height }}{% endraw %}</p>
    <p>Perimeter: {% raw %}{{ (width * 2) + (height * 2) }}{% endraw %}</p>
</div>
```

_Page output:_

```
Area: 10
Perimeter: 14
Perimeter: 14
```

So how does this all work? First we set two variables **width=2** and **height=5** with `ng-init`.
<br>**Note: using `ng-init` is not common, but for the purpose of these notes it is fine**

```
<div ng-app="" ng-init="width=2;height=5">
```

Next we will look at finding the area which is _width * height_. AngluarJS easily multiplies the width and the height outputing the answer.

```
{% raw %}{{ width * height }}{% endraw %}
```

Finally we find the perimeter _width + length + width + length_.

```
{% raw %}{{ width + width + height + height }}{% endraw %}
{% raw %}{{ (width * 2) + (height * 2) }}{% endraw %}
```

**We can achieve the same with result using `ng-bind`**

```
<div ng-app="" ng-init="width=2;height=5">
    <p>Bind Area: <span ng-bind="width * height"></span></p>
    <p>Bind Perimeter: <span ng-bind="width + width + height + height"></span></p>
    <p>Bind Perimeter: <span ng-bind="(width * 2) + (height * 2)"></span></p>
</div>
```

_Page output:_

```
Bind Area: 10
Bind Perimeter: 14
Bind Perimeter: 14
```

<hr>

##Strings
Stings in AngularJS will work similar as JavaScript too. Below is an example of using both expressions and the `ng-bind` method.

First we `ng-init` the data variables and place into the HTML.

```
<div ng-app="" ng-init="firstName='Pierce';lastName='McGeough'">
    <p>Hi, my name is {% raw %}{{ firstName + " " + lastName }}{% endraw %}</p>
    <p>Hi, my bind name is <span ng-bind="firstName + ' ' + lastName"></span></p>
</div>
```

_Page output:_

```
Hi, my name is Pierce McGeough
Hi, my bind name is Pierce McGeough
```

**Its worth noting at this stage I am writing most of the code without looking at the actual content, just the context, as AngularJS, like JavaScript, follows distinct syntax and formatting.** 

<hr>

##Objects
Again objects in AngularJS work just the same as objects in JavaScript.

For this we `ng-init` a new `person` object and add the details. We can then call it using object.property just like in JavaScript.

```
<div ng-app="" ng-init="person={firstName:'Peter',lastName:'Griffin'}">
    <p>Person object name is {% raw %}{{ person.firstName + " " + person.lastName }}{% endraw %}</p>
    <p>Person object bind name is <span ng-bind="person.firstName + ' ' + person.lastName"></span></p>
</div>
```

_Page output:_

```
Person object name is Peter Griffin
Person object bind name is Peter Griffin
```

<hr>

##Arrays
We can also build arrays like we do in JavaScript. **Remember array positions start from 0**

```
<div ng-app="" ng-init="pints=[5,10,11,8];">
    <p>Peter drank {% raw %}{{ pints[2] }}{% endraw %} pints</p>
    <p>Joe drank <span ng-bind="pints[1]"></span> pints</p>
</div>
```

_Page output:_

```
Peter drank 11 pints
Joe drank 10 pints
```




































