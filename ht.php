<?php
date_default_timezone_set('PRC');
$output = <<<EOF
<body class="logged-in env-production page-responsive intent-mouse">
    

    <div class="position-relative js-header-wrapper ">
      <a href="#start-of-content" class="p-3 bg-blue text-white show-on-focus js-skip-to-content">Skip to content</a>
      <span class="progress-pjax-loader width-full js-pjax-loader-bar Progress position-fixed">
    <span style="background-color: rgb(121, 184, 255); width: 100%; transition: width 0.4s ease 0s;" class="Progress-item progress-pjax-loader-bar "></span>
</span>      
      


            <header class="Header js-details-container Details px-3 px-md-4 px-lg-5 flex-wrap flex-md-nowrap" role="banner">
    <div class="Header-item mt-n1 mb-n1  d-none d-md-flex">
      <a class="Header-link " href="https://github.com/" data-hotkey="g d" aria-label="Homepage " data-ga-click="Header, go to dashboard, icon:logo">
  <svg class="octicon octicon-mark-github v-align-middle" height="32" viewBox="0 0 16 16" version="1.1" width="32" aria-hidden="true"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path></svg>
</a>

    </div>

    <div class="Header-item d-md-none">
      <button class="Header-link btn-link js-details-target" type="button" aria-label="Toggle navigation" aria-expanded="false">
        <svg height="24" class="octicon octicon-three-bars" viewBox="0 0 16 16" version="1.1" width="24" aria-hidden="true"><path fill-rule="evenodd" d="M1 2.75A.75.75 0 011.75 2h12.5a.75.75 0 110 1.5H1.75A.75.75 0 011 2.75zm0 5A.75.75 0 011.75 7h12.5a.75.75 0 110 1.5H1.75A.75.75 0 011 7.75zM1.75 12a.75.75 0 100 1.5h12.5a.75.75 0 100-1.5H1.75z"></path></svg>
      </button>
    </div>

    <div class="Header-item Header-item--full flex-column flex-md-row width-full flex-order-2 flex-md-order-none mr-0 mr-md-3 mt-3 mt-md-0 Details-content--hidden-not-important d-md-flex">
          <div class="header-search flex-auto js-site-search position-relative flex-self-stretch flex-md-self-auto mb-3 mb-md-0 mr-0 mr-md-3 js-jump-to" role="combobox" aria-owns="jump-to-results" aria-label="Search or jump to" aria-haspopup="listbox" aria-expanded="false">
  <div class="position-relative">
    <!-- '"` --><!-- </textarea></xmp> --><form class="js-site-search-form" role="search" aria-label="Site" data-flagged-in="false" data-unscoped-search-url="/search" action="/search" accept-charset="UTF-8" method="get">
      <label class="form-control input-sm header-search-wrapper p-0 js-chromeless-input-container header-search-wrapper-jump-to position-relative d-flex flex-justify-between flex-items-center">
        <input type="text" class="form-control input-sm header-search-input jump-to-field js-jump-to-field js-site-search-focus " data-hotkey="s,/" name="q" value="zuoyebang language:php" placeholder="Search or jump to…" data-unscoped-placeholder="Search or jump to…" data-scoped-placeholder="Search or jump to…" autocapitalize="off" aria-autocomplete="list" aria-controls="jump-to-results" aria-label="Search or jump to…" data-jump-to-suggestions-path="/_graphql/GetSuggestedNavigationDestinations" spellcheck="false" autocomplete="off">
          <input type="hidden" value="pb7WnPOusXeFc4YpIcWfl8IA1JSEvk2Q9sSdftLALVSjBhrCdXJWthZTnFno0FhbSbzs1PZ20OCg90w40DK5rA==" data-csrf="true" class="js-data-jump-to-suggestions-path-csrf">
          <input type="hidden" class="js-site-search-type-field" name="type">
            <img src="https://github.githubassets.com/images/search-key-slash.svg" alt="" class="mr-2 header-search-key-slash">

            <div class="Box position-absolute overflow-hidden d-none jump-to-suggestions js-jump-to-suggestions-container">
              
<ul class="d-none js-jump-to-suggestions-template-container">
  

<li class="d-flex flex-justify-start flex-items-center p-0 f5 navigation-item js-navigation-item js-jump-to-suggestion" role="option">
  <a tabindex="-1" class="no-underline d-flex flex-auto flex-items-center jump-to-suggestions-path js-jump-to-suggestion-path js-navigation-open p-2" href="" data-item-type="suggestion">
    <div class="jump-to-octicon js-jump-to-octicon flex-shrink-0 mr-2 text-center d-none">
      <svg height="16" width="16" class="octicon octicon-repo flex-shrink-0 js-jump-to-octicon-repo d-none" title="Repository" aria-label="Repository" viewBox="0 0 16 16" version="1.1" role="img"><path fill-rule="evenodd" d="M2 2.5A2.5 2.5 0 014.5 0h8.75a.75.75 0 01.75.75v12.5a.75.75 0 01-.75.75h-2.5a.75.75 0 110-1.5h1.75v-2h-8a1 1 0 00-.714 1.7.75.75 0 01-1.072 1.05A2.495 2.495 0 012 11.5v-9zm10.5-1V9h-8c-.356 0-.694.074-1 .208V2.5a1 1 0 011-1h8zM5 12.25v3.25a.25.25 0 00.4.2l1.45-1.087a.25.25 0 01.3 0L8.6 15.7a.25.25 0 00.4-.2v-3.25a.25.25 0 00-.25-.25h-3.5a.25.25 0 00-.25.25z"></path></svg>
      <svg height="16" width="16" class="octicon octicon-project flex-shrink-0 js-jump-to-octicon-project d-none" title="Project" aria-label="Project" viewBox="0 0 16 16" version="1.1" role="img"><path fill-rule="evenodd" d="M1.75 0A1.75 1.75 0 000 1.75v12.5C0 15.216.784 16 1.75 16h12.5A1.75 1.75 0 0016 14.25V1.75A1.75 1.75 0 0014.25 0H1.75zM1.5 1.75a.25.25 0 01.25-.25h12.5a.25.25 0 01.25.25v12.5a.25.25 0 01-.25.25H1.75a.25.25 0 01-.25-.25V1.75zM11.75 3a.75.75 0 00-.75.75v7.5a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75zm-8.25.75a.75.75 0 011.5 0v5.5a.75.75 0 01-1.5 0v-5.5zM8 3a.75.75 0 00-.75.75v3.5a.75.75 0 001.5 0v-3.5A.75.75 0 008 3z"></path></svg>
      <svg height="16" width="16" class="octicon octicon-search flex-shrink-0 js-jump-to-octicon-search d-none" title="Search" aria-label="Search" viewBox="0 0 16 16" version="1.1" role="img"><path fill-rule="evenodd" d="M11.5 7a4.499 4.499 0 11-8.998 0A4.499 4.499 0 0111.5 7zm-.82 4.74a6 6 0 111.06-1.06l3.04 3.04a.75.75 0 11-1.06 1.06l-3.04-3.04z"></path></svg>
    </div>

    <img class="avatar mr-2 flex-shrink-0 js-jump-to-suggestion-avatar d-none" alt="" aria-label="Team" src="" width="28" height="28">

    <div class="jump-to-suggestion-name js-jump-to-suggestion-name flex-auto overflow-hidden text-left no-wrap css-truncate css-truncate-target">
    </div>

    <div class="border rounded-1 flex-shrink-0 bg-gray px-1 text-gray-light ml-1 f6 d-none js-jump-to-badge-search">
      <span class="js-jump-to-badge-search-text-default d-none" aria-label="in all of GitHub">
        Search
      </span>
      <span class="js-jump-to-badge-search-text-global d-none" aria-label="in all of GitHub">
        All GitHub
      </span>
      <span aria-hidden="true" class="d-inline-block ml-1 v-align-middle">↵</span>
    </div>

    <div aria-hidden="true" class="border rounded-1 flex-shrink-0 bg-gray px-1 text-gray-light ml-1 f6 d-none d-on-nav-focus js-jump-to-badge-jump">
      Jump to
      <span class="d-inline-block ml-1 v-align-middle">↵</span>
    </div>
  </a>
</li>

</ul>

<ul class="d-none js-jump-to-no-results-template-container">
  <li class="d-flex flex-justify-center flex-items-center f5 d-none js-jump-to-suggestion p-2">
    <span class="text-gray">No suggested jump to results</span>
  </li>
</ul>

<ul id="jump-to-results" role="listbox" class="p-0 m-0 js-navigation-container jump-to-suggestions-results-container js-jump-to-suggestions-results-container">
  

<li class="d-flex flex-justify-start flex-items-center p-0 f5 navigation-item js-navigation-item js-jump-to-scoped-search d-none" role="option">
  <a tabindex="-1" class="no-underline d-flex flex-auto flex-items-center jump-to-suggestions-path js-jump-to-suggestion-path js-navigation-open p-2" href="" data-item-type="scoped_search">
    <div class="jump-to-octicon js-jump-to-octicon flex-shrink-0 mr-2 text-center d-none">
      <svg height="16" width="16" class="octicon octicon-repo flex-shrink-0 js-jump-to-octicon-repo d-none" title="Repository" aria-label="Repository" viewBox="0 0 16 16" version="1.1" role="img"><path fill-rule="evenodd" d="M2 2.5A2.5 2.5 0 014.5 0h8.75a.75.75 0 01.75.75v12.5a.75.75 0 01-.75.75h-2.5a.75.75 0 110-1.5h1.75v-2h-8a1 1 0 00-.714 1.7.75.75 0 01-1.072 1.05A2.495 2.495 0 012 11.5v-9zm10.5-1V9h-8c-.356 0-.694.074-1 .208V2.5a1 1 0 011-1h8zM5 12.25v3.25a.25.25 0 00.4.2l1.45-1.087a.25.25 0 01.3 0L8.6 15.7a.25.25 0 00.4-.2v-3.25a.25.25 0 00-.25-.25h-3.5a.25.25 0 00-.25.25z"></path></svg>
      <svg height="16" width="16" class="octicon octicon-project flex-shrink-0 js-jump-to-octicon-project d-none" title="Project" aria-label="Project" viewBox="0 0 16 16" version="1.1" role="img"><path fill-rule="evenodd" d="M1.75 0A1.75 1.75 0 000 1.75v12.5C0 15.216.784 16 1.75 16h12.5A1.75 1.75 0 0016 14.25V1.75A1.75 1.75 0 0014.25 0H1.75zM1.5 1.75a.25.25 0 01.25-.25h12.5a.25.25 0 01.25.25v12.5a.25.25 0 01-.25.25H1.75a.25.25 0 01-.25-.25V1.75zM11.75 3a.75.75 0 00-.75.75v7.5a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75zm-8.25.75a.75.75 0 011.5 0v5.5a.75.75 0 01-1.5 0v-5.5zM8 3a.75.75 0 00-.75.75v3.5a.75.75 0 001.5 0v-3.5A.75.75 0 008 3z"></path></svg>
      <svg height="16" width="16" class="octicon octicon-search flex-shrink-0 js-jump-to-octicon-search d-none" title="Search" aria-label="Search" viewBox="0 0 16 16" version="1.1" role="img"><path fill-rule="evenodd" d="M11.5 7a4.499 4.499 0 11-8.998 0A4.499 4.499 0 0111.5 7zm-.82 4.74a6 6 0 111.06-1.06l3.04 3.04a.75.75 0 11-1.06 1.06l-3.04-3.04z"></path></svg>
    </div>

    <img class="avatar mr-2 flex-shrink-0 js-jump-to-suggestion-avatar d-none" alt="" aria-label="Team" src="" width="28" height="28">

    <div class="jump-to-suggestion-name js-jump-to-suggestion-name flex-auto overflow-hidden text-left no-wrap css-truncate css-truncate-target">
    </div>

    <div class="border rounded-1 flex-shrink-0 bg-gray px-1 text-gray-light ml-1 f6 d-none js-jump-to-badge-search">
      <span class="js-jump-to-badge-search-text-default d-none" aria-label="in all of GitHub">
        Search
      </span>
      <span class="js-jump-to-badge-search-text-global d-none" aria-label="in all of GitHub">
        All GitHub
      </span>
      <span aria-hidden="true" class="d-inline-block ml-1 v-align-middle">↵</span>
    </div>

    <div aria-hidden="true" class="border rounded-1 flex-shrink-0 bg-gray px-1 text-gray-light ml-1 f6 d-none d-on-nav-focus js-jump-to-badge-jump">
      Jump to
      <span class="d-inline-block ml-1 v-align-middle">↵</span>
    </div>
  </a>
</li>

  

<li class="d-flex flex-justify-start flex-items-center p-0 f5 navigation-item js-navigation-item js-jump-to-global-search d-none" role="option">
  <a tabindex="-1" class="no-underline d-flex flex-auto flex-items-center jump-to-suggestions-path js-jump-to-suggestion-path js-navigation-open p-2" href="" data-item-type="global_search">
    <div class="jump-to-octicon js-jump-to-octicon flex-shrink-0 mr-2 text-center d-none">
      <svg height="16" width="16" class="octicon octicon-repo flex-shrink-0 js-jump-to-octicon-repo d-none" title="Repository" aria-label="Repository" viewBox="0 0 16 16" version="1.1" role="img"><path fill-rule="evenodd" d="M2 2.5A2.5 2.5 0 014.5 0h8.75a.75.75 0 01.75.75v12.5a.75.75 0 01-.75.75h-2.5a.75.75 0 110-1.5h1.75v-2h-8a1 1 0 00-.714 1.7.75.75 0 01-1.072 1.05A2.495 2.495 0 012 11.5v-9zm10.5-1V9h-8c-.356 0-.694.074-1 .208V2.5a1 1 0 011-1h8zM5 12.25v3.25a.25.25 0 00.4.2l1.45-1.087a.25.25 0 01.3 0L8.6 15.7a.25.25 0 00.4-.2v-3.25a.25.25 0 00-.25-.25h-3.5a.25.25 0 00-.25.25z"></path></svg>
      <svg height="16" width="16" class="octicon octicon-project flex-shrink-0 js-jump-to-octicon-project d-none" title="Project" aria-label="Project" viewBox="0 0 16 16" version="1.1" role="img"><path fill-rule="evenodd" d="M1.75 0A1.75 1.75 0 000 1.75v12.5C0 15.216.784 16 1.75 16h12.5A1.75 1.75 0 0016 14.25V1.75A1.75 1.75 0 0014.25 0H1.75zM1.5 1.75a.25.25 0 01.25-.25h12.5a.25.25 0 01.25.25v12.5a.25.25 0 01-.25.25H1.75a.25.25 0 01-.25-.25V1.75zM11.75 3a.75.75 0 00-.75.75v7.5a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75zm-8.25.75a.75.75 0 011.5 0v5.5a.75.75 0 01-1.5 0v-5.5zM8 3a.75.75 0 00-.75.75v3.5a.75.75 0 001.5 0v-3.5A.75.75 0 008 3z"></path></svg>
      <svg height="16" width="16" class="octicon octicon-search flex-shrink-0 js-jump-to-octicon-search d-none" title="Search" aria-label="Search" viewBox="0 0 16 16" version="1.1" role="img"><path fill-rule="evenodd" d="M11.5 7a4.499 4.499 0 11-8.998 0A4.499 4.499 0 0111.5 7zm-.82 4.74a6 6 0 111.06-1.06l3.04 3.04a.75.75 0 11-1.06 1.06l-3.04-3.04z"></path></svg>
    </div>

    <img class="avatar mr-2 flex-shrink-0 js-jump-to-suggestion-avatar d-none" alt="" aria-label="Team" src="" width="28" height="28">

    <div class="jump-to-suggestion-name js-jump-to-suggestion-name flex-auto overflow-hidden text-left no-wrap css-truncate css-truncate-target">
    </div>

    <div class="border rounded-1 flex-shrink-0 bg-gray px-1 text-gray-light ml-1 f6 d-none js-jump-to-badge-search">
      <span class="js-jump-to-badge-search-text-default d-none" aria-label="in all of GitHub">
        Search
      </span>
      <span class="js-jump-to-badge-search-text-global d-none" aria-label="in all of GitHub">
        All GitHub
      </span>
      <span aria-hidden="true" class="d-inline-block ml-1 v-align-middle">↵</span>
    </div>

    <div aria-hidden="true" class="border rounded-1 flex-shrink-0 bg-gray px-1 text-gray-light ml-1 f6 d-none d-on-nav-focus js-jump-to-badge-jump">
      Jump to
      <span class="d-inline-block ml-1 v-align-middle">↵</span>
    </div>
  </a>
</li>


    <li class="d-flex flex-justify-center flex-items-center p-0 f5 js-jump-to-suggestion">
      <svg viewBox="0 0 16 16" fill="none" style="box-sizing: content-box; color: var(--color-icon-primary);" class="m-3" width="32" height="32">
  <circle cx="8" cy="8" r="7" stroke="currentColor" stroke-opacity="0.25" stroke-width="2" vector-effect="non-scaling-stroke"></circle>
  <path d="M15 8a7.002 7.002 0 00-7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" vector-effect="non-scaling-stroke">
    <animateTransform attributeName="transform" type="rotate" from="0 8 8" to="360 8 8" dur="1s" repeatCount="indefinite"></animateTransform>
  </path>
</svg>
    </li>
</ul>

            </div>
      </label>
</form>  </div>
</div>

        <nav class="d-flex flex-column flex-md-row flex-self-stretch flex-md-self-auto" aria-label="Global">
      <a class="Header-link py-md-3 d-block d-md-none py-2 border-top border-md-top-0 border-white-fade-15" data-ga-click="Header, click, Nav menu - item:dashboard:user" aria-label="Dashboard" href="/dashboard">
        Dashboard
</a>
    <a class="js-selected-navigation-item Header-link mt-md-n3 mb-md-n3 py-2 py-md-3 mr-0 mr-md-3 border-top border-md-top-0 border-white-fade-15" data-hotkey="g p" data-ga-click="Header, click, Nav menu - item:pulls context:user" aria-label="Pull requests you created" data-selected-links="/pulls /pulls/assigned /pulls/mentioned /pulls" href="/pulls">
        Pull<span class="d-inline d-md-none d-lg-inline"> request</span>s
</a>
    <a class="js-selected-navigation-item Header-link mt-md-n3 mb-md-n3 py-2 py-md-3 mr-0 mr-md-3 border-top border-md-top-0 border-white-fade-15" data-hotkey="g i" data-ga-click="Header, click, Nav menu - item:issues context:user" aria-label="Issues you created" data-selected-links="/issues /issues/assigned /issues/mentioned /issues" href="/issues">
      Issues
</a>

      <div class="d-flex position-relative">
        <a class="js-selected-navigation-item Header-link flex-auto mt-md-n3 mb-md-n3 py-2 py-md-3 mr-0 mr-md-3 border-top border-md-top-0 border-white-fade-15" data-ga-click="Header, click, Nav menu - item:marketplace context:user" data-octo-click="marketplace_click" data-octo-dimensions="location:nav_bar" data-selected-links=" /marketplace" href="/marketplace">
          Marketplace
</a>        

      </div>

    <a class="js-selected-navigation-item Header-link mt-md-n3 mb-md-n3 py-2 py-md-3 mr-0 mr-md-3 border-top border-md-top-0 border-white-fade-15" data-ga-click="Header, click, Nav menu - item:explore" data-selected-links="/explore /trending /trending/developers /integrations /integrations/feature/code /integrations/feature/collaborate /integrations/feature/ship showcases showcases_search showcases_landing /explore" href="/explore">
      Explore
</a>


    <a class="Header-link d-block d-md-none mr-0 mr-md-3 py-2 py-md-3 border-top border-md-top-0 border-white-fade-15" href="/settings/profile">
      Settings
</a>
    <a class="Header-link d-block d-md-none mr-0 mr-md-3 py-2 py-md-3 border-top border-md-top-0 border-white-fade-15" href="/lianzhili3">
      <img class="avatar avatar-user" src="https://avatars2.githubusercontent.com/u/74900541?s=40&amp;v=4" width="20" height="20" alt="@lianzhili3">
      lianzhili3
</a>
    <!-- '"` --><!-- </textarea></xmp> --><form action="/logout" accept-charset="UTF-8" method="post"><input type="hidden" name="authenticity_token" value="EyB1SOR2ThuT/5LAiLcCG5nhP8tDewZiwBSB+Y3JD3XNb+3Wjl7SHDVXMHZw1STYMDVNzJaWfxdpcjvfoF5A4w==">
      <button type="submit" class="Header-link mr-0 mr-md-3 py-2 py-md-3 border-top border-md-top-0 border-white-fade-15 d-md-none btn-link d-block width-full text-left" data-ga-click="Header, sign out, icon:logout" style="padding-left: 2px;">
        <svg class="octicon octicon-sign-out v-align-middle" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M2 2.75C2 1.784 2.784 1 3.75 1h2.5a.75.75 0 010 1.5h-2.5a.25.25 0 00-.25.25v10.5c0 .138.112.25.25.25h2.5a.75.75 0 010 1.5h-2.5A1.75 1.75 0 012 13.25V2.75zm10.44 4.5H6.75a.75.75 0 000 1.5h5.69l-1.97 1.97a.75.75 0 101.06 1.06l3.25-3.25a.75.75 0 000-1.06l-3.25-3.25a.75.75 0 10-1.06 1.06l1.97 1.97z"></path></svg>
        Sign out
      </button>
</form></nav>

    </div>

    <div class="Header-item Header-item--full flex-justify-center d-md-none position-relative">
        <a class="Header-link " href="https://github.com/" data-hotkey="g d" aria-label="Homepage " data-ga-click="Header, go to dashboard, icon:logo">
  <svg class="octicon octicon-mark-github v-align-middle" height="32" viewBox="0 0 16 16" version="1.1" width="32" aria-hidden="true"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path></svg>
</a>

    </div>

    <div class="Header-item mr-0 mr-md-3 flex-order-1 flex-md-order-none">
        

    <notification-indicator class="js-socket-channel" data-channel="eyJjIjoibm90aWZpY2F0aW9uLWNoYW5nZWQ6NzQ5MDA1NDEiLCJ0IjoxNjA3MDY1NTE1fQ==--2552525d171c1157c1d49ec3f2345285375169cba63e500e2353de918cce1a6c" data-catalyst="">
      <a href="/notifications" class="Header-link notification-indicator position-relative tooltipped tooltipped-sw" aria-label="You have no unread notifications" data-hotkey="g n" data-ga-click="Header, go to notifications, icon:read" data-target="notification-indicator.link">
         <span class="mail-status  " data-target="notification-indicator.modifier"></span>
         <svg class="octicon octicon-bell" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path d="M8 16a2 2 0 001.985-1.75c.017-.137-.097-.25-.235-.25h-3.5c-.138 0-.252.113-.235.25A2 2 0 008 16z"></path><path fill-rule="evenodd" d="M8 1.5A3.5 3.5 0 004.5 5v2.947c0 .346-.102.683-.294.97l-1.703 2.556a.018.018 0 00-.003.01l.001.006c0 .002.002.004.004.006a.017.017 0 00.006.004l.007.001h10.964l.007-.001a.016.016 0 00.006-.004.016.016 0 00.004-.006l.001-.007a.017.017 0 00-.003-.01l-1.703-2.554a1.75 1.75 0 01-.294-.97V5A3.5 3.5 0 008 1.5zM3 5a5 5 0 0110 0v2.947c0 .05.015.098.042.139l1.703 2.555A1.518 1.518 0 0113.482 13H2.518a1.518 1.518 0 01-1.263-2.36l1.703-2.554A.25.25 0 003 7.947V5z"></path></svg>
      </a>
    </notification-indicator>

    </div>


    <div class="Header-item position-relative d-none d-md-flex">
        <details class="details-overlay details-reset">
  <summary class="Header-link" aria-label="Create new…" data-ga-click="Header, create new, icon:add" aria-haspopup="menu" role="button">
      <svg class="octicon octicon-plus" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8 2a.75.75 0 01.75.75v4.5h4.5a.75.75 0 010 1.5h-4.5v4.5a.75.75 0 01-1.5 0v-4.5h-4.5a.75.75 0 010-1.5h4.5v-4.5A.75.75 0 018 2z"></path></svg> <span class="dropdown-caret"></span>
  </summary>
  <details-menu class="dropdown-menu dropdown-menu-sw" role="menu">
    
<a role="menuitem" class="dropdown-item" href="/new" data-ga-click="Header, create new repository">
  New repository
</a>

  <a role="menuitem" class="dropdown-item" href="/new/import" data-ga-click="Header, import a repository">
    Import repository
  </a>

<a role="menuitem" class="dropdown-item" href="https://gist.github.com/" data-ga-click="Header, create new gist">
  New gist
</a>

  <a role="menuitem" class="dropdown-item" href="/organizations/new" data-ga-click="Header, create new organization">
    New organization
  </a>



  <a role="menuitem" class="dropdown-item" href="/new/project" data-ga-click="Header, create new project">
    New project
  </a>

  </details-menu>
</details>

    </div>

    <div class="Header-item position-relative mr-0 d-none d-md-flex">
        
  <details class="details-overlay details-reset js-feature-preview-indicator-container" data-feature-preview-indicator-src="/users/lianzhili3/feature_preview/indicator_check">

  <summary class="Header-link" aria-label="View profile and more" data-ga-click="Header, show menu, icon:avatar" aria-haspopup="menu" role="button">
    <img alt="@lianzhili3" width="20" height="20" src="https://avatars1.githubusercontent.com/u/74900541?s=60&amp;v=4" class="avatar avatar-user ">

      <span class="feature-preview-indicator js-feature-preview-indicator" style="top: 1px;" hidden=""></span>
    <span class="dropdown-caret"></span>
  </summary>
  <details-menu class="dropdown-menu dropdown-menu-sw" style="width: 180px" src="/users/74900541/menu" preload="" role="menu">
      <include-fragment>
        <p class="text-center mt-3" data-hide-on-error="">
          <svg viewBox="0 0 16 16" fill="none" style="box-sizing: content-box; color: var(--color-icon-primary);" width="32" height="32">
  <circle cx="8" cy="8" r="7" stroke="currentColor" stroke-opacity="0.25" stroke-width="2" vector-effect="non-scaling-stroke"></circle>
  <path d="M15 8a7.002 7.002 0 00-7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" vector-effect="non-scaling-stroke">
    <animateTransform attributeName="transform" type="rotate" from="0 8 8" to="360 8 8" dur="1s" repeatCount="indefinite"></animateTransform>
  </path>
</svg>
        </p>
        <p class="ml-1 mb-2 mt-2 text-gray-dark" data-show-on-error="">
          <svg class="octicon octicon-alert" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8.22 1.754a.25.25 0 00-.44 0L1.698 13.132a.25.25 0 00.22.368h12.164a.25.25 0 00.22-.368L8.22 1.754zm-1.763-.707c.659-1.234 2.427-1.234 3.086 0l6.082 11.378A1.75 1.75 0 0114.082 15H1.918a1.75 1.75 0 01-1.543-2.575L6.457 1.047zM9 11a1 1 0 11-2 0 1 1 0 012 0zm-.25-5.25a.75.75 0 00-1.5 0v2.5a.75.75 0 001.5 0v-2.5z"></path></svg>
          Sorry, something went wrong.
        </p>
      </include-fragment>
  </details-menu>
</details>

    </div>
</header>

              
    </div>

  <div id="start-of-content" class="show-on-focus"></div>





    <div data-pjax-replace="" id="js-flash-container">


  <template class="js-flash-template">
    <div class="flash flash-full  {{ className }}">
  <div class=" px-2">
    <button class="flash-close js-flash-close" type="button" aria-label="Dismiss this message">
      <svg class="octicon octicon-x" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z"></path></svg>
    </button>
    
      <div>{{ message }}</div>

  </div>
</div>
  </template>
</div>


    

  <include-fragment class="js-notification-shelf-include-fragment" data-base-src="https://github.com/notifications/beta/shelf"></include-fragment>




  <div class="application-main " data-commit-hovercards-enabled="" data-discussion-hovercards-enabled="" data-issue-and-pr-hovercards-enabled="">
      <main id="js-pjax-container" data-pjax-container="">

    


  <div hidden="">
    
  </div>





    <div class="container-lg px-md-2 mt-lg-4 clearfix">
    <div class="col-12 px-2 py-2 py-md-3 d-lg-none d-flex">
      <div class="d-flex flex-auto">
        <!-- '"` --><!-- </textarea></xmp> --><form class="js-site-search-form flex-auto" action="/search" accept-charset="UTF-8" method="get">
          <input aria-label="Search GitHub" autocapitalize="off" autocomplete="off" autofocus="" class="form-control input-block" name="q" placeholder="Search GitHub" spellcheck="false" type="text" value="zuoyebang language:php">
          <input type="hidden" class="js-site-search-type-field" name="type">
        </form></div>
        <button class="btn ml-2 d-none d-md-block" type="submit">Search</button>
    </div>

    <div class="col-12 col-md-3 float-left px-md-2">
      <nav class="menu border d-none d-md-block" data-pjax="">
          <a class="menu-item" href="/search?q=zuoyebang+language%3Aphp&amp;type=repositories">Repositories<span class="ml-1 mt-1 js-codesearch-count Counter" data-search-type="Repositories">0</span></a>
          <a class="menu-item selected" href="/search?q=zuoyebang+language%3Aphp&amp;type=code">Code<span class="ml-1 mt-1 js-codesearch-count Counter Counter--primary" data-search-type="Code">95+</span></a>
          <a class="menu-item" href="/search?q=zuoyebang+language%3Aphp&amp;type=commits">Commits<span class="ml-1 mt-1 js-codesearch-count Counter Counter--primary" data-search-type="Commits">52</span></a>
          <a class="menu-item" href="/search?q=zuoyebang+language%3Aphp&amp;type=issues">Issues<span class="ml-1 mt-1 js-codesearch-count Counter" data-search-type="Issues">0</span></a>
          <a class="menu-item" href="/search?q=zuoyebang+language%3Aphp&amp;type=discussions"><span>Discussions<span title="Feature Release Label: Beta" class="Label Label--outline-green Label--inline ml-2 text-normal text-gray f6 px-1">Beta</span></span><span class="ml-1 mt-1 js-codesearch-count Counter" data-search-type="Discussions">0</span></a>
          <a class="menu-item" href="/search?q=zuoyebang+language%3Aphp&amp;type=registrypackages">Packages<span class="ml-1 mt-1 js-codesearch-count Counter" data-search-type="RegistryPackages">0</span></a>
            <a class="menu-item" href="/search?q=zuoyebang+language%3Aphp&amp;type=marketplace">Marketplace<span class="ml-1 mt-1 js-codesearch-count Counter" data-search-type="Marketplace">0</span></a>
          <a class="menu-item" href="/search?q=zuoyebang+language%3Aphp&amp;type=topics">Topics<span class="ml-1 mt-1 js-codesearch-count Counter" data-search-type="Topics">0</span></a>
          <a class="menu-item" href="/search?q=zuoyebang+language%3Aphp&amp;type=wikis">Wikis<span class="ml-1 mt-1 js-codesearch-count Counter Counter--primary" data-search-type="Wikis">2</span></a>
          <a class="menu-item" href="/search?q=zuoyebang+language%3Aphp&amp;type=users">Users<span class="ml-1 mt-1 js-codesearch-count Counter" data-search-type="Users">0</span></a>
      </nav>

      <nav class="UnderlineNav UnderlineNav--full d-md-none mb-2 border-top" data-pjax="">
        <div class="UnderlineNav-container">
          <div class="UnderlineNav-body js-codesearch-nav overflow-auto">
              <a class="UnderlineNav-item flex-shrink-0" href="/search?q=zuoyebang+language%3Aphp&amp;type=repositories">Repositories<span class="ml-1 mt-1 js-codesearch-count Counter" data-search-type="Repositories">0</span></a>
              <a class="UnderlineNav-item flex-shrink-0 selected" href="/search?q=zuoyebang+language%3Aphp&amp;type=code">Code<span class="ml-1 mt-1 js-codesearch-count Counter Counter--primary" data-search-type="Code">95+</span></a>
              <a class="UnderlineNav-item flex-shrink-0" href="/search?q=zuoyebang+language%3Aphp&amp;type=commits">Commits<span class="ml-1 mt-1 js-codesearch-count Counter Counter--primary" data-search-type="Commits">52</span></a>
              <a class="UnderlineNav-item flex-shrink-0" href="/search?q=zuoyebang+language%3Aphp&amp;type=issues">Issues<span class="ml-1 mt-1 js-codesearch-count Counter" data-search-type="Issues">0</span></a>
              <a class="UnderlineNav-item flex-shrink-0" href="/search?q=zuoyebang+language%3Aphp&amp;type=discussions"><span>Discussions<span title="Feature Release Label: Beta" class="Label Label--outline-green Label--inline ml-2 text-normal text-gray f6 px-1">Beta</span></span><span class="ml-1 mt-1 js-codesearch-count Counter" data-search-type="Discussions">0</span></a>
              <a class="UnderlineNav-item flex-shrink-0" href="/search?q=zuoyebang+language%3Aphp&amp;type=registrypackages">Packages<span class="ml-1 mt-1 js-codesearch-count Counter" data-search-type="RegistryPackages">0</span></a>
                <a class="UnderlineNav-item flex-shrink-0" href="/search?q=zuoyebang+language%3Aphp&amp;type=marketplace">Marketplace<span class="ml-1 mt-1 js-codesearch-count Counter" data-search-type="Marketplace">0</span></a>
              <a class="UnderlineNav-item flex-shrink-0" href="/search?q=zuoyebang+language%3Aphp&amp;type=topics">Topics<span class="ml-1 mt-1 js-codesearch-count Counter" data-search-type="Topics">0</span></a>
              <a class="UnderlineNav-item flex-shrink-0" href="/search?q=zuoyebang+language%3Aphp&amp;type=wikis">Wikis<span class="ml-1 mt-1 js-codesearch-count Counter Counter--primary" data-search-type="Wikis">2</span></a>
              <a class="UnderlineNav-item flex-shrink-0" href="/search?q=zuoyebang+language%3Aphp&amp;type=users">Users<span class="ml-1 mt-1 js-codesearch-count Counter" data-search-type="Users">0</span></a>
          </div>
        </div>
      </nav>

        <div class="border rounded-1 p-3 mb-3 d-none d-md-block">
    <h2 class="d-inline-block f5 mb-2">
      Languages
    </h2>

    <ul class="filter-list small" data-pjax="">
        <li>
            <span class="bar" style="width: 34%;"></span>

            <a class="filter-item" href="/search?l=XML&amp;o=desc&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code">
              <span class="count">652</span>
              XML
</a>        </li>
        <li>
            <span class="bar" style="width: 16%;"></span>

            <a class="filter-item" href="/search?l=Text&amp;o=desc&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code">
              <span class="count">297</span>
              Text
</a>        </li>
        <li>
            <span class="bar" style="width: 11%;"></span>

            <a class="filter-item" href="/search?l=JSON&amp;o=desc&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code">
              <span class="count">211</span>
              JSON
</a>        </li>
        <li>
            <span class="bar" style="width: 8%;"></span>

            <a class="filter-item" href="/search?l=HTML&amp;o=desc&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code">
              <span class="count">150</span>
              HTML
</a>        </li>
        <li>
            <span class="bar" style="width: 6%;"></span>

            <a class="filter-item" href="/search?l=Java&amp;o=desc&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code">
              <span class="count">105</span>
              Java
</a>        </li>
        <li>
            <span class="bar" style="width: 5%;"></span>

            <a class="filter-item" href="/search?l=PHP&amp;o=desc&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code">
              <span class="count">95</span>
              PHP
</a>        </li>
        <li>
            <span class="bar" style="width: 5%;"></span>

            <a class="filter-item" href="/search?l=JavaScript&amp;o=desc&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code">
              <span class="count">89</span>
              JavaScript
</a>        </li>
        <li>
            <span class="bar" style="width: 3%;"></span>

            <a class="filter-item" href="/search?l=Markdown&amp;o=desc&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code">
              <span class="count">57</span>
              Markdown
</a>        </li>
        <li>
            <span class="bar" style="width: 3%;"></span>

            <a class="filter-item" href="/search?l=CSV&amp;o=desc&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code">
              <span class="count">53</span>
              CSV
</a>        </li>
        <li>
            <span class="bar" style="width: 4px;"></span>

            <a class="filter-item" href="/search?l=YAML&amp;o=desc&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code">
              <span class="count">29</span>
              YAML
</a>        </li>
    </ul>
  </div>

  <!-- Gist search is not responsive so explicitly check the page variable -->
    <div class="px-2 pt-2 d-flex d-md-none flex-items-center">
      <label for="codesearch_select_language" class="col-3 text-small px-2">Language</label>
      <select id="codesearch_select_language" class="col-9 form-select mr-2" data-pjax="">
        <option value="/search?o=desc&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code" selected="">Any</option>
          <option value="/search?l=XML&amp;o=desc&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code">XML</option>
          <option value="/search?l=Text&amp;o=desc&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code">Text</option>
          <option value="/search?l=JSON&amp;o=desc&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code">JSON</option>
          <option value="/search?l=HTML&amp;o=desc&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code">HTML</option>
          <option value="/search?l=Java&amp;o=desc&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code">Java</option>
          <option value="/search?l=PHP&amp;o=desc&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code">PHP</option>
          <option value="/search?l=JavaScript&amp;o=desc&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code">JavaScript</option>
          <option value="/search?l=Markdown&amp;o=desc&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code">Markdown</option>
          <option value="/search?l=CSV&amp;o=desc&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code">CSV</option>
          <option value="/search?l=YAML&amp;o=desc&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code">YAML</option>
      </select>
    </div>


<!-- Put sort options in filter area on small screens  -->
  <div class="px-2 pt-2 d-flex d-md-none flex-items-center">
    <label for="codesearch_sort_code" class="col-3 text-small px-2">Sort</label>
    <select id="codesearch_sort_code" class="col-9 form-select mr-2" data-pjax="">
          <option value="/search?o=desc&amp;q=zuoyebang+language%3Aphp&amp;s=&amp;type=Code">Best match</option>
          <option value="/search?o=desc&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code" selected="">Recently indexed</option>
          <option value="/search?o=asc&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code">Least recently indexed</option>
    </select>
  </div>


      <div class="mt-3 d-none d-md-block">
        <a href="/search/advanced?q=zuoyebang+language%3Aphp&amp;type=Code" class="f6">Advanced search</a>
        <details class="details-reset details-overlay details-overlay-dark d-inline-block">
          <summary class="btn-link f6 ml-3" role="button">Cheat sheet</summary>
          <details-dialog class="anim-fade-in fast Box Box--overlay Box-overlay--wide d-flex flex-column" role="dialog" aria-modal="true">
  <div class="Box-header">
    <button class="Box-btn-octicon btn-octicon float-right" type="button" aria-label="Close dialog" data-close-dialog="">
      <svg class="octicon octicon-x" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z"></path></svg>
    </button>
    <h3 class="Box-title">Search cheat sheet</h3>
  </div>

  <div class="Box-body overflow-auto markdown-body">
    <p>GitHub’s search supports a variety of different operations. Here’s a quick cheat sheet for some of the common searches.</p>
    <p>For more information, visit our <a href="https://docs.github.com/articles/about-searching-on-github/">search help section</a>.</p>

    <h2>Basic search</h2>
    <table>
      <thead>
        <tr>
          <th>This search</th>
          <th>Finds repositories with…</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>cat stars:&gt;100</td>
          <td>Find cat repositories with greater than 100 stars.</td>
        </tr>
        <tr>
          <td>user:defunkt</td>
          <td>Get all repositories from the user defunkt.</td>
        </tr>
        <tr>
          <td>tom location:"San Francisco, CA"</td>
          <td>Find all tom users in "San Francisco, CA".</td>
        </tr>
        <tr>
          <td>join extension:coffee</td>
          <td>Find all instances of join in code with coffee extension.</td>
        </tr>
        <tr>
          <td>NOT cat</td>
          <td>Excludes all results containing cat.</td>
        </tr>
      </tbody>
    </table>

    <hr>

    <h2>Repository search
      <a href="https://docs.github.com/articles/searching-repositories"><svg aria-label="Help" class="octicon octicon-link-external" viewBox="0 0 16 16" version="1.1" width="16" height="16" role="img"><path fill-rule="evenodd" d="M10.604 1h4.146a.25.25 0 01.25.25v4.146a.25.25 0 01-.427.177L13.03 4.03 9.28 7.78a.75.75 0 01-1.06-1.06l3.75-3.75-1.543-1.543A.25.25 0 0110.604 1zM3.75 2A1.75 1.75 0 002 3.75v8.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 12.25v-3.5a.75.75 0 00-1.5 0v3.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-8.5a.25.25 0 01.25-.25h3.5a.75.75 0 000-1.5h-3.5z"></path></svg></a>
    </h2>
    <p>Repository search looks through the projects you have access to on GitHub. You can also filter the results:</p>
    <table>
      <thead>
        <tr>
          <th>This search</th>
          <th>Finds repositories with…</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>cat stars:&gt;100</td>
          <td>Find cat repositories with greater than 100 stars.</td>
        </tr>
        <tr>
          <td>user:defunkt</td>
          <td>Get all repositories from the user defunkt.</td>
        </tr>
        <tr>
          <td>pugs pushed:&gt;2013-01-28</td>
          <td>Pugs repositories pushed to since Jan 28, 2013.</td>
        </tr>
        <tr>
          <td>node.js forks:&lt;200</td>
          <td>Find all node.js repositories with less than 200 forks.</td>
        </tr>
        <tr>
          <td>jquery size:1024..4089</td>
          <td>Find jquery repositories between the sizes 1024 and 4089 kB.</td>
        </tr>
        <tr>
          <td>gitx fork:true</td>
          <td>Repository search includes forks of gitx.</td>
        </tr>
        <tr>
          <td>gitx fork:only</td>
          <td>Repository search returns only forks of gitx.</td>
        </tr>
      </tbody>
    </table>

    <hr>

    <h2>Code search
      <a href="https://docs.github.com/articles/searching-code"><svg aria-label="Help" class="octicon octicon-link-external" viewBox="0 0 16 16" version="1.1" width="16" height="16" role="img"><path fill-rule="evenodd" d="M10.604 1h4.146a.25.25 0 01.25.25v4.146a.25.25 0 01-.427.177L13.03 4.03 9.28 7.78a.75.75 0 01-1.06-1.06l3.75-3.75-1.543-1.543A.25.25 0 0110.604 1zM3.75 2A1.75 1.75 0 002 3.75v8.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 12.25v-3.5a.75.75 0 00-1.5 0v3.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-8.5a.25.25 0 01.25-.25h3.5a.75.75 0 000-1.5h-3.5z"></path></svg></a>
    </h2>
    <p>Code search looks through the files hosted on GitHub. You can also filter the results:</p>
    <table>
      <thead>
        <tr>
          <th>This search</th>
          <th>Finds repositories with…</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>install repo:charles/privaterepo</td>
          <td>Find all instances of install in code from the repository charles/privaterepo.</td>
        </tr>
        <tr>
          <td>shogun user:heroku</td>
          <td>Find references to shogun from all public heroku repositories.</td>
        </tr>
        <tr>
          <td>join extension:coffee</td>
          <td>Find all instances of join in code with coffee extension.</td>
        </tr>
        <tr>
          <td>system size:&gt;1000</td>
          <td>Find all instances of system in code of file size greater than 1000kbs.</td>
        </tr>
        <tr>
          <td>examples path:/docs/</td>
          <td>Find all examples in the path /docs/.</td>
        </tr>
        <tr>
          <td>replace fork:true</td>
          <td>Search replace in the source code of forks.</td>
        </tr>
      </tbody>
    </table>

    <hr>

    <h2>Issue search
      <a href="https://docs.github.com/articles/searching-issues"><svg aria-label="Help" class="octicon octicon-link-external" viewBox="0 0 16 16" version="1.1" width="16" height="16" role="img"><path fill-rule="evenodd" d="M10.604 1h4.146a.25.25 0 01.25.25v4.146a.25.25 0 01-.427.177L13.03 4.03 9.28 7.78a.75.75 0 01-1.06-1.06l3.75-3.75-1.543-1.543A.25.25 0 0110.604 1zM3.75 2A1.75 1.75 0 002 3.75v8.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 12.25v-3.5a.75.75 0 00-1.5 0v3.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-8.5a.25.25 0 01.25-.25h3.5a.75.75 0 000-1.5h-3.5z"></path></svg></a>
    </h2>
    <p>Issue search looks through issues and pull requests on GitHub. You can also filter the results:</p>
    <table>
      <thead>
        <tr>
          <th>This search</th>
          <th>Finds issues…</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>encoding user:heroku</td>
          <td>Encoding issues across the Heroku organization.</td>
        </tr>
        <tr>
          <td>cat is:open</td>
          <td>Find cat issues that are open.</td>
        </tr>
        <tr>
          <td>strange comments:&gt;42</td>
          <td>Issues with more than 42 comments.</td>
        </tr>
        <tr>
          <td>hard label:bug</td>
          <td>Hard issues labeled as a bug.</td>
        </tr>
        <tr>
          <td>author:mojombo</td>
          <td>All issues authored by mojombo.</td>
        </tr>
        <tr>
          <td>mentions:tpope</td>
          <td>All issues mentioning tpope.</td>
        </tr>
        <tr>
          <td>assignee:rtomayko</td>
          <td>All issues assigned to rtomayko.</td>
        </tr>
        <tr>
          <td>exception created:&gt;2012-12-31</td>
          <td>Created since the beginning of 2013.</td>
        </tr>
        <tr>
          <td>exception updated:&lt;2013-01-01</td>
          <td>Last updated before 2013.</td>
        </tr>
      </tbody>
    </table>

    <hr>

    <h2>User search
      <a href="https://docs.github.com/articles/searching-users"><svg aria-label="Help" class="octicon octicon-link-external" viewBox="0 0 16 16" version="1.1" width="16" height="16" role="img"><path fill-rule="evenodd" d="M10.604 1h4.146a.25.25 0 01.25.25v4.146a.25.25 0 01-.427.177L13.03 4.03 9.28 7.78a.75.75 0 01-1.06-1.06l3.75-3.75-1.543-1.543A.25.25 0 0110.604 1zM3.75 2A1.75 1.75 0 002 3.75v8.5c0 .966.784 1.75 1.75 1.75h8.5A1.75 1.75 0 0014 12.25v-3.5a.75.75 0 00-1.5 0v3.5a.25.25 0 01-.25.25h-8.5a.25.25 0 01-.25-.25v-8.5a.25.25 0 01.25-.25h3.5a.75.75 0 000-1.5h-3.5z"></path></svg></a>
    </h2>
    <p>User search finds users with an account on GitHub. You can also filter the results:</p>
    <table>
      <thead>
        <tr>
          <th>This search</th>
          <th>Finds repositories with…</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>fullname:"Linus Torvalds"</td>
          <td>Find users with the full name "Linus Torvalds".</td>
        </tr>
        <tr>
          <td>tom location:"San Francisco, CA"</td>
          <td>Find all tom users in "San Francisco, CA".</td>
        </tr>
        <tr>
          <td>chris followers:100..200</td>
          <td>Find all chris users with followers between 100 and 200.</td>
        </tr>
        <tr>
          <td>ryan repos:&gt;10</td>
          <td>Find all ryan users with more than 10 repositories.</td>
        </tr>
      </tbody>
    </table>
  </div>
</details-dialog>

        </details>
      </div>
    </div>

    <div class="col-12 col-md-9 float-left px-2 pt-3 pt-md-0 codesearch-results">
      <div class="px-2">

        
  <div class="d-flex flex-column flex-md-row flex-justify-between border-bottom pb-3 position-relative">
    <h3>
    <span class="v-align-middle">
      Showing 95 available
      code results
    </span>
    <a href="https://docs.github.com/articles/searching-github#potential-timeouts" class="help tooltipped tooltipped-e" aria-label="This search took too long to finish; some results may not be shown."><svg class="octicon octicon-question muted-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8zm9 3a1 1 0 11-2 0 1 1 0 012 0zM6.92 6.085c.081-.16.19-.299.34-.398.145-.097.371-.187.74-.187.28 0 .553.087.738.225A.613.613 0 019 6.25c0 .177-.04.264-.077.318a.956.956 0 01-.277.245c-.076.051-.158.1-.258.161l-.007.004a7.728 7.728 0 00-.313.195 2.416 2.416 0 00-.692.661.75.75 0 001.248.832.956.956 0 01.276-.245 6.3 6.3 0 01.26-.16l.006-.004c.093-.057.204-.123.313-.195.222-.149.487-.355.692-.662.214-.32.329-.702.329-1.15 0-.76-.36-1.348-.863-1.725A2.76 2.76 0 008 4c-.631 0-1.155.16-1.572.438-.413.276-.68.638-.849.977a.75.75 0 101.342.67z"></path></svg></a>


</h3>

      <details class="d-none d-md-block mt-2 mt-sm-0 details-reset details-overlay select-menu">
        <summary class="btn btn-sm select-menu-button" aria-haspopup="menu" role="button">
          <i>Sort:</i>
          <span data-menu-button="">Recently indexed</span>
        </summary>
        <details-menu class="select-menu-modal position-absolute right-0" style="z-index: 99;" aria-label="Sort options" role="menu">
          <div class="select-menu-header" tabindex="-1">
            <span class="select-menu-title">Sort options</span>
          </div>
          <div class="select-menu-list">
                <a class="select-menu-item" role="menuitemradio" aria-checked="false" data-pjax="true" data-pjax-preserve-scroll="true" href="/search?o=desc&amp;q=zuoyebang+language%3Aphp&amp;s=&amp;type=Code">
                  <svg class="octicon octicon-check select-menu-item-icon" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path></svg>
                  <span class="select-menu-item-text" data-menu-button-text="">Best match</span>
</a>                <a class="select-menu-item" role="menuitemradio" aria-checked="true" data-pjax="true" data-pjax-preserve-scroll="true" href="/search?o=desc&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code">
                  <svg class="octicon octicon-check select-menu-item-icon" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path></svg>
                  <span class="select-menu-item-text" data-menu-button-text="">Recently indexed</span>
</a>                <a class="select-menu-item" role="menuitemradio" aria-checked="false" data-pjax="true" data-pjax-preserve-scroll="true" href="/search?o=asc&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code">
                  <svg class="octicon octicon-check select-menu-item-icon" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z"></path></svg>
                  <span class="select-menu-item-text" data-menu-button-text="">Least recently indexed</span>
</a>          </div>
        </details-menu>
      </details>
  </div>

        
  <div id="code_search_results">
    <div class="code-list">
        
<div class="hx_hit-code code-list-item d-flex py-4 code-list-item-public ">
    <img class="rounded-1 v-align-middle flex-shrink-0 mr-1" src="https://avatars2.githubusercontent.com/u/58900766?s=40&amp;v=4" width="20" height="20" alt="@privacy-protection-tools">

  <div class="width-full">
      <div class="flex-shrink-0 text-small text-bold">
        <a class="link-gray" href="/privacy-protection-tools/dead-horse">
          privacy-protection-tools/dead-horse
</a>      </div>

    <div class="f4 text-normal">
      <a title="scripts/white_domain_list.php" data-hydro-click="{&quot;event_type&quot;:&quot;search_result.click&quot;,&quot;payload&quot;:{&quot;page_number&quot;:1,&quot;per_page&quot;:10,&quot;query&quot;:&quot;zuoyebang language:php&quot;,&quot;result_position&quot;:1,&quot;click_id&quot;:243743955,&quot;result&quot;:{&quot;id&quot;:243743955,&quot;global_relay_id&quot;:&quot;MDEwOlJlcG9zaXRvcnkyNDM3NDM5NTU=&quot;,&quot;model_name&quot;:&quot;Repository&quot;,&quot;url&quot;:&quot;https://github.com/privacy-protection-tools/dead-horse/blob/cfab0ed540e828569758b13eadf599f65088c80a/scripts/white_domain_list.php&quot;},&quot;originating_url&quot;:&quot;https://github.com/search?o=desc&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code&amp;_pjax=%23js-pjax-container&quot;,&quot;user_id&quot;:74900541}}" data-hydro-click-hmac="6f0de34967f4b1d48c03138abdc412de003c20dc6b0cabf1f483081da12c2051" href="/privacy-protection-tools/dead-horse/blob/cfab0ed540e828569758b13eadf599f65088c80a/scripts/white_domain_list.php">scripts/white_domain_list.php</a>
    </div>

      <div class="file-box blob-wrapper my-1">
        <table class="highlight">
            <tbody><tr>
    <td class="blob-num">
      <a href="/privacy-protection-tools/dead-horse/blob/cfab0ed540e828569758b13eadf599f65088c80a/scripts/white_domain_list.php#L112">112</a>
    </td>
    <td class="blob-code blob-code-inner">    <span class="pl-s">'msg.video.qiyi.com'</span> =&gt; <span class="pl-c1">0</span>, <span class="pl-c">// #93</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/privacy-protection-tools/dead-horse/blob/cfab0ed540e828569758b13eadf599f65088c80a/scripts/white_domain_list.php#L113">113</a>
    </td>
    <td class="blob-code blob-code-inner">    <span class="pl-s">'img.<span class="text-bold bg-yellow-light rounded-1 d-inline-block">zuoyebang</span>.cc'</span> =&gt; <span class="pl-c1">0</span>, <span class="pl-c">// 作业帮拍照搜题</span></td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/privacy-protection-tools/dead-horse/blob/cfab0ed540e828569758b13eadf599f65088c80a/scripts/white_domain_list.php#L114">114</a>
    </td>
    <td class="blob-code blob-code-inner">    <span class="pl-s">'data.video.iqiyi.com'</span> =&gt; <span class="pl-c1">0</span>, <span class="pl-c">// 爱奇艺电视投屏</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/privacy-protection-tools/dead-horse/blob/cfab0ed540e828569758b13eadf599f65088c80a/scripts/white_domain_list.php#L115">115</a>
    </td>
    <td class="blob-code blob-code-inner">    <span class="pl-s">'cp81.ott.cibntv.net'</span> =&gt; <span class="pl-c1">0</span>, <span class="pl-c">// CIBN云视听异常 #107</span>
</td>
  </tr>

        </tbody></table>
      </div>

    <div class="d-flex flex-wrap text-small text-gray">
         <div class="mr-3">
           <span class="">
  <span class="repo-language-color" style="background-color: #4F5D95"></span>
  <span itemprop="programmingLanguage">PHP</span>
</span>

         </div>

        <span class="match-count mr-3">
          Showing the top match
        </span>

      <span class="updated-at mr-3">
        Last indexed <relative-time datetime="2020-11-25T01:38:39Z" class="no-wrap" title="2020年11月25日 GMT+8 上午9:38">9 days ago</relative-time>
      </span>
    </div>

  </div>
</div>

        
<div class="hx_hit-code code-list-item d-flex py-4 code-list-item-public ">
    <img class="rounded-1 v-align-middle flex-shrink-0 mr-1" src="https://avatars2.githubusercontent.com/u/58900766?s=40&amp;v=4" width="20" height="20" alt="@privacy-protection-tools">

  <div class="width-full">
      <div class="flex-shrink-0 text-small text-bold">
        <a class="link-gray" href="/privacy-protection-tools/anti-AD">
          privacy-protection-tools/anti-AD
</a>      </div>

    <div class="f4 text-normal">
      <a title="scripts/lib/white_domain_list.php" data-hydro-click="{&quot;event_type&quot;:&quot;search_result.click&quot;,&quot;payload&quot;:{&quot;page_number&quot;:1,&quot;per_page&quot;:10,&quot;query&quot;:&quot;zuoyebang language:php&quot;,&quot;result_position&quot;:2,&quot;click_id&quot;:44733816,&quot;result&quot;:{&quot;id&quot;:44733816,&quot;global_relay_id&quot;:&quot;MDEwOlJlcG9zaXRvcnk0NDczMzgxNg==&quot;,&quot;model_name&quot;:&quot;Repository&quot;,&quot;url&quot;:&quot;https://github.com/privacy-protection-tools/anti-AD/blob/91f78d6bc22fc50b8df0be9bd6b98745438d9791/scripts/lib/white_domain_list.php&quot;},&quot;originating_url&quot;:&quot;https://github.com/search?o=desc&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code&amp;_pjax=%23js-pjax-container&quot;,&quot;user_id&quot;:74900541}}" data-hydro-click-hmac="c16b1b886671284bc732dea34741efbd02e6c53f8b0af804a99c6f8379c69fd9" href="/privacy-protection-tools/anti-AD/blob/91f78d6bc22fc50b8df0be9bd6b98745438d9791/scripts/lib/white_domain_list.php">scripts/lib/white_domain_list.php</a>
    </div>

      <div class="file-box blob-wrapper my-1">
        <table class="highlight">
            <tbody><tr>
    <td class="blob-num">
      <a href="/privacy-protection-tools/anti-AD/blob/91f78d6bc22fc50b8df0be9bd6b98745438d9791/scripts/lib/white_domain_list.php#L112">112</a>
    </td>
    <td class="blob-code blob-code-inner">    <span class="pl-s">'msg.video.qiyi.com'</span> =&gt; <span class="pl-c1">0</span>, <span class="pl-c">// #93</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/privacy-protection-tools/anti-AD/blob/91f78d6bc22fc50b8df0be9bd6b98745438d9791/scripts/lib/white_domain_list.php#L113">113</a>
    </td>
    <td class="blob-code blob-code-inner">    <span class="pl-s">'img.<span class="text-bold bg-yellow-light rounded-1 d-inline-block">zuoyebang</span>.cc'</span> =&gt; <span class="pl-c1">0</span>, <span class="pl-c">// 作业帮拍照搜题</span></td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/privacy-protection-tools/anti-AD/blob/91f78d6bc22fc50b8df0be9bd6b98745438d9791/scripts/lib/white_domain_list.php#L114">114</a>
    </td>
    <td class="blob-code blob-code-inner">    <span class="pl-s">'data.video.iqiyi.com'</span> =&gt; <span class="pl-c1">0</span>, <span class="pl-c">// 爱奇艺电视投屏</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/privacy-protection-tools/anti-AD/blob/91f78d6bc22fc50b8df0be9bd6b98745438d9791/scripts/lib/white_domain_list.php#L115">115</a>
    </td>
    <td class="blob-code blob-code-inner">    <span class="pl-s">'cp81.ott.cibntv.net'</span> =&gt; <span class="pl-c1">0</span>, <span class="pl-c">// CIBN云视听异常 #107</span>
</td>
  </tr>

        </tbody></table>
      </div>

    <div class="d-flex flex-wrap text-small text-gray">
         <div class="mr-3">
           <span class="">
  <span class="repo-language-color" style="background-color: #4F5D95"></span>
  <span itemprop="programmingLanguage">PHP</span>
</span>

         </div>

        <span class="match-count mr-3">
          Showing the top match
        </span>

      <span class="updated-at mr-3">
        Last indexed <relative-time datetime="2020-11-23T11:21:58Z" class="no-wrap" title="2020年11月23日 GMT+8 下午7:21">11 days ago</relative-time>
      </span>
    </div>

  </div>
</div>

        
<div class="hx_hit-code code-list-item d-flex py-4 code-list-item-public ">
    <img class="rounded-1 v-align-middle flex-shrink-0 mr-1 avatar-user" src="https://avatars3.githubusercontent.com/u/19368219?s=40&amp;v=4" width="20" height="20" alt="@RodmanWang">

  <div class="width-full">
      <div class="flex-shrink-0 text-small text-bold">
        <a class="link-gray" href="/RodmanWang/ad">
          RodmanWang/ad
</a>      </div>

    <div class="f4 text-normal">
      <a title="scripts/lib/white_domain_list.php" data-hydro-click="{&quot;event_type&quot;:&quot;search_result.click&quot;,&quot;payload&quot;:{&quot;page_number&quot;:1,&quot;per_page&quot;:10,&quot;query&quot;:&quot;zuoyebang language:php&quot;,&quot;result_position&quot;:3,&quot;click_id&quot;:243806447,&quot;result&quot;:{&quot;id&quot;:243806447,&quot;global_relay_id&quot;:&quot;MDEwOlJlcG9zaXRvcnkyNDM4MDY0NDc=&quot;,&quot;model_name&quot;:&quot;Repository&quot;,&quot;url&quot;:&quot;https://github.com/RodmanWang/ad/blob/99ca6c8eee2ab50853da4739303121c8a720d95d/scripts/lib/white_domain_list.php&quot;},&quot;originating_url&quot;:&quot;https://github.com/search?o=desc&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code&amp;_pjax=%23js-pjax-container&quot;,&quot;user_id&quot;:74900541}}" data-hydro-click-hmac="c32cec28816c0ab7ac3520747586c1d2deb59ff95fbef67774782ee23219787b" href="/RodmanWang/ad/blob/99ca6c8eee2ab50853da4739303121c8a720d95d/scripts/lib/white_domain_list.php">scripts/lib/white_domain_list.php</a>
    </div>

      <div class="file-box blob-wrapper my-1">
        <table class="highlight">
            <tbody><tr>
    <td class="blob-num">
      <a href="/RodmanWang/ad/blob/99ca6c8eee2ab50853da4739303121c8a720d95d/scripts/lib/white_domain_list.php#L112">112</a>
    </td>
    <td class="blob-code blob-code-inner">    <span class="pl-s">'msg.video.qiyi.com'</span> =&gt; <span class="pl-c1">0</span>, <span class="pl-c">// #93</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/RodmanWang/ad/blob/99ca6c8eee2ab50853da4739303121c8a720d95d/scripts/lib/white_domain_list.php#L113">113</a>
    </td>
    <td class="blob-code blob-code-inner">    <span class="pl-s">'img.<span class="text-bold bg-yellow-light rounded-1 d-inline-block">zuoyebang</span>.cc'</span> =&gt; <span class="pl-c1">0</span>, <span class="pl-c">// 作业帮拍照搜题</span></td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/RodmanWang/ad/blob/99ca6c8eee2ab50853da4739303121c8a720d95d/scripts/lib/white_domain_list.php#L114">114</a>
    </td>
    <td class="blob-code blob-code-inner">    <span class="pl-s">'data.video.iqiyi.com'</span> =&gt; <span class="pl-c1">0</span>, <span class="pl-c">// 爱奇艺电视投屏</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/RodmanWang/ad/blob/99ca6c8eee2ab50853da4739303121c8a720d95d/scripts/lib/white_domain_list.php#L115">115</a>
    </td>
    <td class="blob-code blob-code-inner">    <span class="pl-s">'cp81.ott.cibntv.net'</span> =&gt; <span class="pl-c1">0</span>, <span class="pl-c">// CIBN云视听异常 #107</span>
</td>
  </tr>

        </tbody></table>
      </div>

    <div class="d-flex flex-wrap text-small text-gray">
         <div class="mr-3">
           <span class="">
  <span class="repo-language-color" style="background-color: #4F5D95"></span>
  <span itemprop="programmingLanguage">PHP</span>
</span>

         </div>

        <span class="match-count mr-3">
          Showing the top match
        </span>

      <span class="updated-at mr-3">
        Last indexed <relative-time datetime="2020-11-08T05:26:47Z" class="no-wrap" title="2020年11月8日 GMT+8 下午1:26">26 days ago</relative-time>
      </span>
    </div>

  </div>
</div>

        
<div class="hx_hit-code code-list-item d-flex py-4 code-list-item-public ">
    <img class="rounded-1 v-align-middle flex-shrink-0 mr-1 avatar-user" src="https://avatars3.githubusercontent.com/u/2375601?s=40&amp;v=4" width="20" height="20" alt="@fantasyczl">

  <div class="width-full">
      <div class="flex-shrink-0 text-small text-bold">
        <a class="link-gray" href="/fantasyczl/workflow">
          fantasyczl/workflow
</a>      </div>

    <div class="f4 text-normal">
      <a title="app/Utils/DateTime.php" data-hydro-click="{&quot;event_type&quot;:&quot;search_result.click&quot;,&quot;payload&quot;:{&quot;page_number&quot;:1,&quot;per_page&quot;:10,&quot;query&quot;:&quot;zuoyebang language:php&quot;,&quot;result_position&quot;:4,&quot;click_id&quot;:129585273,&quot;result&quot;:{&quot;id&quot;:129585273,&quot;global_relay_id&quot;:&quot;MDEwOlJlcG9zaXRvcnkxMjk1ODUyNzM=&quot;,&quot;model_name&quot;:&quot;Repository&quot;,&quot;url&quot;:&quot;https://github.com/fantasyczl/workflow/blob/9b1937e3efd7308c44970762fa5721822c980ebd/app/Utils/DateTime.php&quot;},&quot;originating_url&quot;:&quot;https://github.com/search?o=desc&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code&amp;_pjax=%23js-pjax-container&quot;,&quot;user_id&quot;:74900541}}" data-hydro-click-hmac="3caf51d1cca9834e027332ecb2fb5cd139abf750f4ea7f0df7d6c6ec1961b577" href="/fantasyczl/workflow/blob/9b1937e3efd7308c44970762fa5721822c980ebd/app/Utils/DateTime.php">app/Utils/DateTime.php</a>
    </div>

      <div class="file-box blob-wrapper my-1">
        <table class="highlight">
            <tbody><tr>
    <td class="blob-num">
      <a href="/fantasyczl/workflow/blob/9b1937e3efd7308c44970762fa5721822c980ebd/app/Utils/DateTime.php#L1">1</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-ent">&lt;?php</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/fantasyczl/workflow/blob/9b1937e3efd7308c44970762fa5721822c980ebd/app/Utils/DateTime.php#L2">2</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-k">namespace</span> <span class="pl-v">App</span>\<span class="pl-v">Utils</span>;
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/fantasyczl/workflow/blob/9b1937e3efd7308c44970762fa5721822c980ebd/app/Utils/DateTime.php#L3">3</a>
    </td>
    <td class="blob-code blob-code-inner">
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/fantasyczl/workflow/blob/9b1937e3efd7308c44970762fa5721822c980ebd/app/Utils/DateTime.php#L4">4</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c">/**</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/fantasyczl/workflow/blob/9b1937e3efd7308c44970762fa5721822c980ebd/app/Utils/DateTime.php#L5">5</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c"> * @author      : caozilong@<span class="text-bold bg-yellow-light rounded-1 d-inline-block">zuoyebang</span>.com</span></td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/fantasyczl/workflow/blob/9b1937e3efd7308c44970762fa5721822c980ebd/app/Utils/DateTime.php#L6">6</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c"> * @date        : 2020-10-13 11:18</span>
</td>
  </tr>

        </tbody></table>
      </div>

    <div class="d-flex flex-wrap text-small text-gray">
         <div class="mr-3">
           <span class="">
  <span class="repo-language-color" style="background-color: #4F5D95"></span>
  <span itemprop="programmingLanguage">PHP</span>
</span>

         </div>

        <span class="match-count mr-3">
          Showing the top match
        </span>

      <span class="updated-at mr-3">
        Last indexed <relative-time datetime="2020-10-13T03:24:07Z" class="no-wrap" title="2020年10月13日 GMT+8 上午11:24">on 13 Oct</relative-time>
      </span>
    </div>

  </div>
</div>

        
<div class="hx_hit-code code-list-item d-flex py-4 code-list-item-public ">
    <img class="rounded-1 v-align-middle flex-shrink-0 mr-1 avatar-user" src="https://avatars1.githubusercontent.com/u/14258709?s=40&amp;v=4" width="20" height="20" alt="@aquarkgn">

  <div class="width-full">
      <div class="flex-shrink-0 text-small text-bold">
        <a class="link-gray" href="/aquarkgn/program-studynotes">
          aquarkgn/program-studynotes
</a>      </div>

    <div class="f4 text-normal">
      <a title="Php/script/funcion.php" data-hydro-click="{&quot;event_type&quot;:&quot;search_result.click&quot;,&quot;payload&quot;:{&quot;page_number&quot;:1,&quot;per_page&quot;:10,&quot;query&quot;:&quot;zuoyebang language:php&quot;,&quot;result_position&quot;:5,&quot;click_id&quot;:177926717,&quot;result&quot;:{&quot;id&quot;:177926717,&quot;global_relay_id&quot;:&quot;MDEwOlJlcG9zaXRvcnkxNzc5MjY3MTc=&quot;,&quot;model_name&quot;:&quot;Repository&quot;,&quot;url&quot;:&quot;https://github.com/aquarkgn/program-studynotes/blob/65447b173d7872342cbeda147db5a12edfadf30e/Php/script/funcion.php&quot;},&quot;originating_url&quot;:&quot;https://github.com/search?o=desc&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code&amp;_pjax=%23js-pjax-container&quot;,&quot;user_id&quot;:74900541}}" data-hydro-click-hmac="819cb51a2f493829432d64a831da73d06ade26e29b9c7b5981e848ef6168ebff" href="/aquarkgn/program-studynotes/blob/65447b173d7872342cbeda147db5a12edfadf30e/Php/script/funcion.php">Php/script/funcion.php</a>
    </div>

      <div class="file-box blob-wrapper my-1">
        <table class="highlight">
            <tbody><tr>
    <td class="blob-num">
      <a href="/aquarkgn/program-studynotes/blob/65447b173d7872342cbeda147db5a12edfadf30e/Php/script/funcion.php#L23">23</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c">	 * @param $arr</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/aquarkgn/program-studynotes/blob/65447b173d7872342cbeda147db5a12edfadf30e/Php/script/funcion.php#L24">24</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c">	 * @return array</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/aquarkgn/program-studynotes/blob/65447b173d7872342cbeda147db5a12edfadf30e/Php/script/funcion.php#L25">25</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c">	 * @author zhangxianbiao@<span class="text-bold bg-yellow-light rounded-1 d-inline-block">zuoyebang</span>.com</span></td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/aquarkgn/program-studynotes/blob/65447b173d7872342cbeda147db5a12edfadf30e/Php/script/funcion.php#L26">26</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c">	 * Notes:数组排序</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/aquarkgn/program-studynotes/blob/65447b173d7872342cbeda147db5a12edfadf30e/Php/script/funcion.php#L27">27</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c">	 */</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/aquarkgn/program-studynotes/blob/65447b173d7872342cbeda147db5a12edfadf30e/Php/script/funcion.php#L28">28</a>
    </td>
    <td class="blob-code blob-code-inner">	<span class="pl-k">protected</span> <span class="pl-k">function</span> <span class="pl-en">sortName</span>(<span class="pl-s1"><span class="pl-c1">$</span>arr</span>) {
</td>
  </tr>
<tr class="divider">
  <td class="blob-num">…</td>
  <td class="blob-code"></td>
</tr>
  <tr>
    <td class="blob-num">
      <a href="/aquarkgn/program-studynotes/blob/65447b173d7872342cbeda147db5a12edfadf30e/Php/script/funcion.php#L54">54</a>
    </td>
    <td class="blob-code blob-code-inner">		<span class="pl-k">return</span> <span class="pl-s1"><span class="pl-c1">$</span>ret</span>;
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/aquarkgn/program-studynotes/blob/65447b173d7872342cbeda147db5a12edfadf30e/Php/script/funcion.php#L55">55</a>
    </td>
    <td class="blob-code blob-code-inner">	}
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/aquarkgn/program-studynotes/blob/65447b173d7872342cbeda147db5a12edfadf30e/Php/script/funcion.php#L56">56</a>
    </td>
    <td class="blob-code blob-code-inner">	
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/aquarkgn/program-studynotes/blob/65447b173d7872342cbeda147db5a12edfadf30e/Php/script/funcion.php#L57">57</a>
    </td>
    <td class="blob-code blob-code-inner">	<span class="pl-c">/**</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/aquarkgn/program-studynotes/blob/65447b173d7872342cbeda147db5a12edfadf30e/Php/script/funcion.php#L58">58</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c">	 * @param $arr</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/aquarkgn/program-studynotes/blob/65447b173d7872342cbeda147db5a12edfadf30e/Php/script/funcion.php#L59">59</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c">	 * @return array</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/aquarkgn/program-studynotes/blob/65447b173d7872342cbeda147db5a12edfadf30e/Php/script/funcion.php#L60">60</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c">	 * @author zhangxianbiao@<span class="text-bold bg-yellow-light rounded-1 d-inline-block">zuoyebang</span>.com</span></td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/aquarkgn/program-studynotes/blob/65447b173d7872342cbeda147db5a12edfadf30e/Php/script/funcion.php#L61">61</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c">	 * Notes:根据首字母分词</span>
</td>
  </tr>

        </tbody></table>
      </div>

    <div class="d-flex flex-wrap text-small text-gray">
         <div class="mr-3">
           <span class="">
  <span class="repo-language-color" style="background-color: #4F5D95"></span>
  <span itemprop="programmingLanguage">PHP</span>
</span>

         </div>

        <span class="match-count mr-3">
          Showing the top two matches
        </span>

      <span class="updated-at mr-3">
        Last indexed <relative-time datetime="2020-01-08T08:21:40Z" class="no-wrap" title="2020年1月8日 GMT+8 下午4:21">on 8 Jan</relative-time>
      </span>
    </div>

  </div>
</div>

        
<div class="hx_hit-code code-list-item d-flex py-4 code-list-item-public ">
    <img class="rounded-1 v-align-middle flex-shrink-0 mr-1 avatar-user" src="https://avatars1.githubusercontent.com/u/14258709?s=40&amp;v=4" width="20" height="20" alt="@aquarkgn">

  <div class="width-full">
      <div class="flex-shrink-0 text-small text-bold">
        <a class="link-gray" href="/aquarkgn/program-studynotes">
          aquarkgn/program-studynotes
</a>      </div>

    <div class="f4 text-normal">
      <a title="Php/script/HashMap.php" data-hydro-click="{&quot;event_type&quot;:&quot;search_result.click&quot;,&quot;payload&quot;:{&quot;page_number&quot;:1,&quot;per_page&quot;:10,&quot;query&quot;:&quot;zuoyebang language:php&quot;,&quot;result_position&quot;:6,&quot;click_id&quot;:177926717,&quot;result&quot;:{&quot;id&quot;:177926717,&quot;global_relay_id&quot;:&quot;MDEwOlJlcG9zaXRvcnkxNzc5MjY3MTc=&quot;,&quot;model_name&quot;:&quot;Repository&quot;,&quot;url&quot;:&quot;https://github.com/aquarkgn/program-studynotes/blob/65447b173d7872342cbeda147db5a12edfadf30e/Php/script/HashMap.php&quot;},&quot;originating_url&quot;:&quot;https://github.com/search?o=desc&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code&amp;_pjax=%23js-pjax-container&quot;,&quot;user_id&quot;:74900541}}" data-hydro-click-hmac="03ecee8895676bd9794b7a0b8af555515771031ece0136423671c61aa11b3313" href="/aquarkgn/program-studynotes/blob/65447b173d7872342cbeda147db5a12edfadf30e/Php/script/HashMap.php">Php/script/HashMap.php</a>
    </div>

      <div class="file-box blob-wrapper my-1">
        <table class="highlight">
            <tbody><tr>
    <td class="blob-num">
      <a href="/aquarkgn/program-studynotes/blob/65447b173d7872342cbeda147db5a12edfadf30e/Php/script/HashMap.php#L1">1</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-ent">&lt;?php</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/aquarkgn/program-studynotes/blob/65447b173d7872342cbeda147db5a12edfadf30e/Php/script/HashMap.php#L2">2</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c">/**</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/aquarkgn/program-studynotes/blob/65447b173d7872342cbeda147db5a12edfadf30e/Php/script/HashMap.php#L3">3</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c"> * Create From PhpStrom</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/aquarkgn/program-studynotes/blob/65447b173d7872342cbeda147db5a12edfadf30e/Php/script/HashMap.php#L4">4</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c"> * User:  &lt;gaonan01@<span class="text-bold bg-yellow-light rounded-1 d-inline-block">zuoyebang</span>.com&gt;</span></td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/aquarkgn/program-studynotes/blob/65447b173d7872342cbeda147db5a12edfadf30e/Php/script/HashMap.php#L5">5</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c"> * CreateTime:  2019/11/15 19:21</span>
</td>
  </tr>

        </tbody></table>
      </div>

    <div class="d-flex flex-wrap text-small text-gray">
         <div class="mr-3">
           <span class="">
  <span class="repo-language-color" style="background-color: #4F5D95"></span>
  <span itemprop="programmingLanguage">PHP</span>
</span>

         </div>

        <span class="match-count mr-3">
          Showing the top match
        </span>

      <span class="updated-at mr-3">
        Last indexed <relative-time datetime="2020-01-08T08:21:40Z" class="no-wrap" title="2020年1月8日 GMT+8 下午4:21">on 8 Jan</relative-time>
      </span>
    </div>

  </div>
</div>

        
<div class="hx_hit-code code-list-item d-flex py-4 code-list-item-public ">
    <img class="rounded-1 v-align-middle flex-shrink-0 mr-1 avatar-user" src="https://avatars2.githubusercontent.com/u/11364005?s=40&amp;v=4" width="20" height="20" alt="@caoshanqiang">

  <div class="width-full">
      <div class="flex-shrink-0 text-small text-bold">
        <a class="link-gray" href="/caoshanqiang/aloTest">
          caoshanqiang/aloTest
</a>      </div>

    <div class="f4 text-normal">
      <a title="test.php" data-hydro-click="{&quot;event_type&quot;:&quot;search_result.click&quot;,&quot;payload&quot;:{&quot;page_number&quot;:1,&quot;per_page&quot;:10,&quot;query&quot;:&quot;zuoyebang language:php&quot;,&quot;result_position&quot;:7,&quot;click_id&quot;:195805962,&quot;result&quot;:{&quot;id&quot;:195805962,&quot;global_relay_id&quot;:&quot;MDEwOlJlcG9zaXRvcnkxOTU4MDU5NjI=&quot;,&quot;model_name&quot;:&quot;Repository&quot;,&quot;url&quot;:&quot;https://github.com/caoshanqiang/aloTest/blob/e47b957f25cba8ced5b2f558eab07c97e0853fb8/test.php&quot;},&quot;originating_url&quot;:&quot;https://github.com/search?o=desc&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code&amp;_pjax=%23js-pjax-container&quot;,&quot;user_id&quot;:74900541}}" data-hydro-click-hmac="bae6c8ed26a869d12d1fc242ff9cd52beeec01827cf109ae74b39c2dcd060d7f" href="/caoshanqiang/aloTest/blob/e47b957f25cba8ced5b2f558eab07c97e0853fb8/test.php">test.php</a>
    </div>

      <div class="file-box blob-wrapper my-1">
        <table class="highlight">
            <tbody><tr>
    <td class="blob-num">
      <a href="/caoshanqiang/aloTest/blob/e47b957f25cba8ced5b2f558eab07c97e0853fb8/test.php#L1">1</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-ent">&lt;?php</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/caoshanqiang/aloTest/blob/e47b957f25cba8ced5b2f558eab07c97e0853fb8/test.php#L2">2</a>
    </td>
    <td class="blob-code blob-code-inner">
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/caoshanqiang/aloTest/blob/e47b957f25cba8ced5b2f558eab07c97e0853fb8/test.php#L3">3</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c">/**</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/caoshanqiang/aloTest/blob/e47b957f25cba8ced5b2f558eab07c97e0853fb8/test.php#L4">4</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c">  *@author: @<span class="text-bold bg-yellow-light rounded-1 d-inline-block">zuoyebang</span>.com</span></td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/caoshanqiang/aloTest/blob/e47b957f25cba8ced5b2f558eab07c97e0853fb8/test.php#L5">5</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c">  *@brief :</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/caoshanqiang/aloTest/blob/e47b957f25cba8ced5b2f558eab07c97e0853fb8/test.php#L6">6</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c">  *@data  : y-m-d</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/caoshanqiang/aloTest/blob/e47b957f25cba8ced5b2f558eab07c97e0853fb8/test.php#L7">7</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c">  *</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/caoshanqiang/aloTest/blob/e47b957f25cba8ced5b2f558eab07c97e0853fb8/test.php#L8">8</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c">  **/</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/caoshanqiang/aloTest/blob/e47b957f25cba8ced5b2f558eab07c97e0853fb8/test.php#L9">9</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-v">Bd_Init</span>::<span class="pl-en">init</span>();
</td>
  </tr>

        </tbody></table>
      </div>

    <div class="d-flex flex-wrap text-small text-gray">
         <div class="mr-3">
           <span class="">
  <span class="repo-language-color" style="background-color: #4F5D95"></span>
  <span itemprop="programmingLanguage">PHP</span>
</span>

         </div>

        <span class="match-count mr-3">
          Showing the top match
        </span>

      <span class="updated-at mr-3">
        Last indexed <relative-time datetime="2019-12-27T07:58:37Z" class="no-wrap" title="2019年12月27日 GMT+8 下午3:58">on 27 Dec 2019</relative-time>
      </span>
    </div>

  </div>
</div>

        
<div class="hx_hit-code code-list-item d-flex py-4 code-list-item-public ">
    <img class="rounded-1 v-align-middle flex-shrink-0 mr-1 avatar-user" src="https://avatars2.githubusercontent.com/u/36883284?s=40&amp;v=4" width="20" height="20" alt="@gj0217">

  <div class="width-full">
      <div class="flex-shrink-0 text-small text-bold">
        <a class="link-gray" href="/gj0217/data-process">
          gj0217/data-process
</a>      </div>

    <div class="f4 text-normal">
      <a title="searchKuoke.php" data-hydro-click="{&quot;event_type&quot;:&quot;search_result.click&quot;,&quot;payload&quot;:{&quot;page_number&quot;:1,&quot;per_page&quot;:10,&quot;query&quot;:&quot;zuoyebang language:php&quot;,&quot;result_position&quot;:8,&quot;click_id&quot;:201032426,&quot;result&quot;:{&quot;id&quot;:201032426,&quot;global_relay_id&quot;:&quot;MDEwOlJlcG9zaXRvcnkyMDEwMzI0MjY=&quot;,&quot;model_name&quot;:&quot;Repository&quot;,&quot;url&quot;:&quot;https://github.com/gj0217/data-process/blob/ae68c2681adb05bbc86da91eeec36aa3a30e9091/searchKuoke.php&quot;},&quot;originating_url&quot;:&quot;https://github.com/search?o=desc&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code&amp;_pjax=%23js-pjax-container&quot;,&quot;user_id&quot;:74900541}}" data-hydro-click-hmac="76eeedd767c9e940e61308bb315807bb2e30cc7fd2f1fdc4f7f0a239218e7dbe" href="/gj0217/data-process/blob/ae68c2681adb05bbc86da91eeec36aa3a30e9091/searchKuoke.php">searchKuoke.php</a>
    </div>

      <div class="file-box blob-wrapper my-1">
        <table class="highlight">
            <tbody><tr>
    <td class="blob-num">
      <a href="/gj0217/data-process/blob/ae68c2681adb05bbc86da91eeec36aa3a30e9091/searchKuoke.php#L1">1</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-ent">&lt;?php</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/gj0217/data-process/blob/ae68c2681adb05bbc86da91eeec36aa3a30e9091/searchKuoke.php#L2">2</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c">/**</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/gj0217/data-process/blob/ae68c2681adb05bbc86da91eeec36aa3a30e9091/searchKuoke.php#L3">3</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c"> * Created by PhpStorm.</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/gj0217/data-process/blob/ae68c2681adb05bbc86da91eeec36aa3a30e9091/searchKuoke.php#L4">4</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c"> * User: guanjing@<span class="text-bold bg-yellow-light rounded-1 d-inline-block">zuoyebang</span>.com</span></td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/gj0217/data-process/blob/ae68c2681adb05bbc86da91eeec36aa3a30e9091/searchKuoke.php#L5">5</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c"> * Date: 2019/6/13</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/gj0217/data-process/blob/ae68c2681adb05bbc86da91eeec36aa3a30e9091/searchKuoke.php#L6">6</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c"> * Time: 17:38</span>
</td>
  </tr>

        </tbody></table>
      </div>

    <div class="d-flex flex-wrap text-small text-gray">
         <div class="mr-3">
           <span class="">
  <span class="repo-language-color" style="background-color: #4F5D95"></span>
  <span itemprop="programmingLanguage">PHP</span>
</span>

         </div>

        <span class="match-count mr-3">
          Showing the top match
        </span>

      <span class="updated-at mr-3">
        Last indexed <relative-time datetime="2019-08-07T11:06:18Z" class="no-wrap" title="2019年8月7日 GMT+8 下午7:06">on 7 Aug 2019</relative-time>
      </span>
    </div>

  </div>
</div>

        
<div class="hx_hit-code code-list-item d-flex py-4 code-list-item-public ">
    <img class="rounded-1 v-align-middle flex-shrink-0 mr-1 avatar-user" src="https://avatars2.githubusercontent.com/u/36883284?s=40&amp;v=4" width="20" height="20" alt="@gj0217">

  <div class="width-full">
      <div class="flex-shrink-0 text-small text-bold">
        <a class="link-gray" href="/gj0217/process-data">
          gj0217/process-data
</a>      </div>

    <div class="f4 text-normal">
      <a title="searchKuoke.php" data-hydro-click="{&quot;event_type&quot;:&quot;search_result.click&quot;,&quot;payload&quot;:{&quot;page_number&quot;:1,&quot;per_page&quot;:10,&quot;query&quot;:&quot;zuoyebang language:php&quot;,&quot;result_position&quot;:9,&quot;click_id&quot;:201032519,&quot;result&quot;:{&quot;id&quot;:201032519,&quot;global_relay_id&quot;:&quot;MDEwOlJlcG9zaXRvcnkyMDEwMzI1MTk=&quot;,&quot;model_name&quot;:&quot;Repository&quot;,&quot;url&quot;:&quot;https://github.com/gj0217/process-data/blob/7826a19ac820c3c3bd14a086057f344f4c06d1de/searchKuoke.php&quot;},&quot;originating_url&quot;:&quot;https://github.com/search?o=desc&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code&amp;_pjax=%23js-pjax-container&quot;,&quot;user_id&quot;:74900541}}" data-hydro-click-hmac="5c436fe796b9a8914fa819ab169bae587ae79caa93546b0d6cad6ada556f980c" href="/gj0217/process-data/blob/7826a19ac820c3c3bd14a086057f344f4c06d1de/searchKuoke.php">searchKuoke.php</a>
    </div>

      <div class="file-box blob-wrapper my-1">
        <table class="highlight">
            <tbody><tr>
    <td class="blob-num">
      <a href="/gj0217/process-data/blob/7826a19ac820c3c3bd14a086057f344f4c06d1de/searchKuoke.php#L1">1</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-ent">&lt;?php</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/gj0217/process-data/blob/7826a19ac820c3c3bd14a086057f344f4c06d1de/searchKuoke.php#L2">2</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c">/**</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/gj0217/process-data/blob/7826a19ac820c3c3bd14a086057f344f4c06d1de/searchKuoke.php#L3">3</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c"> * Created by PhpStorm.</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/gj0217/process-data/blob/7826a19ac820c3c3bd14a086057f344f4c06d1de/searchKuoke.php#L4">4</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c"> * User: guanjing@<span class="text-bold bg-yellow-light rounded-1 d-inline-block">zuoyebang</span>.com</span></td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/gj0217/process-data/blob/7826a19ac820c3c3bd14a086057f344f4c06d1de/searchKuoke.php#L5">5</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c"> * Date: 2019/6/13</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/gj0217/process-data/blob/7826a19ac820c3c3bd14a086057f344f4c06d1de/searchKuoke.php#L6">6</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c"> * Time: 17:38</span>
</td>
  </tr>

        </tbody></table>
      </div>

    <div class="d-flex flex-wrap text-small text-gray">
         <div class="mr-3">
           <span class="">
  <span class="repo-language-color" style="background-color: #4F5D95"></span>
  <span itemprop="programmingLanguage">PHP</span>
</span>

         </div>

        <span class="match-count mr-3">
          Showing the top match
        </span>

      <span class="updated-at mr-3">
        Last indexed <relative-time datetime="2019-08-07T11:05:32Z" class="no-wrap" title="2019年8月7日 GMT+8 下午7:05">on 7 Aug 2019</relative-time>
      </span>
    </div>

  </div>
</div>

        
<div class="hx_hit-code code-list-item d-flex py-4 code-list-item-public ">
    <img class="rounded-1 v-align-middle flex-shrink-0 mr-1 avatar-user" src="https://avatars3.githubusercontent.com/u/34622167?s=40&amp;v=4" width="20" height="20" alt="@SoaringPhoenix">

  <div class="width-full">
      <div class="flex-shrink-0 text-small text-bold">
        <a class="link-gray" href="/SoaringPhoenix/php_practice">
          SoaringPhoenix/php_practice
</a>      </div>

    <div class="f4 text-normal">
      <a title="leetcode/letterCasePermutation.php" data-hydro-click="{&quot;event_type&quot;:&quot;search_result.click&quot;,&quot;payload&quot;:{&quot;page_number&quot;:1,&quot;per_page&quot;:10,&quot;query&quot;:&quot;zuoyebang language:php&quot;,&quot;result_position&quot;:10,&quot;click_id&quot;:160931159,&quot;result&quot;:{&quot;id&quot;:160931159,&quot;global_relay_id&quot;:&quot;MDEwOlJlcG9zaXRvcnkxNjA5MzExNTk=&quot;,&quot;model_name&quot;:&quot;Repository&quot;,&quot;url&quot;:&quot;https://github.com/SoaringPhoenix/php_practice/blob/7eef4b01110ceb1822acd83d1ee80264c3b3abd3/leetcode/letterCasePermutation.php&quot;},&quot;originating_url&quot;:&quot;https://github.com/search?o=desc&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code&amp;_pjax=%23js-pjax-container&quot;,&quot;user_id&quot;:74900541}}" data-hydro-click-hmac="da5f4549b039e0af8564778cf526946308ab3787e8ddc0d13961435a2b559e73" href="/SoaringPhoenix/php_practice/blob/7eef4b01110ceb1822acd83d1ee80264c3b3abd3/leetcode/letterCasePermutation.php">leetcode/letterCasePermutation.php</a>
    </div>

      <div class="file-box blob-wrapper my-1">
        <table class="highlight">
            <tbody><tr>
    <td class="blob-num">
      <a href="/SoaringPhoenix/php_practice/blob/7eef4b01110ceb1822acd83d1ee80264c3b3abd3/leetcode/letterCasePermutation.php#L1">1</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-ent">&lt;?php</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/SoaringPhoenix/php_practice/blob/7eef4b01110ceb1822acd83d1ee80264c3b3abd3/leetcode/letterCasePermutation.php#L2">2</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c">/**</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/SoaringPhoenix/php_practice/blob/7eef4b01110ceb1822acd83d1ee80264c3b3abd3/leetcode/letterCasePermutation.php#L3">3</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c"> * Created by PhpStorm.</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/SoaringPhoenix/php_practice/blob/7eef4b01110ceb1822acd83d1ee80264c3b3abd3/leetcode/letterCasePermutation.php#L4">4</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c"> * User: <span class="text-bold bg-yellow-light rounded-1 d-inline-block">zuoyebang</span></span></td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/SoaringPhoenix/php_practice/blob/7eef4b01110ceb1822acd83d1ee80264c3b3abd3/leetcode/letterCasePermutation.php#L5">5</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c"> * Date: 2019/4/3</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/SoaringPhoenix/php_practice/blob/7eef4b01110ceb1822acd83d1ee80264c3b3abd3/leetcode/letterCasePermutation.php#L6">6</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c"> * Time: 16:35</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/SoaringPhoenix/php_practice/blob/7eef4b01110ceb1822acd83d1ee80264c3b3abd3/leetcode/letterCasePermutation.php#L7">7</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-c"> */</span>
</td>
  </tr>
  <tr>
    <td class="blob-num">
      <a href="/SoaringPhoenix/php_practice/blob/7eef4b01110ceb1822acd83d1ee80264c3b3abd3/leetcode/letterCasePermutation.php#L8">8</a>
    </td>
    <td class="blob-code blob-code-inner"><span class="pl-k">class</span> <span class="pl-v">Solution</span> {
</td>
  </tr>

        </tbody></table>
      </div>

    <div class="d-flex flex-wrap text-small text-gray">
         <div class="mr-3">
           <span class="">
  <span class="repo-language-color" style="background-color: #4F5D95"></span>
  <span itemprop="programmingLanguage">PHP</span>
</span>

         </div>

        <span class="match-count mr-3">
          Showing the top match
        </span>

      <span class="updated-at mr-3">
        Last indexed <relative-time datetime="2019-04-07T15:44:50Z" class="no-wrap" title="2019年4月7日 GMT+8 下午11:44">on 7 Apr 2019</relative-time>
      </span>
    </div>

  </div>
</div>

    </div>
      <div class="paginate-container codesearch-pagination-container">
    <div role="navigation" aria-label="Pagination" class="d-flex d-md-inline-block pagination" data-pjax="true"><span class="previous_page disabled">Previous</span> <em class="current" data-total-pages="10">1</em> <a rel="next" aria-label="Page 2" href="/search?o=desc&amp;p=2&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code">2</a> <a aria-label="Page 3" href="/search?o=desc&amp;p=3&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code">3</a> <a aria-label="Page 4" href="/search?o=desc&amp;p=4&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code">4</a> <a aria-label="Page 5" href="/search?o=desc&amp;p=5&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code">5</a> <span class="gap">…</span> <a aria-label="Page 9" href="/search?o=desc&amp;p=9&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code">9</a> <a aria-label="Page 10" href="/search?o=desc&amp;p=10&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code">10</a> <a class="next_page" rel="next" href="/search?o=desc&amp;p=2&amp;q=zuoyebang+language%3Aphp&amp;s=indexed&amp;type=Code">Next</a></div>
  </div>

  </div>

      </div>
    </div>

    <div class="px-3 d-block d-sm-none">
      <a href="/search/advanced?q=zuoyebang+language%3Aphp" class="f6">Advanced search</a>
    </div>
  </div>












</main>
  </div>

          
<div class="footer container-xl width-full p-responsive" role="contentinfo">
    <div class="position-relative d-flex flex-row-reverse flex-lg-row flex-wrap flex-lg-nowrap flex-justify-center flex-lg-justify-between flex-sm-items-center pt-6 pb-2 mt-6 f6 text-gray border-top border-gray-light ">
      <a aria-label="Homepage" title="GitHub" class="footer-octicon d-none d-lg-block mr-lg-4" href="https://github.com">
        <svg height="24" class="octicon octicon-mark-github" viewBox="0 0 16 16" version="1.1" width="24" aria-hidden="true"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path></svg>
</a>
      <ul class="list-style-none d-flex flex-wrap col-12 flex-justify-center flex-lg-justify-between mb-2 mb-lg-0">
        <li class="mr-3 mr-lg-0">© 2020 GitHub, Inc.</li>
          <li class="mr-3 mr-lg-0"><a data-ga-click="Footer, go to terms, text:terms" href="https://github.com/site/terms">Terms</a></li>
          <li class="mr-3 mr-lg-0"><a data-ga-click="Footer, go to privacy, text:privacy" href="https://github.com/site/privacy">Privacy</a></li>
            <li class="js-cookie-consent-preferences-link-container mr-3 mr-lg-0" hidden="hidden">
  <button data-ga-click="Footer, go to cookie preferences, text:cookie preferences" class="btn-link js-cookie-consent-preferences-link" type="button">Cookie Preferences</button>
</li>
          <li class="mr-3 mr-lg-0"><a data-ga-click="Footer, go to security, text:security" href="https://github.com/security">Security</a></li>
          <li class="mr-3 mr-lg-0"><a href="https://githubstatus.com/" data-ga-click="Footer, go to status, text:status">Status</a></li>
          <li class="mr-3 mr-lg-0"><a data-ga-click="Footer, go to help, text:help" href="https://docs.github.com">Help</a></li>
          <li class="mr-3 mr-lg-0"><a data-ga-click="Footer, go to contact, text:contact" href="https://github.com/contact">Contact GitHub</a></li>
          <li class="mr-3 mr-lg-0"><a href="https://github.com/pricing" data-ga-click="Footer, go to Pricing, text:Pricing">Pricing</a></li>
        <li class="mr-3 mr-lg-0"><a href="https://docs.github.com" data-ga-click="Footer, go to api, text:api">API</a></li>
        <li class="mr-3 mr-lg-0"><a href="https://services.github.com" data-ga-click="Footer, go to training, text:training">Training</a></li>
          <li class="mr-3 mr-lg-0"><a href="https://github.blog" data-ga-click="Footer, go to blog, text:blog">Blog</a></li>
          <li class="mr-3 mr-lg-0"><a data-ga-click="Footer, go to about, text:about" href="https://github.com/about">About</a></li>
      </ul>
    </div>
  <div class="d-flex flex-justify-center pb-6">
    <span class="f6 text-gray-light"></span>
  </div>

  
</div>



  <div id="ajax-error-message" class="ajax-error-message flash flash-error">
    <svg class="octicon octicon-alert" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8.22 1.754a.25.25 0 00-.44 0L1.698 13.132a.25.25 0 00.22.368h12.164a.25.25 0 00.22-.368L8.22 1.754zm-1.763-.707c.659-1.234 2.427-1.234 3.086 0l6.082 11.378A1.75 1.75 0 0114.082 15H1.918a1.75 1.75 0 01-1.543-2.575L6.457 1.047zM9 11a1 1 0 11-2 0 1 1 0 012 0zm-.25-5.25a.75.75 0 00-1.5 0v2.5a.75.75 0 001.5 0v-2.5z"></path></svg>
    <button type="button" class="flash-close js-ajax-error-dismiss" aria-label="Dismiss error">
      <svg class="octicon octicon-x" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z"></path></svg>
    </button>
    You can’t perform that action at this time.
  </div>


  <div class="js-stale-session-flash flash flash-warn flash-banner" hidden="">
    <svg class="octicon octicon-alert" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8.22 1.754a.25.25 0 00-.44 0L1.698 13.132a.25.25 0 00.22.368h12.164a.25.25 0 00.22-.368L8.22 1.754zm-1.763-.707c.659-1.234 2.427-1.234 3.086 0l6.082 11.378A1.75 1.75 0 0114.082 15H1.918a1.75 1.75 0 01-1.543-2.575L6.457 1.047zM9 11a1 1 0 11-2 0 1 1 0 012 0zm-.25-5.25a.75.75 0 00-1.5 0v2.5a.75.75 0 001.5 0v-2.5z"></path></svg>
    <span class="js-stale-session-flash-signed-in" hidden="">You signed in with another tab or window. <a href="">Reload</a> to refresh your session.</span>
    <span class="js-stale-session-flash-signed-out" hidden="">You signed out in another tab or window. <a href="">Reload</a> to refresh your session.</span>
  </div>
    <template id="site-details-dialog">
  <details class="details-reset details-overlay details-overlay-dark lh-default text-gray-dark hx_rsm" open="">
    <summary role="button" aria-label="Close dialog"></summary>
    <details-dialog class="Box Box--overlay d-flex flex-column anim-fade-in fast hx_rsm-dialog hx_rsm-modal">
      <button class="Box-btn-octicon m-0 btn-octicon position-absolute right-0 top-0" type="button" aria-label="Close dialog" data-close-dialog="">
        <svg class="octicon octicon-x" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z"></path></svg>
      </button>
      <div class="octocat-spinner my-6 js-details-dialog-spinner"></div>
    </details-dialog>
  </details>
</template>

    <div class="Popover js-hovercard-content position-absolute" style="display: none; outline: none;" tabindex="0">
  <div class="Popover-message Popover-message--bottom-left Popover-message--large Box box-shadow-large" style="width:360px;"></div>
</div>

      <div class="js-cookie-consent-banner" hidden="">
  <div class="hx_cookie-banner p-2 p-sm-3 p-md-4">
    <div style="max-width: 1194px;" class="Box hx_cookie-banner-box box-shadow-medium mx-auto">
    <div class="Box-body border-0 py-0 px-3 px-md-4">
      <div class="js-main-cookie-banner hx_cookie-banner-main">
          <div class="d-md-flex flex-items-center py-3">
            <p class="f5 flex-1 mb-3 mb-md-0">
              
  We use <span class="text-bold">optional</span> third-party analytics cookies to understand how you use GitHub.com so we can build better products.

              <span class="btn-link js-cookie-consent-learn-more">Learn more</span>.
            </p>
            <div class="d-flex d-md-block flex-wrap flex-sm-nowrap">
              <button class="btn btn-outline flex-1 mr-1 mx-sm-1 m-md-0 ml-md-2 js-cookie-consent-accept">Accept</button>
              <button class="btn btn-outline flex-1 ml-1 m-md-0 ml-md-2 js-cookie-consent-reject">Reject</button>
            </div>
          </div>
        </div>

        <div class="js-cookie-details hx_cookie-banner-details" hidden="">
          <div class="d-md-flex flex-items-center py-3">
            <p class="f5 flex-1 mb-2 mb-md-0">
              
  We use <span class="text-bold">optional</span> third-party analytics cookies to understand how you use GitHub.com so we can build better products.

              <br>
              You can always update your selection by clicking <span class="text-bold">Cookie Preferences</span> at the bottom of the page.
              For more information, see our <a href="https://docs.github.com/en/free-pro-team@latest/github/site-policy/github-privacy-statement">Privacy Statement</a>.
            </p>
          </div>

          <div class="d-md-flex flex-items-center py-3 border-top">
            <div class="f5 flex-1 mb-2 mb-md-0">
              <h5 class="mb-1">Essential cookies</h5>
              <p class="f6 mb-md-0">We use essential cookies to perform essential website functions, e.g. they're used to log you in. 
                <a href="https://docs.github.com/en/github/site-policy/github-subprocessors-and-cookies">Learn more</a>
              </p>
            </div>
            <div class="text-right">
              <h5 class="text-blue">Always active</h5>
            </div>
          </div>

          <div class="d-md-flex flex-items-center py-3 border-top">
            <div class="f5 flex-1 mb-2 mb-md-0">
              <h5 class="mb-1">Analytics cookies</h5>
              <p class="f6 mb-md-0">We use analytics cookies to understand how you use our websites so we can make them better, e.g. they're used to gather information about the pages you visit and how many clicks you need to accomplish a task. 
                <a href="https://docs.github.com/en/github/site-policy/github-subprocessors-and-cookies">Learn more</a>
              </p>
            </div>
            <div class="text-right">
              <div class="BtnGroup mt-1 mt-md-0 ml-2">
                <button class="btn btn-outline BtnGroup-item js-accept-analytics-cookies" type="button">Accept</button>
                <button class="btn btn-outline BtnGroup-item js-reject-analytics-cookies" type="button">Reject</button>
              </div>
            </div>
          </div>

          <div class="text-right py-3 border-top">
            <button class="btn btn-primary js-save-cookie-preferences" type="button" disabled="">Save preferences</button>
          </div>
        </div>
</div></div>  </div>
</div>


  

<div aria-live="polite" class="sr-only"></div></body>
EOF;
$pattern_time = '/<relative-time datetime=[\'"]([^\"\']*)[\'"][^<]*?/i';
preg_match_all($pattern_time, $output, $last_indexes);
var_dump($last_indexes[1]);
$new_time = [];
foreach ($last_indexes[1] as $utc) {
    $time= str_replace(array('T','Z'),' ',$utc);
    $new_time[] =strtotime($time);
}
var_dump($new_time);
