$(document).ready(function () {
  const submit = $("#submit");

  function addNews() {
    const title = $("#title").val();
    const content = $("#content").val();
    $.ajax({
      url: "http://127.0.0.1/News-Website/backend/addNews.php",
      method: "POST",
      data: {
        title: title,
        article: content,
      },
      success: function (data) {
        console.log(data);
        displayNews();
      },
      error: function (xhr, status, error) {
        console.error("An error occurred:", error);
      },
    });
  }

  function displayNews() {
    $.ajax({
      url: "http://127.0.0.1/News-Website/backend/getNews.php",
      method: "POST",
      success: function (data) {
        console.log("Latest news articles:", data);
        $("#newsList").empty();
        data.forEach(function (article) {
          $("#newsList").append(
            `<div class="news-wrapper">
            <h2>${article.title}</h2>
            <p>${article.article}</p>
          </div>`
          );
        });
      },
      error: function (error) {
        console.error("An error occurred while fetching news:", error);
      },
    });
  }

  submit.click(() => {
    console.log("clicked");
    addNews();
  });
  displayNews();
});
