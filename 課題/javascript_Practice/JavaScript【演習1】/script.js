document.write("■■■問 1■■■");
document.write("<br>");

for (var star = 1; star <= 5; star++) {
  document.write("★");
}

document.write("<br>", "<br>");
document.write("■■■問 2■■■");
document.write("<br>");

for (var star = 1; star <= 2; star++) {
  for (var star1 = 1; star1 <= 3; star1++) {
    document.write("★");
  }
  document.write("<br>");
}

document.write("<br>", "<br>");
document.write("■■■問 3■■■");
document.write("<br>");

for (var star = 1; star <= 2; star++) {
  for (var star1 = 1; star1 <= 5; star1++) {
    document.write("☆");
  }
  document.write("<br>");
}

document.write("<br>", "<br>");
document.write("■■■問 4■■■");
document.write("<br>");

for (var star = 1; star <= 4; star++) {
  for (var star1 = 1; star1 <= 5; star1++) {
    document.write("★");
  }
  document.write("<br>");
}

document.write("<br>", "<br>");
document.write("■■■問 5■■■");
document.write("<br>");

for (var star = 1; star <= 4; star++) {
  for (var star1 = 1; star1 <= 3; star1++) {
    document.write("★");
  }
  document.write("<br>");
}

document.write("<br>", "<br>");
document.write("■■■問 6■■■");
document.write("<br>");

for (var star = 1; star <= 3; star++) {
  for (var star1 = 1; star1 <= 3; star1++) {
    if (star1 % 2 == 1) {
      document.write("☆");
    } else {
      document.write("★");
    }
  }
  document.write("<br>");
}

document.write("<br>", "<br>");
document.write("■■■問 7■■■");
document.write("<br>");

for (var star = 1; star <= 4; star++) {
  for (var star1 = 1; star1 <= 5; star1++) {
    if (star1 % 2 == 0) {
      document.write("☆");
    } else {
      document.write("★");
    }
  }
  document.write("<br>");
}

document.write("<br>", "<br>");
document.write("■■■問 8■■■");
document.write("<br>");

for (var num = 1; num <= 5; num++) {
  for (var star1 = 1; star1 <= num; star1++) {
    document.write("★");
  }
  document.write("<br>");
}
