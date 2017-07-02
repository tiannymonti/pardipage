window.onload = function() {
  var chars = "abcdefghijklmn@opqrstuvwxyz01234ABCDEFGHIJKLMN&OPQRSTUVWXYZ56789";
  var dictionary_obj = createDictionary(chars);
  var message = prompt("Please enter your message (@ --> 'ñ'. & --> 'Ñ')", "");
  encode(message,dictionary_obj);
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

function encode(message,dictionary){
  var arr_message = message.split("");
  var output = [];
  arr_message.forEach(function(entry,index){
    output.push(dictionary[entry]);
    $("body").append(dictionary[entry] + "<br>");
  });
  $("body").append("<br> <br> <br> ---------------- <br> END OF THE MESSAGE");
}
