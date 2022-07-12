function segitiga1(baris) {
  let pola = '';

  for (let i = 1; i <= baris; i++) {
    for (k = 1; k <= i; k++) {
      pola += '*';
    }
    pola += '\n';
  }
  return pola;
}
console.log(segitiga1(6));

function segitiga2(baris) {
  let pola = '';

  for (let i = 1; i <= baris; i++) {
    for (let j = baris - 1; j >= i; j--) {
      pola += ' ';
    }
    for (let a = 1; a <= i; a++) {
      pola += '*';
    }
    pola += '\n';
  }
  return pola;
}
console.log(segitiga2(6));
