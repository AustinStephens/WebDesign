var title = "Austin Stephens";
var features = ["Space", "Bandwidth", "Email Accounts", "FTP Accounts", "Web Stats", "Sub Domains", "PHP/MySQL", "Control Panel", "Monthly", "Annual"];
var shared = ["500MB", "2GB", "10", "5", "Included", "10", "Yes", "Yes", "$12", "$100"];
var dedicated = ["25GB", "30GB", "Unlimited", "Unlimited", "Included", "Unlimited", "Yes", "Yes", "$110", "$1,200"];

function startPage()
{
  document.write("<!DOCTYPE>");
  document.write("<html>");
  document.write("<head>");
  document.write("<meta charset='utf-8'>");
  document.write("<title>" + title + "</title>");
  document.write("<link rel='stylesheet' href='style7-4.css'>");
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

function topMenu()
{
  var link = [];
  link[0] = "<a href='lab7-4.htm'>Home</a>";
  link[1] = "<a href='prices.htm'>Prices</a>";
  link[2] = "<a href='services.htm'>Services</a>";
  link[3] = "<a href='signup.htm'>Sign Up</a>";
  document.write("<nav>");
  document.write(link[0]);
  document.write(link[1]);
  document.write(link[2]);
  document.write(link[3]);
  document.write("</nav>");
}