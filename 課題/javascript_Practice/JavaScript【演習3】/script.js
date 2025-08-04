document.write("■■■問 1■■■");
document.write("<br>");

function circle(hankei) {
  return "半径" + hankei + "cmの円の面積は" + hankei * hankei * 3.14 + "cm²です。";
}
document.write(circle(5));
document.write("<br>");
document.write(circle(7));
document.write("<br>");
document.write(circle(10));

document.write("<br>", "<br>");
document.write("■■■問 2■■■");
document.write("<br>");

function ticket(group, adult_num, child_num, adult_fee = 500, child_fee = 200) {
  return group + "グループ合計金額：" + (adult_fee * adult_num + child_fee * child_num )+ "円です。";
}
document.write(ticket("A", 2, 4));
document.write("<br>");
document.write(ticket("B", 1, 5));
document.write("<br>");
document.write(ticket("C", 3, 7));
