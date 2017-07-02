window.onload = function() {
  var JQscript = document.createElement('script');
  JQscript.src = 'http://code.jquery.com/jquery-1.11.0.min.js';
  JQscript.type = 'text/javascript';
  var chars = "abcdefghijklmn@opqrstuvwxyz01234ABCDEFGHIJKLMN&OPQRSTUVWXYZ56789";
  var dictionary_obj = createDictionary(chars);
  do{
      var code = prompt("Please enter your code", "");
      if (code == "end"){
        break;
      }
      decode(code,dictionary_obj);
  }while(code != "end");
};

var getStrCopy = function (str, copies) {
	var newStr = str;
	copies = (copies > 0) ? copies : 1;
	while (--copies) {
		newStr += str;
	}
	return newStr;
},
convertDecToBase = function ( dec, base, length, padding ) {
	padding = padding || '0' ;
	var num = dec.toString( base );
	length = length || num.length;
	if (num.length !== length) {
		if (num.length < length) {
			num = getStrCopy( padding, (length - num.length)) + num;
		}
		else {
			throw new Error("convertDecToBase(): num(" + num + ").length > length(" + length + ") too long.");
		}
	}
	return num;
};

function dec2bin(dec)
{
  bin = convertDecToBase(dec, 2, 7);
  return bin;
}

function bin2dec(bin)
{
  dec = parseInt(bin, 2).toString(10);
  return dec;
}


function createDictionary(chars)
{
  var dictionary = {};
  var arr_chars = chars.split("");
  arr_chars.forEach(function(entry,index){
    dictionary[entry] = dec2bin(index);
  });
  dictionary[" "] = dec2bin(127);
  return dictionary;
}

function lookUp(word,dictionary){
  var keys = Object.keys(dictionary);
  var output = "";
  keys.forEach(function(entry,index){
    if (word == dictionary[entry]){
      output = entry;
    }
  });
  return output;
}

function decode(code,dictionary){
  var letter = lookUp(code,dictionary);
  $("body").append(letter);
}
