/**
 * formQueryBuilder
 * function for get form element and it's value using javascript
 * Ver 2.0 [15-05-2009]
 * Change/Modify ver 3.0 [04-06-2009]:
 * - Colaborate json parser in the script
 * - Creating  ver 2.0 form query script for build json data * GPL/GNU Licence
 * Change/Modify ver 4.0 [11-06-2009]:
 * - Add variable for controlling add comma between data
 * - change add comma rule
 * Change/Modify ver 4.0.1 [30-06-2010]: byrzl
 * - Add encodeURIComponent() function to support input URIComponenet as parameter
 */

/*
 * build GET model data set
*/
function buildQuery(form)
{
	var query = "";
	for(var i=0; i<form.elements.length; i++)
	{
		var key = form.elements[i].name;
		var value = getElementValue(form.elements[i]);
		if(key && value)
		{
			query += key +"="+ encodeURIComponent(value) +"&";
		}
	}
	return query;
}

/*
 * build JSON model data set
*/
function jsonQuery(form)
{
	var fmln = form.elements.length;
	var query = "({";
	for(var i=0; i<fmln; i++)
	{
		var key = form.elements[i].name;
		var value = getElementValue(form.elements[i]);
		if(key && value)
		{
			query += '"'+key+'":"'+value+'"';
			if(i<(fmln-1))
			{
				query += ',';
			}
		}

	}
	query += "})";
	return eval(query);
}

/*
 * Get element name and it's corespondence value by element
*/
function getElementValue(formElement)
{
	if(formElement.length != null) var type = formElement[0].type;
	if((typeof(type) == 'undefined') || (type == 0)) var type = formElement.type;

	switch(type)
	{
		case 'undefined': return;

		case 'button': return;

		case 'radio':
			var myValue = '';
			if(formElement.checked == true)
				myValue = formElement.value;
			return myValue;

		case 'select-multiple':
			var myArray = new Array();
			for(var x=0; x < formElement.length; x++) 
				if(formElement[x].selected == true)
					myArray[myArray.length] = formElement[x].value;
			return myArray;

		case 'checkbox': 
			var myValue = formElement.value;
			if(formElement.checked == false)
				myValue = '';
			return myValue;
	
		//case 'file': return formElement.value;

		default: return formElement.value;
	}
}


/*
 * additional & modificational function on Ver 3.0
 * ======================================================================================================
 * build JSON model data set save for backslash, dobel quote
*/
function jsonQuery2(form)
{
	var fmln = form.elements.length;
	var query = '{';
	var ar = 0; // Addition for ver 4.0
	for(var i=0; i<fmln; i++)
	{
		var key = form.elements[i].name;
		var value = getElementValue2(form.elements[i]);
		if(key && value)
		{
			// BOF change rule for adding comma on ver 4.0
			if(ar>0)
			{
				query += ',';
			}
			// EOF change rule for adding comma	
			query += '"'+key+'":"'+value+'"';
/*
			if(i<(fmln-1))
			{
				query += ',';
			}
*/
			ar++; // increase ar variable value 
		}

	}
	query += '}';
	query=json_parse(query);
	return query;
}

/*
 * Get element name and it's corespondence value by element
*/
function getElementValue2(formElement)
{
	if(formElement.length != null) var type = formElement[0].type;
	if((typeof(type) == 'undefined') || (type == 0)) var type = formElement.type;

	switch(type)
	{
		case 'undefined': return;

		case 'button': return;

		case 'radio':
			var myValue = '';
			if(formElement.checked == true)
				myValue = formElement.value;
			return myValue;

		case 'select-multiple':
			var myArray = new Array();
			for(var x=0; x < formElement.length; x++) 
				if(formElement[x].selected == true)
					myArray[myArray.length] = formElement[x].value;
			return myArray;

		case 'checkbox': 
			var myValue = formElement.value;
			if(formElement.checked == false)
				myValue = '';
			return myValue;
	
		//case 'file': return formElement.value;

		default:
			var myValue = formElement.value;
			myValue = myValue.replace(/\\/g, "\\\\");
			myValue = myValue.replace(/\"/g, "\\\"");
			return myValue;
	}
}

/*
 * json parser modification, original parser get from json_parser.js at http://www.json.org
* ==================================================================================================
*/
function json_parse(jsonText) {

	var at,     // The index of the current character
		ch,     // The current character
		escapee = {
				'"':  '"',
				'\\': '\\',
				'/':  '/',
				b:    '\b',
				f:    '\f',
				n:    '\n',
				r:    '\r',
				t:    '\t'
		},
		text = jsonText,
		error = function (m) {
				throw {
					name:    'SyntaxError',
					message: m,
					at:      at,
					text:    text
				};
		},
		next = function (c) {
				if (c && c !== ch) {
					error("Expected '" + c + "' instead of '" + ch + "'");
				}

				ch = text.charAt(at);
				at += 1;
				return ch;
		},
		number = function () {
				var number,
					string = '';

				if (ch === '-') {
					string = '-';
					next('-');
				}
				while (ch >= '0' && ch <= '9') {
					string += ch;
					next();
				}
				if (ch === '.') {
					string += '.';
					while (next() && ch >= '0' && ch <= '9') {
						string += ch;
					}
				}
				if (ch === 'e' || ch === 'E') {
					string += ch;
					next();
					if (ch === '-' || ch === '+') {
						string += ch;
						next();
					}
					while (ch >= '0' && ch <= '9') {
						string += ch;
						next();
					}
				}
				number = +string;
				if (isNaN(number)) {
					error("Bad number");
				} else {
					return number;
				}
		},
		string = function () {
				var hex,
					i,
					string = '',
					uffff;
				if (ch === '"') {
					while (next()) {
						if (ch === '"') {
							next();
							return string;
						} else if (ch === '\\') {
							next();
							if (ch === 'u') {
								uffff = 0;
								for (i = 0; i < 4; i += 1) {
									hex = parseInt(next(), 16);
									if (!isFinite(hex)) {
										break;
									}
									uffff = uffff * 16 + hex;
								}
								string += String.fromCharCode(uffff);
							} else if (typeof escapee[ch] === 'string') {
								string += escapee[ch];
							} else {
								break;
							}
						} else {
							string += ch;
						}
                			}
				}
				error("Bad string");
		},
		white = function () {
				while (ch && ch <= ' ') {
					next();
				}
		},
		word = function () {
				// true, false, or null.

				switch (ch) {
					case 't':
						next('t');
						next('r');
						next('u');
						next('e');
						return true;
					case 'f':
						next('f');
						next('a');
						next('l');
						next('s');
						next('e');
						return false;
					case 'n':
						next('n');
						next('u');
						next('l');
						next('l');
						return null;
				}
				error("Unexpected '" + ch + "'");
		},
		value,  // Place holder for the value function.
		array = function () {
				// Parse an array value.
				var array = [];
				if (ch === '[') {
					next('[');
					white();
					if (ch === ']') {
						next(']');
						return array;   // empty array
					}
					while (ch) {
						array.push(value());
						white();
						if (ch === ']') {
							next(']');
							return array;
						}
						next(',');
						white();
					}
				}
				error("Bad array");
		},
		object = function () {
			// Parse an object value.
				var key,
					object = {};

				if (ch === '{') {
					next('{');
					white();
					if (ch === '}') {
						next('}');
						return object;   // empty object
					}
					while (ch) {
						key = string();
						white();
						next(':');
						if (Object.hasOwnProperty.call(object, key)) {
							error('Duplicate key "' + key + '"');
						}
						object[key] = value();
						white();
						if (ch === '}') {
							next('}');
							return object;
						}
						next(',');
						white();
					}
				}
				error("Bad object");
		};

		value = function () {
			// Parse a JSON value. It could be an object, an array, a string, a number,
			// or a word.
			white();
			switch (ch) {
				case '{':
					return object();
				case '[':
					return array();
				case '"':
					return string();
				case '-':
					return number();
				default:
					return ch >= '0' && ch <= '9' ? number() : word();
			}
		};

		// Return the json_parse function. It will have access to all of the above
		// functions and variables.

	function saveJson(jsonText) {
		var result;

		text = jsonText;
		at = 0;
		ch = ' ';

		result = value();
		white();
		if (ch) {
			error("Syntax error");
		}

		return result;
	}

	return saveJson(text);
};
