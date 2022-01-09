var arr = [7, 13, 223, 114];
document.write(reverse(arr));

function reverse(arr) {
  for (i in arr) {
    var elemstring = ("0000000" + arr[i].toString(2)).slice(-8);
    arr[i] = parseInt(elemstring.split('').reverse().join(''), 2);
  }
  return arr;
}