function arrangeData(json) {
  let list = [];
  for (let i = 0; i < json["net_weight"].length; i++) {
    let temp = [];
    temp.push(json["net_weight"][i]["x"]);
    temp.push(json["net_weight"][i]["y"]);
    temp.push(json["net_value"][i]["y"]);
    list.push(temp);
  }

  return list;
}
