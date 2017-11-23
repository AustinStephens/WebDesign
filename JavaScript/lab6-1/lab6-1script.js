function startPage()
{
  document.write("<!DOCTYPE html>");
  document.write("<html>");
  document.write("<head>");
  document.write("<meta charset='utf-8'>");
  document.write("<title>Austin Stephens</title>");
  document.write("<link rel='stylesheet' href='lab6-1style.css'>");
  document.write("</head>");
  document.write("<body>");
  document.write("<section>");
}

function endPage()
{
  document.write("</section>");
  document.write("</body>");
  document.write("</html>");
}

function newWin(url)
{
  window.open(url, "search", "width=800, height=600");
}
