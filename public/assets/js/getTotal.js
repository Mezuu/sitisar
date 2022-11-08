function getTotal(json, col) {
  total = 0;
  json[col].forEach((e) => {
    total += parseInt(e["y"]);
  });

  //   console.log(total);
  return total;
}
