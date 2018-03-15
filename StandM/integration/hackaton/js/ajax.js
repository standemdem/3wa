"use strict"

function callbackquestion(response)
{
  $('.result').html(response);
}

function test(key)
{
  var value = getData(key);

  value++;
  console.log("key = " + key);
  console.log("value =" + value);
  store(key,value);
//  highervalue();
}

function highervalue()
{
  var a = getData("a");
  var b = getData("b");
  var c = getData("c");
  var d = getData("d");

  var maxA = Math.max(a);
  var maxB = Math.max(b);
  var maxC = Math.max(c);
  var maxD = Math.max(d);
  var k =maxA;
  if (maxB > k) {
    k = maxB;
  }else if (maxC > k) {
    k = maxC;
  }else if (maxD > k) {
    k = maxD;
  }else {
    k = maxA;
  }
  var result;
  if (k == maxA) {
    result = 'A';
  }else if (k == maxB) {
    result = 'B';
  }else if (k == maxC) {
    result = 'C';
  }else {
    result='D';
  }
  return result;
}
//function questionumber()
