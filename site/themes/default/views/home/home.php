<style>
  @media(max-width:768px) {

    .main_search_box form.site_main_search {
      min-width: 90%;
    }


  }

  .xdsoft_autocomplete {
    width: 100% !important;
  }
</style>




<div class="header_area">
  <div class="container-fluid">
    <div class="header_menu">
      <div class="header_select">
        <select name="" id="">
          <option value="#">Bangla</option>
          <option value="#">English</option>
        </select>
      </div>
      <div class="header_options">
        <ul class="header_menus">
          <li><a href="#" class="settings"><img src="assets2/img/settings.svg" alt=""></a></li>
          <li><a href="#" class="popup_active"><img src="assets2/img/menu.svg" alt=""></a></li>
          <li><a href="#" class="sign-in">sign in</a></li>
        </ul>
      </div>
    </div>
    <!-- our ai list -->
    <div class="user_profile our_services">
      <h6>Our Ai List</h6>
      <li><a href="chat.html"><img src="assets2/img/bing-mini.svg" alt="">Bing Ai</a></li>
    </div>
    <!-- setting options -->
    <div class="setting_for_site">
      <li><a href="preference.html">Safe Search</a></li>
      <li> <a href="preference.html">Search History</a></li>
      <li> <a href="preference.html">Collection</a></li>
      <li> <a href="preference.html">Privacy</a></li>
      <li><a href="preference.html">Feedback</a></li>
    </div>

    <!-- sign in options -->
    <div class="sign_in_options">
      <h4>Please Sign in</h4>
      <form action="">
        <label for="email">Enter your Email</label>
        <input type="email" id="email" name="email">
        <label for="password">Enter your password</label>
        <input type="password" name="password" id="password">
        <button type="submit">Login</button>
        <p>No Account Here? please <a href="registration.html">Sign up</a></p>
      </form>
    </div>

  </div>
</div>
<!-- search box -->
<div class="search_box_content">
  <div class="container-fluid">
    <div class="search_heading">
      <img src="assets2/img/bing.png" alt="">
      <h2>All New Search Engine is here!</h2>
    </div>
    <div class="main_search_box min-w-80">

      <!-- Search form -->


      <form method="GET" action="<?php echo e_attr(url_for('site.search')); ?>" id="searchForm" data-ajax-form="true" data-before-callback="preventEmptySubmit" class="site_main_search">
        <input type="hidden" name="engine" value="<?php echo e_attr($t['default_engine']); ?>" id="engine">
        <div class="search_box">
          <button type="submit" class="search_submit" title="Search"><img src="assets2/img/bing-mini.svg" alt=""></button>
          <input type="text" placeholder="Search anything" class="search_prompt" name="q" data-autocomplete="true" autocomplete="off" spellcheck="false" autocorrect="off" id="home-search-input">

          <button type="submit" class="has-spinner search-btn right-0" style="background: transparent; border: 0;"><span class="btn-text"><?php echo svg_icon('search', 'svg-md'); ?></span>
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
          </button>
        </div>
      </form>

    </div>
  </div>
</div>
<!-- search box end -->
<div class="top_site_list">
  <div class="site_list">
    <div class="single_site_lists">
      <a href="#" class="site_img wh-48">
        <div class="img_class">
          <img src="assets2/img/site-icon.png" alt="">
        </div>
      </a>
      <div class="site_title">
        <h6>Pinterest</h6>
      </div>
    </div>
    <div class="single_site_lists">
      <a href="#" class="site_img wh-48">
        <div class="img_class">
          <img src="assets2/img/site-icon.png" alt="">
        </div>
      </a>
      <div class="site_title">
        <h6>Pinterest</h6>
      </div>
    </div>
    <div class="single_site_lists">
      <a href="#" class="site_img wh-48">
        <div class="img_class">
          <img src="assets2/img/site-icon.png" alt="">
        </div>
      </a>
      <div class="site_title">
        <h6>Pinterest</h6>
      </div>
    </div>
    <div class="single_site_lists">
      <a href="#" class="site_img wh-48">
        <div class="img_class">
          <img src="assets2/img/site-icon.png" alt="">
        </div>
      </a>
      <div class="site_title">
        <h6>Pinterest</h6>
      </div>
    </div>
    <div class="single_site_lists">
      <a href="#" class="site_img wh-48">
        <div class="img_class">
          <img src="assets2/img/site-icon.png" alt="">
        </div>
      </a>
      <div class="site_title">
        <h6>Pinterest</h6>
      </div>
    </div>
    <div class="single_site_lists">
      <a href="#" class="site_img wh-48">
        <div class="img_class">
          <img src="assets2/img/plus.png" alt="">
        </div>
      </a>
      <div class="site_title">
        <h6>Add Shortcut</h6>
      </div>
    </div>
  </div>
</div>
<!-- top sites end -->

<!-- top stories from api -->
<div class="top_news_area">
  <div class="container-fluid">
    <div class="section_title">
      <h4>Top Stories</h4>
    </div>
    <div class="row d-flex justify-content-md-center">
      <div class="row">
        <span id="newsData1" class="row col-md-8"></span>
        <!-- weather -->
        <div class="weather_update col-md-2 mt-2 mb-4 me-1 " style="background: url('assets2/img/weather_bg.jpg');">
          <div class="weather_top">
            <div class="top_icon"><svg slot="title-icon" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path fill="url(#paint0_linear)" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14z"></path>
                <path fill="url(#paint1_linear)" d="M7.2 11c0-.93.73-1.7 1.67-1.77a2.76 2.76 0 0 1 2.66-2.06c.97 0 1.8.5 2.3 1.23a2.2 2.2 0 0 1 1.77 3.47 2.21 2.21 0 0 1-1.8.93H9a1.77 1.77 0 0 1-1.57-.93A1.99 1.99 0 0 1 7.2 11z">
                </path>
                <defs>
                  <linearGradient id="paint0_linear" x1="11.5" x2="4.5" y1="14.08" y2="1.95" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#E25A01"></stop>
                    <stop offset="1" stop-color="#FFD400"></stop>
                  </linearGradient>
                  <linearGradient id="paint1_linear" x1="13.17" x2="9.84" y1="13.47" y2="7.71" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#CCC"></stop>
                    <stop offset="1" stop-color="#fff"></stop>
                  </linearGradient>
                </defs>
              </svg></div>
            <div class="top_title"><select name="" id="weather_select">
                <option value="Barishal">Dhaka</option>
                <option value="Barishal">Dhaka, Bangladesh</option>
              </select></div>
          </div>
          <div class="weather_details">
            <div class="weather_result">
              <div class="weather_icon">
                <img src="assets2/img/CloudyV3.svg" alt="cloudy">
                <h4 id="today_heat" class="today_heat"></h4>
                <p class="heat_meatre">C</p>
              </div>
              <div class="weather_links">
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="d-block weather_source">
            <a href="https://www.accuweather.com/" target="_blank">
              <h6 id="weather_description"></h6><span>See full forecast</span>
            </a>
          </div>
        </div>
        <!-- weather -->

        <!-- cricket -->
        <div class="cricket_update weather_update mt-2 mb-4  col-md-2" style="background: url('assets2/img/weather_bg-2.jpg');">
          <div class="cricket_top">
            <div class="top_icon"><img src="assets2/img/cricket.png" alt=""></div>
            <div class="top_title">
              <!-- <select name="" id="weather_select">
                  <option value="Barishal">CRICKET INTERNATIONAL</option>
                  <option value="Barishal">Bhola, Barishal</option>
                </select> -->
              <span id="matches-info"></span>
            </div>
          </div>
          <div class="team_details">
            <div class="participant_area">
              <div class="sport_match_header">
                <div class="participant">
                  <div class="p_image"><img src="assets2/img/srilanka.png" alt=""></div>
                  <div class="p_name" title="SL">SL</div>
                </div>
                <div class="score_container">
                  <div class="score_winer">325 (25, 0)</div>
                  <div class="winner_tag"><svg width="5" height="10" viewBox="0 0 5 10" fill="currentcolor">
                      <path d="M5 0 0 5.22 5 10V0Z"></path>
                    </svg></div>
                </div>

              </div>
              <div class="sport_match_header">
                <div class="participant">
                  <div class="p_image"><img src="assets2/img/srilanka.png" alt=""></div>
                  <div class="p_name" title="SL">SL</div>
                </div>
                <div class="score_container">
                  <div class="score_winer">325 (25, 0)</div>
                  <div class="winner_tag"><svg width="5" height="10" viewBox="0 0 5 10" fill="none">
                      <path d="M5 0 0 5.22 5 10V0Z"></path>
                    </svg></div>
                </div>
              </div>
            </div>
            <div class="single_spe"></div>
            <div class="cricket_details">
              <div class="game_state">Final</div>
              <div class="game_date">Jun 25</div>
            </div>

          </div>

          <div class="d-block cricket_source">
            <a href="#">See more Cricket Internationals <span><svg width="24" height="24" viewBox="10 8 24 24">
                  <rect x="10" y="8" width="24" height="24" rx="12"></rect>
                  <path d="M17.5 20c0-.28.22-.5.5-.5h6.8l-2.65-2.65a.5.5 0 0 1 .7-.7l3.5 3.5c.2.2.2.5 0 .7l-3.5 3.5a.5.5 0 0 1-.7-.7l2.64-2.65H18a.5.5 0 0 1-.5-.5Z">
                  </path>
                </svg></span></a>
          </div>
        </div>
        <!-- cricket -->
      </div>
      <div class="row" id="newsData">

      </div>
      <div class="row" id="newsData2">

      </div>
      <div class="row" id="newsData3">

      </div>
    </div>
  </div>
</div>
</div>
<!-- top stories from api end -->

<!-- footer area -->
<div class="footer_area">
  <div class="container-fluid">
    <div class="site_footer_content">
      <div class="footer_left">
        <ul class="">
          <li class="location"><img src="assets2/img/Location.png" alt="">
            <p class="loc_name">India</p>
          </li>
          <li class="search_setting">
            <p>Safe Search</p>
            <label class="switch">
              <input type="checkbox" checked>
              <span class="slider round"></span>
            </label>
          </li>
        </ul>
      </div>
      <div class="footer_right">
        <ul>
          <li><a href="business.html">Business</a></li>
          <li><a href="terms.html">Terms & Policy</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>


<script>
  // Replace 'YOUR_API_KEY' with your actual OpenWeatherMap API key
  const apiKey = 'de0ff508aff8e5754ccf0f6d2f744470';

  // API endpoint URL
  const apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=Dhaka&appid=${apiKey}&units=metric`;

  // Fetch weather data from the API
  fetch(apiUrl)
    .then(response => response.json())
    .then(data => {
      // Check if the API response contains weather data
      if (!data.main || !data.weather) {
        document.getElementById('weather-info').textContent = "Weather data not available.";
        return;
      }

      // Extract relevant weather information
      const temperature = data.main.temp;
      const humidity = data.main.humidity;
      const description = data.weather[0].description;
      const min_temp = data.main.temp_min;
      const max_temp = data.main.temp_max;


      // Display the weather information
      const weatherInfo = `Current weather in Dhaka:<br>
                    Temperature: ${temperature}°C<br>
                    Humidity: ${humidity}%<br>
                    Description: ${description}`;

      document.getElementById('today_heat').innerHTML = temperature;
      document.getElementById('weather_description').innerHTML = description;
    })
    .catch(error => {
      console.error("Error fetching weather data:", error);
      document.getElementById('weather-info').textContent = "Error fetching weather data.";
    });



  // API Key
  const apiKey2 = 'FbZYkaaE5LhZbma7OjO6IGGRXCujMCDK';

  // API endpoint URL
  const apiUrl2 = `https://api.nytimes.com/svc/mostpopular/v2/viewed/1.json?api-key=${apiKey2}`;

  // Fetch weather data from the API
  fetch(apiUrl2)
    .then(d => d.json())
    .then(response => {
      // Check if the API response contains weather data

      // Display the news information
      var newsData1 = "";
      for(var i=0; i<3; i++){
         //var img = response.results[i]['media'][0]['media-metadata'][1].url;
        newsData1 += `<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb-4">`;
        newsData1 += `
                      <div class="single_stories_box">
                        <div class="stories_box_content">
                          <div class="storie_links_image">
                            <a href="single.html"><img src="${response.results[i]['media'][0]['media-metadata'][1].url}" class="img-fluid" alt="image"></a>
                          </div>
                          <div class="stories_source_meta">
                            <div class="news_original_site">
                              <div class="site_logo_name">
                                <img src="assets2/img/znews.png" alt=""> znews
                              </div>
                              <div class="news_published_time">
                                <p>${response.results[i].published_date}</p>
                              </div>
                            </div>
                            <div class="news_reaction_bookmark">
                              <div class="news_reaction">
                                <button class="news_like active"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                                  </svg>
                                  <p>16</p>
                                </button>
                                <button class="news_dislike"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 15h2.25m8.024-9.75c.011.05.028.1.052.148.591 1.2.924 2.55.924 3.977a8.96 8.96 0 01-.999 4.125m.023-8.25c-.076-.365.183-.75.575-.75h.908c.889 0 1.713.518 1.972 1.368.339 1.11.521 2.287.521 3.507 0 1.553-.295 3.036-.831 4.398C20.613 14.547 19.833 15 19 15h-1.053c-.472 0-.745-.556-.5-.96a8.95 8.95 0 00.303-.54m.023-8.25H16.48a4.5 4.5 0 01-1.423-.23l-3.114-1.04a4.5 4.5 0 00-1.423-.23H6.504c-.618 0-1.217.247-1.605.729A11.95 11.95 0 002.25 12c0 .434.023.863.068 1.285C2.427 14.306 3.346 15 4.372 15h3.126c.618 0 .991.724.725 1.282A7.471 7.471 0 007.5 19.5a2.25 2.25 0 002.25 2.25.75.75 0 00.75-.75v-.633c0-.573.11-1.14.322-1.672.304-.76.93-1.33 1.653-1.715a9.04 9.04 0 002.86-2.4c.498-.634 1.226-1.08 2.032-1.08h.384" />
                                  </svg>
                                  <p>10</p>
                                </button>
                              </div>
                              <div class="news_bookmark">
                                <a href="#"><img src="assets2/img/Bookmark.png" alt=""></a>
                              </div>
                            </div>
                          </div>
                          <div class="news_title_link" style='height:100px; overflow:hidden'><a href="${response.results[i].url}"><h6>${response.results[i].title}</h1></a></div>
                        </div>
                      </div>`;
        newsData1 += "</div>";
      }

      var newsData= "";
      for(var i=4; i<response.results.length; i++){
        // var img = response.results[i]['media'][0]['media-metadata'][1].url;
        newsData += `<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-4">`;
        newsData += `
                      <div class="single_stories_box">
                        <div class="stories_box_content">
                          <div class="storie_links_image">
                            <a href="single.html"><img src="" class="img-fluid" alt="Image"></a>
                          </div>
                          <div class="stories_source_meta">
                            <div class="news_original_site">
                              <div class="site_logo_name">
                                <img src="assets2/img/znews.png" alt=""> znews
                              </div>
                              <div class="news_published_time">
                                <p>${response.results[i].published_date}</p>
                              </div>
                            </div>
                            <div class="news_reaction_bookmark">
                              <div class="news_reaction">
                                <button class="news_like active"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                                  </svg>
                                  <p>16</p>
                                </button>
                                <button class="news_dislike"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 15h2.25m8.024-9.75c.011.05.028.1.052.148.591 1.2.924 2.55.924 3.977a8.96 8.96 0 01-.999 4.125m.023-8.25c-.076-.365.183-.75.575-.75h.908c.889 0 1.713.518 1.972 1.368.339 1.11.521 2.287.521 3.507 0 1.553-.295 3.036-.831 4.398C20.613 14.547 19.833 15 19 15h-1.053c-.472 0-.745-.556-.5-.96a8.95 8.95 0 00.303-.54m.023-8.25H16.48a4.5 4.5 0 01-1.423-.23l-3.114-1.04a4.5 4.5 0 00-1.423-.23H6.504c-.618 0-1.217.247-1.605.729A11.95 11.95 0 002.25 12c0 .434.023.863.068 1.285C2.427 14.306 3.346 15 4.372 15h3.126c.618 0 .991.724.725 1.282A7.471 7.471 0 007.5 19.5a2.25 2.25 0 002.25 2.25.75.75 0 00.75-.75v-.633c0-.573.11-1.14.322-1.672.304-.76.93-1.33 1.653-1.715a9.04 9.04 0 002.86-2.4c.498-.634 1.226-1.08 2.032-1.08h.384" />
                                  </svg>
                                  <p>10</p>
                                </button>
                              </div>
                              <div class="news_bookmark">
                                <a href="#"><img src="assets2/img/Bookmark.png" alt=""></a>
                              </div>
                            </div>
                          </div>
                          <div class="news_title_link" style='height:100px; overflow:hidden'><a href="${response.results[i].url}"><h6>${response.results[i].title}</h1></a></div>
                        </div>
                      </div>`;
        newsData += "</div>";
      }



      document.getElementById('newsData').innerHTML = newsData;
      document.getElementById('newsData1').innerHTML = newsData1;

    })
    .catch(error => {
      console.error("Error fetching news data:", error);
      document.getElementById('newsData').textContent = "Error fetching News Data.";
    });

  // Fetch live soccer matches data from the API
</script>
<!-- footer area end -->