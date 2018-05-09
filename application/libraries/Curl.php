



<!DOCTYPE html>
<html lang="en" class="">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    
    
    <title>codeigniter-curl/Curl.php at master · philsturgeon/codeigniter-curl · GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub">
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png">
    <meta property="fb:app_id" content="1401488693436528">

      <meta content="@github" name="twitter:site" /><meta content="summary" name="twitter:card" /><meta content="philsturgeon/codeigniter-curl" name="twitter:title" /><meta content="codeigniter-curl - THIS IS NO LONGER MAINTAINED, USE http://docs.guzzlephp.org INSTEAD" name="twitter:description" /><meta content="https://avatars3.githubusercontent.com/u/67381?v=2&amp;s=400" name="twitter:image:src" />
<meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="https://avatars3.githubusercontent.com/u/67381?v=2&amp;s=400" property="og:image" /><meta content="philsturgeon/codeigniter-curl" property="og:title" /><meta content="https://github.com/philsturgeon/codeigniter-curl" property="og:url" /><meta content="codeigniter-curl - THIS IS NO LONGER MAINTAINED, USE http://docs.guzzlephp.org INSTEAD" property="og:description" />

      <meta name="browser-stats-url" content="/_stats">
    <link rel="assets" href="https://assets-cdn.github.com/">
    <link rel="conduit-xhr" href="https://ghconduit.com:25035">
    
    <meta name="pjax-timeout" content="1000">

    <meta name="msapplication-TileImage" content="/windows-tile.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="selected-link" value="repo_source" data-pjax-transient>
      <meta name="google-analytics" content="UA-3769691-2">

    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="collector-cdn.github.com" name="octolytics-script-host" /><meta content="github" name="octolytics-app-id" /><meta content="76637002:0E06:673547:543E16A5" name="octolytics-dimension-request_id" />
    <meta content="Rails, view, blob#show" name="analytics-event" />

    
    
    <link rel="icon" type="image/x-icon" href="https://assets-cdn.github.com/favicon.ico">


    <meta content="authenticity_token" name="csrf-param" />
<meta content="BwqFXcULYZgV6asXjFRjzzdAV44PM7/dDX5gdZBqJrjXTc24lQJZY0l/BwNnPlJjJspVKXsSkGQRRJ/DeaL26w==" name="csrf-token" />

    <link href="https://assets-cdn.github.com/assets/github-c5d8b4454bcdeef0e60d0c96c132e0dc532293cf6a51115ee59f6fd5152a3f7c.css" media="all" rel="stylesheet" type="text/css" />
    <link href="https://assets-cdn.github.com/assets/github2-c7c5c123bf8810b1bccded004dcae7b61fd9e418d4e372478b2b30c900f1ab24.css" media="all" rel="stylesheet" type="text/css" />
    
    


    <meta http-equiv="x-pjax-version" content="e760fed224f8b47662b1a94a23235a80">

      
  <meta name="description" content="codeigniter-curl - THIS IS NO LONGER MAINTAINED, USE http://docs.guzzlephp.org INSTEAD">
  <meta name="go-import" content="github.com/philsturgeon/codeigniter-curl git https://github.com/philsturgeon/codeigniter-curl.git">

  <meta content="67381" name="octolytics-dimension-user_id" /><meta content="philsturgeon" name="octolytics-dimension-user_login" /><meta content="787732" name="octolytics-dimension-repository_id" /><meta content="philsturgeon/codeigniter-curl" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="787732" name="octolytics-dimension-repository_network_root_id" /><meta content="philsturgeon/codeigniter-curl" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/philsturgeon/codeigniter-curl/commits/master.atom" rel="alternate" title="Recent Commits to codeigniter-curl:master" type="application/atom+xml">

  </head>


  <body class="logged_out  env-production windows vis-public page-blob">
    <a href="#start-of-content" tabindex="1" class="accessibility-aid js-skip-to-content">Skip to content</a>
    <div class="wrapper">
      
      
      
      


      
      <div class="header header-logged-out" role="banner">
  <div class="container clearfix">

    <a class="header-logo-wordmark" href="https://github.com/" ga-data-click="(Logged out) Header, go to homepage, icon:logo-wordmark">
      <span class="mega-octicon octicon-logo-github"></span>
    </a>

    <div class="header-actions" role="navigation">
        <a class="button primary" href="/join" data-ga-click="(Logged out) Header, clicked Sign up, text:sign-up">Sign up</a>
      <a class="button signin" href="/login?return_to=%2Fphilsturgeon%2Fcodeigniter-curl%2Fblob%2Fmaster%2Flibraries%2FCurl.php" data-ga-click="(Logged out) Header, clicked Sign in, text:sign-in">Sign in</a>
    </div>

    <div class="site-search repo-scope js-site-search" role="search">
      <form accept-charset="UTF-8" action="/philsturgeon/codeigniter-curl/search" class="js-site-search-form" data-global-search-url="/search" data-repo-search-url="/philsturgeon/codeigniter-curl/search" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
  <input type="text"
    class="js-site-search-field is-clearable"
    data-hotkey="s"
    name="q"
    placeholder="Search"
    data-global-scope-placeholder="Search GitHub"
    data-repo-scope-placeholder="Search"
    tabindex="1"
    autocapitalize="off">
  <div class="scope-badge">This repository</div>
</form>
    </div>

      <ul class="header-nav left" role="navigation">
          <li class="header-nav-item">
            <a class="header-nav-link" href="/explore" data-ga-click="(Logged out) Header, go to explore, text:explore">Explore</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="/features" data-ga-click="(Logged out) Header, go to features, text:features">Features</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="https://enterprise.github.com/" data-ga-click="(Logged out) Header, go to enterprise, text:enterprise">Enterprise</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="/blog" data-ga-click="(Logged out) Header, go to blog, text:blog">Blog</a>
          </li>
      </ul>

  </div>
</div>



      <div id="start-of-content" class="accessibility-aid"></div>
          <div class="site" itemscope itemtype="http://schema.org/WebPage">
    <div id="js-flash-container">
      
    </div>
    <div class="pagehead repohead instapaper_ignore readability-menu">
      <div class="container">
        
<ul class="pagehead-actions">


  <li>
      <a href="/login?return_to=%2Fphilsturgeon%2Fcodeigniter-curl"
    class="minibutton with-count star-button tooltipped tooltipped-n"
    aria-label="You must be signed in to star a repository" rel="nofollow">
    <span class="octicon octicon-star"></span>
    Star
  </a>

    <a class="social-count js-social-count" href="/philsturgeon/codeigniter-curl/stargazers">
      324
    </a>

  </li>

    <li>
      <a href="/login?return_to=%2Fphilsturgeon%2Fcodeigniter-curl"
        class="minibutton with-count js-toggler-target fork-button tooltipped tooltipped-n"
        aria-label="You must be signed in to fork a repository" rel="nofollow">
        <span class="octicon octicon-repo-forked"></span>
        Fork
      </a>
      <a href="/philsturgeon/codeigniter-curl/network" class="social-count">
        129
      </a>
    </li>
</ul>

        <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
          <span class="mega-octicon octicon-repo"></span>
          <span class="author"><a href="/philsturgeon" class="url fn" itemprop="url" rel="author"><span itemprop="title">philsturgeon</span></a></span><!--
       --><span class="path-divider">/</span><!--
       --><strong><a href="/philsturgeon/codeigniter-curl" class="js-current-repository js-repo-home-link">codeigniter-curl</a></strong>

          <span class="page-context-loader">
            <img alt="" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
          </span>

        </h1>
      </div><!-- /.container -->
    </div><!-- /.repohead -->

    <div class="container">
      <div class="repository-with-sidebar repo-container new-discussion-timeline  ">
        <div class="repository-sidebar clearfix">
            
<div class="sunken-menu vertical-right repo-nav js-repo-nav js-repository-container-pjax js-octicon-loaders" role="navigation" data-issue-count-url="/philsturgeon/codeigniter-curl/issues/counts">
  <div class="sunken-menu-contents">
    <ul class="sunken-menu-group">
      <li class="tooltipped tooltipped-w" aria-label="Code">
        <a href="/philsturgeon/codeigniter-curl" aria-label="Code" class="selected js-selected-navigation-item sunken-menu-item" data-hotkey="g c" data-pjax="true" data-selected-links="repo_source repo_downloads repo_commits repo_releases repo_tags repo_branches /philsturgeon/codeigniter-curl">
          <span class="octicon octicon-code"></span> <span class="full-word">Code</span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

        <li class="tooltipped tooltipped-w" aria-label="Issues">
          <a href="/philsturgeon/codeigniter-curl/issues" aria-label="Issues" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-hotkey="g i" data-selected-links="repo_issues repo_labels repo_milestones /philsturgeon/codeigniter-curl/issues">
            <span class="octicon octicon-issue-opened"></span> <span class="full-word">Issues</span>
            <span class="js-issue-replace-counter"></span>
            <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>        </li>

      <li class="tooltipped tooltipped-w" aria-label="Pull Requests">
        <a href="/philsturgeon/codeigniter-curl/pulls" aria-label="Pull Requests" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-hotkey="g p" data-selected-links="repo_pulls /philsturgeon/codeigniter-curl/pulls">
            <span class="octicon octicon-git-pull-request"></span> <span class="full-word">Pull Requests</span>
            <span class="js-pull-replace-counter"></span>
            <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>


    </ul>
    <div class="sunken-menu-separator"></div>
    <ul class="sunken-menu-group">

      <li class="tooltipped tooltipped-w" aria-label="Pulse">
        <a href="/philsturgeon/codeigniter-curl/pulse/weekly" aria-label="Pulse" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="pulse /philsturgeon/codeigniter-curl/pulse/weekly">
          <span class="octicon octicon-pulse"></span> <span class="full-word">Pulse</span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped tooltipped-w" aria-label="Graphs">
        <a href="/philsturgeon/codeigniter-curl/graphs" aria-label="Graphs" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="repo_graphs repo_contributors /philsturgeon/codeigniter-curl/graphs">
          <span class="octicon octicon-graph"></span> <span class="full-word">Graphs</span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>
    </ul>


  </div>
</div>

              <div class="only-with-full-nav">
                
  
<div class="clone-url open"
  data-protocol-type="http"
  data-url="/users/set_protocol?protocol_selector=http&amp;protocol_type=clone">
  <h3><span class="text-emphasized">HTTPS</span> clone URL</h3>
  <div class="input-group">
    <input type="text" class="input-mini input-monospace js-url-field"
           value="https://github.com/philsturgeon/codeigniter-curl.git" readonly="readonly">
    <span class="input-group-button">
      <button aria-label="Copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="https://github.com/philsturgeon/codeigniter-curl.git" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>

  
<div class="clone-url "
  data-protocol-type="subversion"
  data-url="/users/set_protocol?protocol_selector=subversion&amp;protocol_type=clone">
  <h3><span class="text-emphasized">Subversion</span> checkout URL</h3>
  <div class="input-group">
    <input type="text" class="input-mini input-monospace js-url-field"
           value="https://github.com/philsturgeon/codeigniter-curl" readonly="readonly">
    <span class="input-group-button">
      <button aria-label="Copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="https://github.com/philsturgeon/codeigniter-curl" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>


<p class="clone-options">You can clone with
      <a href="#" class="js-clone-selector" data-protocol="http">HTTPS</a>
      or <a href="#" class="js-clone-selector" data-protocol="subversion">Subversion</a>.
  <a href="https://help.github.com/articles/which-remote-url-should-i-use" class="help tooltipped tooltipped-n" aria-label="Get help on which URL is right for you.">
    <span class="octicon octicon-question"></span>
  </a>
</p>


  <a href="http://windows.github.com" class="minibutton sidebar-button" title="Save philsturgeon/codeigniter-curl to your computer and use it in GitHub Desktop." aria-label="Save philsturgeon/codeigniter-curl to your computer and use it in GitHub Desktop.">
    <span class="octicon octicon-device-desktop"></span>
    Clone in Desktop
  </a>

                <a href="/philsturgeon/codeigniter-curl/archive/master.zip"
                   class="minibutton sidebar-button"
                   aria-label="Download the contents of philsturgeon/codeigniter-curl as a zip file"
                   title="Download the contents of philsturgeon/codeigniter-curl as a zip file"
                   rel="nofollow">
                  <span class="octicon octicon-cloud-download"></span>
                  Download ZIP
                </a>
              </div>
        </div><!-- /.repository-sidebar -->

        <div id="js-repo-pjax-container" class="repository-content context-loader-container" data-pjax-container>
          

<a href="/philsturgeon/codeigniter-curl/blob/97a587a165e49330f3e23a28047ed67a2c8ec32d/libraries/Curl.php" class="hidden js-permalink-shortcut" data-hotkey="y">Permalink</a>

<!-- blob contrib key: blob_contributors:v21:f30f030ab12bf970207cd80f04fd700c -->

<div class="file-navigation">
  
<div class="select-menu js-menu-container js-select-menu left">
  <span class="minibutton select-menu-button js-menu-target css-truncate" data-hotkey="w"
    data-master-branch="master"
    data-ref="master"
    title="master"
    role="button" aria-label="Switch branches or tags" tabindex="0" aria-haspopup="true">
    <span class="octicon octicon-git-branch"></span>
    <i>branch:</i>
    <span class="js-select-button css-truncate-target">master</span>
  </span>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax aria-hidden="true">

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <span class="select-menu-title">Switch branches/tags</span>
        <span class="octicon octicon-x js-menu-close" role="button" aria-label="Close"></span>
      </div> <!-- /.select-menu-header -->

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Filter branches/tags" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" class="js-select-menu-tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" class="js-select-menu-tab">Tags</a>
            </li>
          </ul>
        </div><!-- /.select-menu-tabs -->
      </div><!-- /.select-menu-filters -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/philsturgeon/codeigniter-curl/blob/8619e7571df703736f3a94037d11e0aaafe6f1e8/libraries/Curl.php"
                 data-name="8619e7571df703736f3a94037d11e0aaafe6f1e8"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="8619e7571df703736f3a94037d11e0aaafe6f1e8">8619e7571df703736f3a94037d11e0aaafe6f1e8</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item selected">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/philsturgeon/codeigniter-curl/blob/master/libraries/Curl.php"
                 data-name="master"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="master">master</a>
            </div> <!-- /.select-menu-item -->
        </div>

          <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/philsturgeon/codeigniter-curl/tree/1.3.0/libraries/Curl.php"
                 data-name="1.3.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="1.3.0">1.3.0</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/philsturgeon/codeigniter-curl/tree/1.2.1/libraries/Curl.php"
                 data-name="1.2.1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="1.2.1">1.2.1</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/philsturgeon/codeigniter-curl/tree/1.2.0/libraries/Curl.php"
                 data-name="1.2.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="1.2.0">1.2.0</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/philsturgeon/codeigniter-curl/tree/1.1/libraries/Curl.php"
                 data-name="1.1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="1.1">1.1</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/philsturgeon/codeigniter-curl/tree/1.0/libraries/Curl.php"
                 data-name="1.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="1.0">1.0</a>
            </div> <!-- /.select-menu-item -->
        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

    </div> <!-- /.select-menu-modal -->
  </div> <!-- /.select-menu-modal-holder -->
</div> <!-- /.select-menu -->

  <div class="button-group right">
    <a href="/philsturgeon/codeigniter-curl/find/master"
          class="js-show-file-finder minibutton empty-icon tooltipped tooltipped-s"
          data-pjax
          data-hotkey="t"
          aria-label="Quickly jump between files">
      <span class="octicon octicon-list-unordered"></span>
    </a>
    <button class="js-zeroclipboard minibutton zeroclipboard-button"
          data-clipboard-text="libraries/Curl.php"
          aria-label="Copy to clipboard"
          data-copied-hint="Copied!">
      <span class="octicon octicon-clippy"></span>
    </button>
  </div>

  <div class="breadcrumb">
    <span class='repo-root js-repo-root'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/philsturgeon/codeigniter-curl" class="" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">codeigniter-curl</span></a></span></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/philsturgeon/codeigniter-curl/tree/master/libraries" class="" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">libraries</span></a></span><span class="separator"> / </span><strong class="final-path">Curl.php</strong>
  </div>
</div>


  <div class="commit file-history-tease">
    <div class="file-history-tease-header">
        <img alt="" class="avatar" height="24" src="https://1.gravatar.com/avatar/03e2649e8bfdec132f29e1c6b3fc0142?d=https%3A%2F%2Fassets-cdn.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png&amp;r=x&amp;s=140" width="24" />
        <span class="author"><span>jdantzer</span></span>
        <time datetime="2014-01-15T21:35:32Z" is="relative-time">Jan 15, 2014</time>
        <div class="commit-title">
            <a href="/philsturgeon/codeigniter-curl/commit/160590c7a187b6c5c2bff0e6d72596391d60ac66" class="message" data-pjax="true" title="Fixed SSL host verification">Fixed SSL host verification</a>
        </div>
    </div>

    <div class="participation">
      <p class="quickstat">
        <a href="#blob_contributors_box" rel="facebox">
          <strong>6</strong>
           contributors
        </a>
      </p>
          <a class="avatar-link tooltipped tooltipped-s" aria-label="ricick" href="/philsturgeon/codeigniter-curl/commits/master/libraries/Curl.php?author=ricick"><img alt="Phil Douglas" class="avatar" data-user="137188" height="20" src="https://avatars0.githubusercontent.com/u/137188?v=2&amp;s=40" width="20" /></a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="rhbecker" href="/philsturgeon/codeigniter-curl/commits/master/libraries/Curl.php?author=rhbecker"><img alt="RH Becker" class="avatar" data-user="224732" height="20" src="https://avatars0.githubusercontent.com/u/224732?v=2&amp;s=40" width="20" /></a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="pwhelan" href="/philsturgeon/codeigniter-curl/commits/master/libraries/Curl.php?author=pwhelan"><img alt="Phillip Whelan" class="avatar" data-user="601645" height="20" src="https://avatars0.githubusercontent.com/u/601645?v=2&amp;s=40" width="20" /></a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="jimmypuckett" href="/philsturgeon/codeigniter-curl/commits/master/libraries/Curl.php?author=jimmypuckett"><img alt="Jimmy Puckett" class="avatar" data-user="3220069" height="20" src="https://avatars1.githubusercontent.com/u/3220069?v=2&amp;s=40" width="20" /></a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="chadhutchins" href="/philsturgeon/codeigniter-curl/commits/master/libraries/Curl.php?author=chadhutchins"><img alt="Chad Hutchins" class="avatar" data-user="47898" height="20" src="https://avatars3.githubusercontent.com/u/47898?v=2&amp;s=40" width="20" /></a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="serzhenko" href="/philsturgeon/codeigniter-curl/commits/master/libraries/Curl.php?author=serzhenko"><img alt="Dmitry Serzhenko" class="avatar" data-user="638475" height="20" src="https://avatars1.githubusercontent.com/u/638475?v=2&amp;s=40" width="20" /></a>


    </div>
    <div id="blob_contributors_box" style="display:none">
      <h2 class="facebox-header">Users who have contributed to this file</h2>
      <ul class="facebox-user-list">
          <li class="facebox-user-list-item">
            <img alt="Phil Douglas" data-user="137188" height="24" src="https://avatars2.githubusercontent.com/u/137188?v=2&amp;s=48" width="24" />
            <a href="/ricick">ricick</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="RH Becker" data-user="224732" height="24" src="https://avatars2.githubusercontent.com/u/224732?v=2&amp;s=48" width="24" />
            <a href="/rhbecker">rhbecker</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Phillip Whelan" data-user="601645" height="24" src="https://avatars2.githubusercontent.com/u/601645?v=2&amp;s=48" width="24" />
            <a href="/pwhelan">pwhelan</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Jimmy Puckett" data-user="3220069" height="24" src="https://avatars3.githubusercontent.com/u/3220069?v=2&amp;s=48" width="24" />
            <a href="/jimmypuckett">jimmypuckett</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Chad Hutchins" data-user="47898" height="24" src="https://avatars1.githubusercontent.com/u/47898?v=2&amp;s=48" width="24" />
            <a href="/chadhutchins">chadhutchins</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Dmitry Serzhenko" data-user="638475" height="24" src="https://avatars3.githubusercontent.com/u/638475?v=2&amp;s=48" width="24" />
            <a href="/serzhenko">serzhenko</a>
          </li>
      </ul>
    </div>
  </div>

<div class="file-box">
  <div class="file">
    <div class="meta clearfix">
      <div class="info file-name">
          <span>399 lines (328 sloc)</span>
          <span class="meta-divider"></span>
        <span>10.434 kb</span>
      </div>
      <div class="actions">
        <div class="button-group">
          <a href="/philsturgeon/codeigniter-curl/raw/master/libraries/Curl.php" class="minibutton " id="raw-url">Raw</a>
            <a href="/philsturgeon/codeigniter-curl/blame/master/libraries/Curl.php" class="minibutton js-update-url-with-hash">Blame</a>
          <a href="/philsturgeon/codeigniter-curl/commits/master/libraries/Curl.php" class="minibutton " rel="nofollow">History</a>
        </div><!-- /.button-group -->

          <a class="octicon-button tooltipped tooltipped-nw"
             href="http://windows.github.com" aria-label="Open this file in GitHub for Windows">
              <span class="octicon octicon-device-desktop"></span>
          </a>

            <a class="octicon-button disabled tooltipped tooltipped-w" href="#"
               aria-label="You must be signed in to make or propose changes"><span class="octicon octicon-pencil"></span></a>

          <a class="octicon-button danger disabled tooltipped tooltipped-w" href="#"
             aria-label="You must be signed in to make or propose changes">
          <span class="octicon octicon-trashcan"></span>
        </a>
      </div><!-- /.actions -->
    </div>
    
  <div class="blob-wrapper data type-php">
      <table class="highlight tab-size-8 js-file-line-container">
      <tr>
        <td id="L1" class="blob-num js-line-number" data-line-number="1"></td>
        <td id="LC1" class="blob-code js-file-line"><span class="o">&lt;?</span><span class="nx">php</span> <span class="nb">defined</span><span class="p">(</span><span class="s1">&#39;BASEPATH&#39;</span><span class="p">)</span> <span class="k">OR</span> <span class="k">exit</span><span class="p">(</span><span class="s1">&#39;No direct script access allowed&#39;</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L2" class="blob-num js-line-number" data-line-number="2"></td>
        <td id="LC2" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L3" class="blob-num js-line-number" data-line-number="3"></td>
        <td id="LC3" class="blob-code js-file-line"><span class="sd">/**</span></td>
      </tr>
      <tr>
        <td id="L4" class="blob-num js-line-number" data-line-number="4"></td>
        <td id="LC4" class="blob-code js-file-line"><span class="sd"> * CodeIgniter Curl Class</span></td>
      </tr>
      <tr>
        <td id="L5" class="blob-num js-line-number" data-line-number="5"></td>
        <td id="LC5" class="blob-code js-file-line"><span class="sd"> *</span></td>
      </tr>
      <tr>
        <td id="L6" class="blob-num js-line-number" data-line-number="6"></td>
        <td id="LC6" class="blob-code js-file-line"><span class="sd"> * Work with remote servers via cURL much easier than using the native PHP bindings.</span></td>
      </tr>
      <tr>
        <td id="L7" class="blob-num js-line-number" data-line-number="7"></td>
        <td id="LC7" class="blob-code js-file-line"><span class="sd"> *</span></td>
      </tr>
      <tr>
        <td id="L8" class="blob-num js-line-number" data-line-number="8"></td>
        <td id="LC8" class="blob-code js-file-line"><span class="sd"> * @package        	CodeIgniter</span></td>
      </tr>
      <tr>
        <td id="L9" class="blob-num js-line-number" data-line-number="9"></td>
        <td id="LC9" class="blob-code js-file-line"><span class="sd"> * @subpackage    	Libraries</span></td>
      </tr>
      <tr>
        <td id="L10" class="blob-num js-line-number" data-line-number="10"></td>
        <td id="LC10" class="blob-code js-file-line"><span class="sd"> * @category    	Libraries</span></td>
      </tr>
      <tr>
        <td id="L11" class="blob-num js-line-number" data-line-number="11"></td>
        <td id="LC11" class="blob-code js-file-line"><span class="sd"> * @author        	Philip Sturgeon</span></td>
      </tr>
      <tr>
        <td id="L12" class="blob-num js-line-number" data-line-number="12"></td>
        <td id="LC12" class="blob-code js-file-line"><span class="sd"> * @license         http://philsturgeon.co.uk/code/dbad-license</span></td>
      </tr>
      <tr>
        <td id="L13" class="blob-num js-line-number" data-line-number="13"></td>
        <td id="LC13" class="blob-code js-file-line"><span class="sd"> * @link			http://philsturgeon.co.uk/code/codeigniter-curl</span></td>
      </tr>
      <tr>
        <td id="L14" class="blob-num js-line-number" data-line-number="14"></td>
        <td id="LC14" class="blob-code js-file-line"><span class="sd"> */</span></td>
      </tr>
      <tr>
        <td id="L15" class="blob-num js-line-number" data-line-number="15"></td>
        <td id="LC15" class="blob-code js-file-line"><span class="k">class</span> <span class="nc">Curl</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L16" class="blob-num js-line-number" data-line-number="16"></td>
        <td id="LC16" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L17" class="blob-num js-line-number" data-line-number="17"></td>
        <td id="LC17" class="blob-code js-file-line">	<span class="k">protected</span> <span class="nv">$_ci</span><span class="p">;</span>                 <span class="c1">// CodeIgniter instance</span></td>
      </tr>
      <tr>
        <td id="L18" class="blob-num js-line-number" data-line-number="18"></td>
        <td id="LC18" class="blob-code js-file-line">	<span class="k">protected</span> <span class="nv">$response</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span>       <span class="c1">// Contains the cURL response for debug</span></td>
      </tr>
      <tr>
        <td id="L19" class="blob-num js-line-number" data-line-number="19"></td>
        <td id="LC19" class="blob-code js-file-line">	<span class="k">protected</span> <span class="nv">$session</span><span class="p">;</span>             <span class="c1">// Contains the cURL handler for a session</span></td>
      </tr>
      <tr>
        <td id="L20" class="blob-num js-line-number" data-line-number="20"></td>
        <td id="LC20" class="blob-code js-file-line">	<span class="k">protected</span> <span class="nv">$url</span><span class="p">;</span>                 <span class="c1">// URL of the session</span></td>
      </tr>
      <tr>
        <td id="L21" class="blob-num js-line-number" data-line-number="21"></td>
        <td id="LC21" class="blob-code js-file-line">	<span class="k">protected</span> <span class="nv">$options</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span>   <span class="c1">// Populates curl_setopt_array</span></td>
      </tr>
      <tr>
        <td id="L22" class="blob-num js-line-number" data-line-number="22"></td>
        <td id="LC22" class="blob-code js-file-line">	<span class="k">protected</span> <span class="nv">$headers</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span>   <span class="c1">// Populates extra HTTP headers</span></td>
      </tr>
      <tr>
        <td id="L23" class="blob-num js-line-number" data-line-number="23"></td>
        <td id="LC23" class="blob-code js-file-line">	<span class="k">public</span> <span class="nv">$error_code</span><span class="p">;</span>             <span class="c1">// Error code returned as an int</span></td>
      </tr>
      <tr>
        <td id="L24" class="blob-num js-line-number" data-line-number="24"></td>
        <td id="LC24" class="blob-code js-file-line">	<span class="k">public</span> <span class="nv">$error_string</span><span class="p">;</span>           <span class="c1">// Error message returned as a string</span></td>
      </tr>
      <tr>
        <td id="L25" class="blob-num js-line-number" data-line-number="25"></td>
        <td id="LC25" class="blob-code js-file-line">	<span class="k">public</span> <span class="nv">$info</span><span class="p">;</span>                   <span class="c1">// Returned after request (elapsed time, etc)</span></td>
      </tr>
      <tr>
        <td id="L26" class="blob-num js-line-number" data-line-number="26"></td>
        <td id="LC26" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L27" class="blob-num js-line-number" data-line-number="27"></td>
        <td id="LC27" class="blob-code js-file-line">	<span class="k">function</span> <span class="nf">__construct</span><span class="p">(</span><span class="nv">$url</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L28" class="blob-num js-line-number" data-line-number="28"></td>
        <td id="LC28" class="blob-code js-file-line">	<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L29" class="blob-num js-line-number" data-line-number="29"></td>
        <td id="LC29" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_ci</span> <span class="o">=</span> <span class="o">&amp;</span> <span class="nx">get_instance</span><span class="p">();</span></td>
      </tr>
      <tr>
        <td id="L30" class="blob-num js-line-number" data-line-number="30"></td>
        <td id="LC30" class="blob-code js-file-line">		<span class="nx">log_message</span><span class="p">(</span><span class="s1">&#39;debug&#39;</span><span class="p">,</span> <span class="s1">&#39;cURL Class Initialized&#39;</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L31" class="blob-num js-line-number" data-line-number="31"></td>
        <td id="LC31" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L32" class="blob-num js-line-number" data-line-number="32"></td>
        <td id="LC32" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span> <span class="o">!</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">is_enabled</span><span class="p">())</span></td>
      </tr>
      <tr>
        <td id="L33" class="blob-num js-line-number" data-line-number="33"></td>
        <td id="LC33" class="blob-code js-file-line">		<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L34" class="blob-num js-line-number" data-line-number="34"></td>
        <td id="LC34" class="blob-code js-file-line">			<span class="nx">log_message</span><span class="p">(</span><span class="s1">&#39;error&#39;</span><span class="p">,</span> <span class="s1">&#39;cURL Class - PHP was not built with cURL enabled. Rebuild PHP with --with-curl to use cURL.&#39;</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L35" class="blob-num js-line-number" data-line-number="35"></td>
        <td id="LC35" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L36" class="blob-num js-line-number" data-line-number="36"></td>
        <td id="LC36" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L37" class="blob-num js-line-number" data-line-number="37"></td>
        <td id="LC37" class="blob-code js-file-line">		<span class="nv">$url</span> <span class="k">AND</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">create</span><span class="p">(</span><span class="nv">$url</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L38" class="blob-num js-line-number" data-line-number="38"></td>
        <td id="LC38" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L39" class="blob-num js-line-number" data-line-number="39"></td>
        <td id="LC39" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L40" class="blob-num js-line-number" data-line-number="40"></td>
        <td id="LC40" class="blob-code js-file-line">	<span class="k">public</span> <span class="k">function</span> <span class="nf">__call</span><span class="p">(</span><span class="nv">$method</span><span class="p">,</span> <span class="nv">$arguments</span><span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L41" class="blob-num js-line-number" data-line-number="41"></td>
        <td id="LC41" class="blob-code js-file-line">	<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L42" class="blob-num js-line-number" data-line-number="42"></td>
        <td id="LC42" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span><span class="nb">in_array</span><span class="p">(</span><span class="nv">$method</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;simple_get&#39;</span><span class="p">,</span> <span class="s1">&#39;simple_post&#39;</span><span class="p">,</span> <span class="s1">&#39;simple_put&#39;</span><span class="p">,</span> <span class="s1">&#39;simple_delete&#39;</span><span class="p">,</span> <span class="s1">&#39;simple_patch&#39;</span><span class="p">)))</span></td>
      </tr>
      <tr>
        <td id="L43" class="blob-num js-line-number" data-line-number="43"></td>
        <td id="LC43" class="blob-code js-file-line">		<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L44" class="blob-num js-line-number" data-line-number="44"></td>
        <td id="LC44" class="blob-code js-file-line">			<span class="c1">// Take off the &quot;simple_&quot; and past get/post/put/delete/patch to _simple_call</span></td>
      </tr>
      <tr>
        <td id="L45" class="blob-num js-line-number" data-line-number="45"></td>
        <td id="LC45" class="blob-code js-file-line">			<span class="nv">$verb</span> <span class="o">=</span> <span class="nb">str_replace</span><span class="p">(</span><span class="s1">&#39;simple_&#39;</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$method</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L46" class="blob-num js-line-number" data-line-number="46"></td>
        <td id="LC46" class="blob-code js-file-line">			<span class="nb">array_unshift</span><span class="p">(</span><span class="nv">$arguments</span><span class="p">,</span> <span class="nv">$verb</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L47" class="blob-num js-line-number" data-line-number="47"></td>
        <td id="LC47" class="blob-code js-file-line">			<span class="k">return</span> <span class="nb">call_user_func_array</span><span class="p">(</span><span class="k">array</span><span class="p">(</span><span class="nv">$this</span><span class="p">,</span> <span class="s1">&#39;_simple_call&#39;</span><span class="p">),</span> <span class="nv">$arguments</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L48" class="blob-num js-line-number" data-line-number="48"></td>
        <td id="LC48" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L49" class="blob-num js-line-number" data-line-number="49"></td>
        <td id="LC49" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L50" class="blob-num js-line-number" data-line-number="50"></td>
        <td id="LC50" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L51" class="blob-num js-line-number" data-line-number="51"></td>
        <td id="LC51" class="blob-code js-file-line">	<span class="cm">/* =================================================================================</span></td>
      </tr>
      <tr>
        <td id="L52" class="blob-num js-line-number" data-line-number="52"></td>
        <td id="LC52" class="blob-code js-file-line"><span class="cm">	 * SIMPLE METHODS</span></td>
      </tr>
      <tr>
        <td id="L53" class="blob-num js-line-number" data-line-number="53"></td>
        <td id="LC53" class="blob-code js-file-line"><span class="cm">	 * Using these methods you can make a quick and easy cURL call with one line.</span></td>
      </tr>
      <tr>
        <td id="L54" class="blob-num js-line-number" data-line-number="54"></td>
        <td id="LC54" class="blob-code js-file-line"><span class="cm">	 * ================================================================================= */</span></td>
      </tr>
      <tr>
        <td id="L55" class="blob-num js-line-number" data-line-number="55"></td>
        <td id="LC55" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L56" class="blob-num js-line-number" data-line-number="56"></td>
        <td id="LC56" class="blob-code js-file-line">	<span class="k">public</span> <span class="k">function</span> <span class="nf">_simple_call</span><span class="p">(</span><span class="nv">$method</span><span class="p">,</span> <span class="nv">$url</span><span class="p">,</span> <span class="nv">$params</span> <span class="o">=</span> <span class="k">array</span><span class="p">(),</span> <span class="nv">$options</span> <span class="o">=</span> <span class="k">array</span><span class="p">())</span></td>
      </tr>
      <tr>
        <td id="L57" class="blob-num js-line-number" data-line-number="57"></td>
        <td id="LC57" class="blob-code js-file-line">	<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L58" class="blob-num js-line-number" data-line-number="58"></td>
        <td id="LC58" class="blob-code js-file-line">		<span class="c1">// Get acts differently, as it doesnt accept parameters in the same way</span></td>
      </tr>
      <tr>
        <td id="L59" class="blob-num js-line-number" data-line-number="59"></td>
        <td id="LC59" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span><span class="nv">$method</span> <span class="o">===</span> <span class="s1">&#39;get&#39;</span><span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L60" class="blob-num js-line-number" data-line-number="60"></td>
        <td id="LC60" class="blob-code js-file-line">		<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L61" class="blob-num js-line-number" data-line-number="61"></td>
        <td id="LC61" class="blob-code js-file-line">			<span class="c1">// If a URL is provided, create new session</span></td>
      </tr>
      <tr>
        <td id="L62" class="blob-num js-line-number" data-line-number="62"></td>
        <td id="LC62" class="blob-code js-file-line">			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">create</span><span class="p">(</span><span class="nv">$url</span><span class="o">.</span><span class="p">(</span><span class="nv">$params</span> <span class="o">?</span> <span class="s1">&#39;?&#39;</span><span class="o">.</span><span class="nb">http_build_query</span><span class="p">(</span><span class="nv">$params</span><span class="p">,</span> <span class="k">NULL</span><span class="p">,</span> <span class="s1">&#39;&amp;&#39;</span><span class="p">)</span> <span class="o">:</span> <span class="s1">&#39;&#39;</span><span class="p">));</span></td>
      </tr>
      <tr>
        <td id="L63" class="blob-num js-line-number" data-line-number="63"></td>
        <td id="LC63" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L64" class="blob-num js-line-number" data-line-number="64"></td>
        <td id="LC64" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L65" class="blob-num js-line-number" data-line-number="65"></td>
        <td id="LC65" class="blob-code js-file-line">		<span class="k">else</span></td>
      </tr>
      <tr>
        <td id="L66" class="blob-num js-line-number" data-line-number="66"></td>
        <td id="LC66" class="blob-code js-file-line">		<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L67" class="blob-num js-line-number" data-line-number="67"></td>
        <td id="LC67" class="blob-code js-file-line">			<span class="c1">// If a URL is provided, create new session</span></td>
      </tr>
      <tr>
        <td id="L68" class="blob-num js-line-number" data-line-number="68"></td>
        <td id="LC68" class="blob-code js-file-line">			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">create</span><span class="p">(</span><span class="nv">$url</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L69" class="blob-num js-line-number" data-line-number="69"></td>
        <td id="LC69" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L70" class="blob-num js-line-number" data-line-number="70"></td>
        <td id="LC70" class="blob-code js-file-line">			<span class="nv">$this</span><span class="o">-&gt;</span><span class="p">{</span><span class="nv">$method</span><span class="p">}(</span><span class="nv">$params</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L71" class="blob-num js-line-number" data-line-number="71"></td>
        <td id="LC71" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L72" class="blob-num js-line-number" data-line-number="72"></td>
        <td id="LC72" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L73" class="blob-num js-line-number" data-line-number="73"></td>
        <td id="LC73" class="blob-code js-file-line">		<span class="c1">// Add in the specific options provided</span></td>
      </tr>
      <tr>
        <td id="L74" class="blob-num js-line-number" data-line-number="74"></td>
        <td id="LC74" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">options</span><span class="p">(</span><span class="nv">$options</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L75" class="blob-num js-line-number" data-line-number="75"></td>
        <td id="LC75" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L76" class="blob-num js-line-number" data-line-number="76"></td>
        <td id="LC76" class="blob-code js-file-line">		<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">execute</span><span class="p">();</span></td>
      </tr>
      <tr>
        <td id="L77" class="blob-num js-line-number" data-line-number="77"></td>
        <td id="LC77" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L78" class="blob-num js-line-number" data-line-number="78"></td>
        <td id="LC78" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L79" class="blob-num js-line-number" data-line-number="79"></td>
        <td id="LC79" class="blob-code js-file-line">	<span class="k">public</span> <span class="k">function</span> <span class="nf">simple_ftp_get</span><span class="p">(</span><span class="nv">$url</span><span class="p">,</span> <span class="nv">$file_path</span><span class="p">,</span> <span class="nv">$username</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$password</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L80" class="blob-num js-line-number" data-line-number="80"></td>
        <td id="LC80" class="blob-code js-file-line">	<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L81" class="blob-num js-line-number" data-line-number="81"></td>
        <td id="LC81" class="blob-code js-file-line">		<span class="c1">// If there is no ftp:// or any protocol entered, add ftp://</span></td>
      </tr>
      <tr>
        <td id="L82" class="blob-num js-line-number" data-line-number="82"></td>
        <td id="LC82" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span> <span class="o">!</span> <span class="nb">preg_match</span><span class="p">(</span><span class="s1">&#39;!^(ftp|sftp)://! i&#39;</span><span class="p">,</span> <span class="nv">$url</span><span class="p">))</span></td>
      </tr>
      <tr>
        <td id="L83" class="blob-num js-line-number" data-line-number="83"></td>
        <td id="LC83" class="blob-code js-file-line">		<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L84" class="blob-num js-line-number" data-line-number="84"></td>
        <td id="LC84" class="blob-code js-file-line">			<span class="nv">$url</span> <span class="o">=</span> <span class="s1">&#39;ftp://&#39;</span> <span class="o">.</span> <span class="nv">$url</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L85" class="blob-num js-line-number" data-line-number="85"></td>
        <td id="LC85" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L86" class="blob-num js-line-number" data-line-number="86"></td>
        <td id="LC86" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L87" class="blob-num js-line-number" data-line-number="87"></td>
        <td id="LC87" class="blob-code js-file-line">		<span class="c1">// Use an FTP login</span></td>
      </tr>
      <tr>
        <td id="L88" class="blob-num js-line-number" data-line-number="88"></td>
        <td id="LC88" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span><span class="nv">$username</span> <span class="o">!=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L89" class="blob-num js-line-number" data-line-number="89"></td>
        <td id="LC89" class="blob-code js-file-line">		<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L90" class="blob-num js-line-number" data-line-number="90"></td>
        <td id="LC90" class="blob-code js-file-line">			<span class="nv">$auth_string</span> <span class="o">=</span> <span class="nv">$username</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L91" class="blob-num js-line-number" data-line-number="91"></td>
        <td id="LC91" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L92" class="blob-num js-line-number" data-line-number="92"></td>
        <td id="LC92" class="blob-code js-file-line">			<span class="k">if</span> <span class="p">(</span><span class="nv">$password</span> <span class="o">!=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L93" class="blob-num js-line-number" data-line-number="93"></td>
        <td id="LC93" class="blob-code js-file-line">			<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L94" class="blob-num js-line-number" data-line-number="94"></td>
        <td id="LC94" class="blob-code js-file-line">				<span class="nv">$auth_string</span> <span class="o">.=</span> <span class="s1">&#39;:&#39;</span> <span class="o">.</span> <span class="nv">$password</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L95" class="blob-num js-line-number" data-line-number="95"></td>
        <td id="LC95" class="blob-code js-file-line">			<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L96" class="blob-num js-line-number" data-line-number="96"></td>
        <td id="LC96" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L97" class="blob-num js-line-number" data-line-number="97"></td>
        <td id="LC97" class="blob-code js-file-line">			<span class="c1">// Add the user auth string after the protocol</span></td>
      </tr>
      <tr>
        <td id="L98" class="blob-num js-line-number" data-line-number="98"></td>
        <td id="LC98" class="blob-code js-file-line">			<span class="nv">$url</span> <span class="o">=</span> <span class="nb">str_replace</span><span class="p">(</span><span class="s1">&#39;://&#39;</span><span class="p">,</span> <span class="s1">&#39;://&#39;</span> <span class="o">.</span> <span class="nv">$auth_string</span> <span class="o">.</span> <span class="s1">&#39;@&#39;</span><span class="p">,</span> <span class="nv">$url</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L99" class="blob-num js-line-number" data-line-number="99"></td>
        <td id="LC99" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L100" class="blob-num js-line-number" data-line-number="100"></td>
        <td id="LC100" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L101" class="blob-num js-line-number" data-line-number="101"></td>
        <td id="LC101" class="blob-code js-file-line">		<span class="c1">// Add the filepath</span></td>
      </tr>
      <tr>
        <td id="L102" class="blob-num js-line-number" data-line-number="102"></td>
        <td id="LC102" class="blob-code js-file-line">		<span class="nv">$url</span> <span class="o">.=</span> <span class="nv">$file_path</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L103" class="blob-num js-line-number" data-line-number="103"></td>
        <td id="LC103" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L104" class="blob-num js-line-number" data-line-number="104"></td>
        <td id="LC104" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">option</span><span class="p">(</span><span class="nx">CURLOPT_BINARYTRANSFER</span><span class="p">,</span> <span class="k">TRUE</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L105" class="blob-num js-line-number" data-line-number="105"></td>
        <td id="LC105" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">option</span><span class="p">(</span><span class="nx">CURLOPT_VERBOSE</span><span class="p">,</span> <span class="k">TRUE</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L106" class="blob-num js-line-number" data-line-number="106"></td>
        <td id="LC106" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L107" class="blob-num js-line-number" data-line-number="107"></td>
        <td id="LC107" class="blob-code js-file-line">		<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">execute</span><span class="p">();</span></td>
      </tr>
      <tr>
        <td id="L108" class="blob-num js-line-number" data-line-number="108"></td>
        <td id="LC108" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L109" class="blob-num js-line-number" data-line-number="109"></td>
        <td id="LC109" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L110" class="blob-num js-line-number" data-line-number="110"></td>
        <td id="LC110" class="blob-code js-file-line">	<span class="cm">/* =================================================================================</span></td>
      </tr>
      <tr>
        <td id="L111" class="blob-num js-line-number" data-line-number="111"></td>
        <td id="LC111" class="blob-code js-file-line"><span class="cm">	 * ADVANCED METHODS</span></td>
      </tr>
      <tr>
        <td id="L112" class="blob-num js-line-number" data-line-number="112"></td>
        <td id="LC112" class="blob-code js-file-line"><span class="cm">	 * Use these methods to build up more complex queries</span></td>
      </tr>
      <tr>
        <td id="L113" class="blob-num js-line-number" data-line-number="113"></td>
        <td id="LC113" class="blob-code js-file-line"><span class="cm">	 * ================================================================================= */</span></td>
      </tr>
      <tr>
        <td id="L114" class="blob-num js-line-number" data-line-number="114"></td>
        <td id="LC114" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L115" class="blob-num js-line-number" data-line-number="115"></td>
        <td id="LC115" class="blob-code js-file-line">	<span class="k">public</span> <span class="k">function</span> <span class="nf">post</span><span class="p">(</span><span class="nv">$params</span> <span class="o">=</span> <span class="k">array</span><span class="p">(),</span> <span class="nv">$options</span> <span class="o">=</span> <span class="k">array</span><span class="p">())</span></td>
      </tr>
      <tr>
        <td id="L116" class="blob-num js-line-number" data-line-number="116"></td>
        <td id="LC116" class="blob-code js-file-line">	<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L117" class="blob-num js-line-number" data-line-number="117"></td>
        <td id="LC117" class="blob-code js-file-line">		<span class="c1">// If its an array (instead of a query string) then format it correctly</span></td>
      </tr>
      <tr>
        <td id="L118" class="blob-num js-line-number" data-line-number="118"></td>
        <td id="LC118" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span><span class="nb">is_array</span><span class="p">(</span><span class="nv">$params</span><span class="p">))</span></td>
      </tr>
      <tr>
        <td id="L119" class="blob-num js-line-number" data-line-number="119"></td>
        <td id="LC119" class="blob-code js-file-line">		<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L120" class="blob-num js-line-number" data-line-number="120"></td>
        <td id="LC120" class="blob-code js-file-line">			<span class="nv">$params</span> <span class="o">=</span> <span class="nb">http_build_query</span><span class="p">(</span><span class="nv">$params</span><span class="p">,</span> <span class="k">NULL</span><span class="p">,</span> <span class="s1">&#39;&amp;&#39;</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L121" class="blob-num js-line-number" data-line-number="121"></td>
        <td id="LC121" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L122" class="blob-num js-line-number" data-line-number="122"></td>
        <td id="LC122" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L123" class="blob-num js-line-number" data-line-number="123"></td>
        <td id="LC123" class="blob-code js-file-line">		<span class="c1">// Add in the specific options provided</span></td>
      </tr>
      <tr>
        <td id="L124" class="blob-num js-line-number" data-line-number="124"></td>
        <td id="LC124" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">options</span><span class="p">(</span><span class="nv">$options</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L125" class="blob-num js-line-number" data-line-number="125"></td>
        <td id="LC125" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L126" class="blob-num js-line-number" data-line-number="126"></td>
        <td id="LC126" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">http_method</span><span class="p">(</span><span class="s1">&#39;post&#39;</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L127" class="blob-num js-line-number" data-line-number="127"></td>
        <td id="LC127" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L128" class="blob-num js-line-number" data-line-number="128"></td>
        <td id="LC128" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">option</span><span class="p">(</span><span class="nx">CURLOPT_POST</span><span class="p">,</span> <span class="k">TRUE</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L129" class="blob-num js-line-number" data-line-number="129"></td>
        <td id="LC129" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">option</span><span class="p">(</span><span class="nx">CURLOPT_POSTFIELDS</span><span class="p">,</span> <span class="nv">$params</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L130" class="blob-num js-line-number" data-line-number="130"></td>
        <td id="LC130" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L131" class="blob-num js-line-number" data-line-number="131"></td>
        <td id="LC131" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L132" class="blob-num js-line-number" data-line-number="132"></td>
        <td id="LC132" class="blob-code js-file-line">	<span class="k">public</span> <span class="k">function</span> <span class="nf">put</span><span class="p">(</span><span class="nv">$params</span> <span class="o">=</span> <span class="k">array</span><span class="p">(),</span> <span class="nv">$options</span> <span class="o">=</span> <span class="k">array</span><span class="p">())</span></td>
      </tr>
      <tr>
        <td id="L133" class="blob-num js-line-number" data-line-number="133"></td>
        <td id="LC133" class="blob-code js-file-line">	<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L134" class="blob-num js-line-number" data-line-number="134"></td>
        <td id="LC134" class="blob-code js-file-line">		<span class="c1">// If its an array (instead of a query string) then format it correctly</span></td>
      </tr>
      <tr>
        <td id="L135" class="blob-num js-line-number" data-line-number="135"></td>
        <td id="LC135" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span><span class="nb">is_array</span><span class="p">(</span><span class="nv">$params</span><span class="p">))</span></td>
      </tr>
      <tr>
        <td id="L136" class="blob-num js-line-number" data-line-number="136"></td>
        <td id="LC136" class="blob-code js-file-line">		<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L137" class="blob-num js-line-number" data-line-number="137"></td>
        <td id="LC137" class="blob-code js-file-line">			<span class="nv">$params</span> <span class="o">=</span> <span class="nb">http_build_query</span><span class="p">(</span><span class="nv">$params</span><span class="p">,</span> <span class="k">NULL</span><span class="p">,</span> <span class="s1">&#39;&amp;&#39;</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L138" class="blob-num js-line-number" data-line-number="138"></td>
        <td id="LC138" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L139" class="blob-num js-line-number" data-line-number="139"></td>
        <td id="LC139" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L140" class="blob-num js-line-number" data-line-number="140"></td>
        <td id="LC140" class="blob-code js-file-line">		<span class="c1">// Add in the specific options provided</span></td>
      </tr>
      <tr>
        <td id="L141" class="blob-num js-line-number" data-line-number="141"></td>
        <td id="LC141" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">options</span><span class="p">(</span><span class="nv">$options</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L142" class="blob-num js-line-number" data-line-number="142"></td>
        <td id="LC142" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L143" class="blob-num js-line-number" data-line-number="143"></td>
        <td id="LC143" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">http_method</span><span class="p">(</span><span class="s1">&#39;put&#39;</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L144" class="blob-num js-line-number" data-line-number="144"></td>
        <td id="LC144" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">option</span><span class="p">(</span><span class="nx">CURLOPT_POSTFIELDS</span><span class="p">,</span> <span class="nv">$params</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L145" class="blob-num js-line-number" data-line-number="145"></td>
        <td id="LC145" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L146" class="blob-num js-line-number" data-line-number="146"></td>
        <td id="LC146" class="blob-code js-file-line">		<span class="c1">// Override method, I think this overrides $_POST with PUT data but... we&#39;ll see eh?</span></td>
      </tr>
      <tr>
        <td id="L147" class="blob-num js-line-number" data-line-number="147"></td>
        <td id="LC147" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">option</span><span class="p">(</span><span class="nx">CURLOPT_HTTPHEADER</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;X-HTTP-Method-Override: PUT&#39;</span><span class="p">));</span></td>
      </tr>
      <tr>
        <td id="L148" class="blob-num js-line-number" data-line-number="148"></td>
        <td id="LC148" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L149" class="blob-num js-line-number" data-line-number="149"></td>
        <td id="LC149" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L150" class="blob-num js-line-number" data-line-number="150"></td>
        <td id="LC150" class="blob-code js-file-line">	<span class="k">public</span> <span class="k">function</span> <span class="nf">patch</span><span class="p">(</span><span class="nv">$params</span> <span class="o">=</span> <span class="k">array</span><span class="p">(),</span> <span class="nv">$options</span> <span class="o">=</span> <span class="k">array</span><span class="p">())</span></td>
      </tr>
      <tr>
        <td id="L151" class="blob-num js-line-number" data-line-number="151"></td>
        <td id="LC151" class="blob-code js-file-line">	<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L152" class="blob-num js-line-number" data-line-number="152"></td>
        <td id="LC152" class="blob-code js-file-line">		<span class="c1">// If its an array (instead of a query string) then format it correctly</span></td>
      </tr>
      <tr>
        <td id="L153" class="blob-num js-line-number" data-line-number="153"></td>
        <td id="LC153" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span><span class="nb">is_array</span><span class="p">(</span><span class="nv">$params</span><span class="p">))</span></td>
      </tr>
      <tr>
        <td id="L154" class="blob-num js-line-number" data-line-number="154"></td>
        <td id="LC154" class="blob-code js-file-line">		<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L155" class="blob-num js-line-number" data-line-number="155"></td>
        <td id="LC155" class="blob-code js-file-line">			<span class="nv">$params</span> <span class="o">=</span> <span class="nb">http_build_query</span><span class="p">(</span><span class="nv">$params</span><span class="p">,</span> <span class="k">NULL</span><span class="p">,</span> <span class="s1">&#39;&amp;&#39;</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L156" class="blob-num js-line-number" data-line-number="156"></td>
        <td id="LC156" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L157" class="blob-num js-line-number" data-line-number="157"></td>
        <td id="LC157" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L158" class="blob-num js-line-number" data-line-number="158"></td>
        <td id="LC158" class="blob-code js-file-line">		<span class="c1">// Add in the specific options provided</span></td>
      </tr>
      <tr>
        <td id="L159" class="blob-num js-line-number" data-line-number="159"></td>
        <td id="LC159" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">options</span><span class="p">(</span><span class="nv">$options</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L160" class="blob-num js-line-number" data-line-number="160"></td>
        <td id="LC160" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L161" class="blob-num js-line-number" data-line-number="161"></td>
        <td id="LC161" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">http_method</span><span class="p">(</span><span class="s1">&#39;patch&#39;</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L162" class="blob-num js-line-number" data-line-number="162"></td>
        <td id="LC162" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">option</span><span class="p">(</span><span class="nx">CURLOPT_POSTFIELDS</span><span class="p">,</span> <span class="nv">$params</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L163" class="blob-num js-line-number" data-line-number="163"></td>
        <td id="LC163" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L164" class="blob-num js-line-number" data-line-number="164"></td>
        <td id="LC164" class="blob-code js-file-line">		<span class="c1">// Override method, I think this overrides $_POST with PATCH data but... we&#39;ll see eh?</span></td>
      </tr>
      <tr>
        <td id="L165" class="blob-num js-line-number" data-line-number="165"></td>
        <td id="LC165" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">option</span><span class="p">(</span><span class="nx">CURLOPT_HTTPHEADER</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;X-HTTP-Method-Override: PATCH&#39;</span><span class="p">));</span></td>
      </tr>
      <tr>
        <td id="L166" class="blob-num js-line-number" data-line-number="166"></td>
        <td id="LC166" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L167" class="blob-num js-line-number" data-line-number="167"></td>
        <td id="LC167" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L168" class="blob-num js-line-number" data-line-number="168"></td>
        <td id="LC168" class="blob-code js-file-line">	<span class="k">public</span> <span class="k">function</span> <span class="nf">delete</span><span class="p">(</span><span class="nv">$params</span><span class="p">,</span> <span class="nv">$options</span> <span class="o">=</span> <span class="k">array</span><span class="p">())</span></td>
      </tr>
      <tr>
        <td id="L169" class="blob-num js-line-number" data-line-number="169"></td>
        <td id="LC169" class="blob-code js-file-line">	<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L170" class="blob-num js-line-number" data-line-number="170"></td>
        <td id="LC170" class="blob-code js-file-line">		<span class="c1">// If its an array (instead of a query string) then format it correctly</span></td>
      </tr>
      <tr>
        <td id="L171" class="blob-num js-line-number" data-line-number="171"></td>
        <td id="LC171" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span><span class="nb">is_array</span><span class="p">(</span><span class="nv">$params</span><span class="p">))</span></td>
      </tr>
      <tr>
        <td id="L172" class="blob-num js-line-number" data-line-number="172"></td>
        <td id="LC172" class="blob-code js-file-line">		<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L173" class="blob-num js-line-number" data-line-number="173"></td>
        <td id="LC173" class="blob-code js-file-line">			<span class="nv">$params</span> <span class="o">=</span> <span class="nb">http_build_query</span><span class="p">(</span><span class="nv">$params</span><span class="p">,</span> <span class="k">NULL</span><span class="p">,</span> <span class="s1">&#39;&amp;&#39;</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L174" class="blob-num js-line-number" data-line-number="174"></td>
        <td id="LC174" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L175" class="blob-num js-line-number" data-line-number="175"></td>
        <td id="LC175" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L176" class="blob-num js-line-number" data-line-number="176"></td>
        <td id="LC176" class="blob-code js-file-line">		<span class="c1">// Add in the specific options provided</span></td>
      </tr>
      <tr>
        <td id="L177" class="blob-num js-line-number" data-line-number="177"></td>
        <td id="LC177" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">options</span><span class="p">(</span><span class="nv">$options</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L178" class="blob-num js-line-number" data-line-number="178"></td>
        <td id="LC178" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L179" class="blob-num js-line-number" data-line-number="179"></td>
        <td id="LC179" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">http_method</span><span class="p">(</span><span class="s1">&#39;delete&#39;</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L180" class="blob-num js-line-number" data-line-number="180"></td>
        <td id="LC180" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L181" class="blob-num js-line-number" data-line-number="181"></td>
        <td id="LC181" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">option</span><span class="p">(</span><span class="nx">CURLOPT_POSTFIELDS</span><span class="p">,</span> <span class="nv">$params</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L182" class="blob-num js-line-number" data-line-number="182"></td>
        <td id="LC182" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L183" class="blob-num js-line-number" data-line-number="183"></td>
        <td id="LC183" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L184" class="blob-num js-line-number" data-line-number="184"></td>
        <td id="LC184" class="blob-code js-file-line">	<span class="k">public</span> <span class="k">function</span> <span class="nf">set_cookies</span><span class="p">(</span><span class="nv">$params</span> <span class="o">=</span> <span class="k">array</span><span class="p">())</span></td>
      </tr>
      <tr>
        <td id="L185" class="blob-num js-line-number" data-line-number="185"></td>
        <td id="LC185" class="blob-code js-file-line">	<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L186" class="blob-num js-line-number" data-line-number="186"></td>
        <td id="LC186" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span><span class="nb">is_array</span><span class="p">(</span><span class="nv">$params</span><span class="p">))</span></td>
      </tr>
      <tr>
        <td id="L187" class="blob-num js-line-number" data-line-number="187"></td>
        <td id="LC187" class="blob-code js-file-line">		<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L188" class="blob-num js-line-number" data-line-number="188"></td>
        <td id="LC188" class="blob-code js-file-line">			<span class="nv">$params</span> <span class="o">=</span> <span class="nb">http_build_query</span><span class="p">(</span><span class="nv">$params</span><span class="p">,</span> <span class="k">NULL</span><span class="p">,</span> <span class="s1">&#39;&amp;&#39;</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L189" class="blob-num js-line-number" data-line-number="189"></td>
        <td id="LC189" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L190" class="blob-num js-line-number" data-line-number="190"></td>
        <td id="LC190" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L191" class="blob-num js-line-number" data-line-number="191"></td>
        <td id="LC191" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">option</span><span class="p">(</span><span class="nx">CURLOPT_COOKIE</span><span class="p">,</span> <span class="nv">$params</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L192" class="blob-num js-line-number" data-line-number="192"></td>
        <td id="LC192" class="blob-code js-file-line">		<span class="k">return</span> <span class="nv">$this</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L193" class="blob-num js-line-number" data-line-number="193"></td>
        <td id="LC193" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L194" class="blob-num js-line-number" data-line-number="194"></td>
        <td id="LC194" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L195" class="blob-num js-line-number" data-line-number="195"></td>
        <td id="LC195" class="blob-code js-file-line">	<span class="k">public</span> <span class="k">function</span> <span class="nf">http_header</span><span class="p">(</span><span class="nv">$header</span><span class="p">,</span> <span class="nv">$content</span> <span class="o">=</span> <span class="k">NULL</span><span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L196" class="blob-num js-line-number" data-line-number="196"></td>
        <td id="LC196" class="blob-code js-file-line">	<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L197" class="blob-num js-line-number" data-line-number="197"></td>
        <td id="LC197" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">headers</span><span class="p">[]</span> <span class="o">=</span> <span class="nv">$content</span> <span class="o">?</span> <span class="nv">$header</span> <span class="o">.</span> <span class="s1">&#39;: &#39;</span> <span class="o">.</span> <span class="nv">$content</span> <span class="o">:</span> <span class="nv">$header</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L198" class="blob-num js-line-number" data-line-number="198"></td>
        <td id="LC198" class="blob-code js-file-line">		<span class="k">return</span> <span class="nv">$this</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L199" class="blob-num js-line-number" data-line-number="199"></td>
        <td id="LC199" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L200" class="blob-num js-line-number" data-line-number="200"></td>
        <td id="LC200" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L201" class="blob-num js-line-number" data-line-number="201"></td>
        <td id="LC201" class="blob-code js-file-line">	<span class="k">public</span> <span class="k">function</span> <span class="nf">http_method</span><span class="p">(</span><span class="nv">$method</span><span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L202" class="blob-num js-line-number" data-line-number="202"></td>
        <td id="LC202" class="blob-code js-file-line">	<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L203" class="blob-num js-line-number" data-line-number="203"></td>
        <td id="LC203" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">options</span><span class="p">[</span><span class="nx">CURLOPT_CUSTOMREQUEST</span><span class="p">]</span> <span class="o">=</span> <span class="nb">strtoupper</span><span class="p">(</span><span class="nv">$method</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L204" class="blob-num js-line-number" data-line-number="204"></td>
        <td id="LC204" class="blob-code js-file-line">		<span class="k">return</span> <span class="nv">$this</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L205" class="blob-num js-line-number" data-line-number="205"></td>
        <td id="LC205" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L206" class="blob-num js-line-number" data-line-number="206"></td>
        <td id="LC206" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L207" class="blob-num js-line-number" data-line-number="207"></td>
        <td id="LC207" class="blob-code js-file-line">	<span class="k">public</span> <span class="k">function</span> <span class="nf">http_login</span><span class="p">(</span><span class="nv">$username</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$password</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$type</span> <span class="o">=</span> <span class="s1">&#39;any&#39;</span><span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L208" class="blob-num js-line-number" data-line-number="208"></td>
        <td id="LC208" class="blob-code js-file-line">	<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L209" class="blob-num js-line-number" data-line-number="209"></td>
        <td id="LC209" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">option</span><span class="p">(</span><span class="nx">CURLOPT_HTTPAUTH</span><span class="p">,</span> <span class="nb">constant</span><span class="p">(</span><span class="s1">&#39;CURLAUTH_&#39;</span> <span class="o">.</span> <span class="nb">strtoupper</span><span class="p">(</span><span class="nv">$type</span><span class="p">)));</span></td>
      </tr>
      <tr>
        <td id="L210" class="blob-num js-line-number" data-line-number="210"></td>
        <td id="LC210" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">option</span><span class="p">(</span><span class="nx">CURLOPT_USERPWD</span><span class="p">,</span> <span class="nv">$username</span> <span class="o">.</span> <span class="s1">&#39;:&#39;</span> <span class="o">.</span> <span class="nv">$password</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L211" class="blob-num js-line-number" data-line-number="211"></td>
        <td id="LC211" class="blob-code js-file-line">		<span class="k">return</span> <span class="nv">$this</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L212" class="blob-num js-line-number" data-line-number="212"></td>
        <td id="LC212" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L213" class="blob-num js-line-number" data-line-number="213"></td>
        <td id="LC213" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L214" class="blob-num js-line-number" data-line-number="214"></td>
        <td id="LC214" class="blob-code js-file-line">	<span class="k">public</span> <span class="k">function</span> <span class="nf">proxy</span><span class="p">(</span><span class="nv">$url</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$port</span> <span class="o">=</span> <span class="mi">80</span><span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L215" class="blob-num js-line-number" data-line-number="215"></td>
        <td id="LC215" class="blob-code js-file-line">	<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L216" class="blob-num js-line-number" data-line-number="216"></td>
        <td id="LC216" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">option</span><span class="p">(</span><span class="nx">CURLOPT_HTTPPROXYTUNNEL</span><span class="p">,</span> <span class="k">TRUE</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L217" class="blob-num js-line-number" data-line-number="217"></td>
        <td id="LC217" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">option</span><span class="p">(</span><span class="nx">CURLOPT_PROXY</span><span class="p">,</span> <span class="nv">$url</span> <span class="o">.</span> <span class="s1">&#39;:&#39;</span> <span class="o">.</span> <span class="nv">$port</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L218" class="blob-num js-line-number" data-line-number="218"></td>
        <td id="LC218" class="blob-code js-file-line">		<span class="k">return</span> <span class="nv">$this</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L219" class="blob-num js-line-number" data-line-number="219"></td>
        <td id="LC219" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L220" class="blob-num js-line-number" data-line-number="220"></td>
        <td id="LC220" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L221" class="blob-num js-line-number" data-line-number="221"></td>
        <td id="LC221" class="blob-code js-file-line">	<span class="k">public</span> <span class="k">function</span> <span class="nf">proxy_login</span><span class="p">(</span><span class="nv">$username</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$password</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L222" class="blob-num js-line-number" data-line-number="222"></td>
        <td id="LC222" class="blob-code js-file-line">	<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L223" class="blob-num js-line-number" data-line-number="223"></td>
        <td id="LC223" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">option</span><span class="p">(</span><span class="nx">CURLOPT_PROXYUSERPWD</span><span class="p">,</span> <span class="nv">$username</span> <span class="o">.</span> <span class="s1">&#39;:&#39;</span> <span class="o">.</span> <span class="nv">$password</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L224" class="blob-num js-line-number" data-line-number="224"></td>
        <td id="LC224" class="blob-code js-file-line">		<span class="k">return</span> <span class="nv">$this</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L225" class="blob-num js-line-number" data-line-number="225"></td>
        <td id="LC225" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L226" class="blob-num js-line-number" data-line-number="226"></td>
        <td id="LC226" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L227" class="blob-num js-line-number" data-line-number="227"></td>
        <td id="LC227" class="blob-code js-file-line">	<span class="k">public</span> <span class="k">function</span> <span class="nf">ssl</span><span class="p">(</span><span class="nv">$verify_peer</span> <span class="o">=</span> <span class="k">TRUE</span><span class="p">,</span> <span class="nv">$verify_host</span> <span class="o">=</span> <span class="mi">2</span><span class="p">,</span> <span class="nv">$path_to_cert</span> <span class="o">=</span> <span class="k">NULL</span><span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L228" class="blob-num js-line-number" data-line-number="228"></td>
        <td id="LC228" class="blob-code js-file-line">	<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L229" class="blob-num js-line-number" data-line-number="229"></td>
        <td id="LC229" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span><span class="nv">$verify_peer</span><span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L230" class="blob-num js-line-number" data-line-number="230"></td>
        <td id="LC230" class="blob-code js-file-line">		<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L231" class="blob-num js-line-number" data-line-number="231"></td>
        <td id="LC231" class="blob-code js-file-line">			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">option</span><span class="p">(</span><span class="nx">CURLOPT_SSL_VERIFYPEER</span><span class="p">,</span> <span class="k">TRUE</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L232" class="blob-num js-line-number" data-line-number="232"></td>
        <td id="LC232" class="blob-code js-file-line">			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">option</span><span class="p">(</span><span class="nx">CURLOPT_SSL_VERIFYHOST</span><span class="p">,</span> <span class="nv">$verify_host</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L233" class="blob-num js-line-number" data-line-number="233"></td>
        <td id="LC233" class="blob-code js-file-line">			<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$path_to_cert</span><span class="p">))</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L234" class="blob-num js-line-number" data-line-number="234"></td>
        <td id="LC234" class="blob-code js-file-line">				<span class="nv">$path_to_cert</span> <span class="o">=</span> <span class="nb">realpath</span><span class="p">(</span><span class="nv">$path_to_cert</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L235" class="blob-num js-line-number" data-line-number="235"></td>
        <td id="LC235" class="blob-code js-file-line">				<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">option</span><span class="p">(</span><span class="nx">CURLOPT_CAINFO</span><span class="p">,</span> <span class="nv">$path_to_cert</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L236" class="blob-num js-line-number" data-line-number="236"></td>
        <td id="LC236" class="blob-code js-file-line">			<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L237" class="blob-num js-line-number" data-line-number="237"></td>
        <td id="LC237" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L238" class="blob-num js-line-number" data-line-number="238"></td>
        <td id="LC238" class="blob-code js-file-line">		<span class="k">else</span></td>
      </tr>
      <tr>
        <td id="L239" class="blob-num js-line-number" data-line-number="239"></td>
        <td id="LC239" class="blob-code js-file-line">		<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L240" class="blob-num js-line-number" data-line-number="240"></td>
        <td id="LC240" class="blob-code js-file-line">			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">option</span><span class="p">(</span><span class="nx">CURLOPT_SSL_VERIFYPEER</span><span class="p">,</span> <span class="k">FALSE</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L241" class="blob-num js-line-number" data-line-number="241"></td>
        <td id="LC241" class="blob-code js-file-line">			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">option</span><span class="p">(</span><span class="nx">CURLOPT_SSL_VERIFYHOST</span><span class="p">,</span> <span class="nv">$verify_host</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L242" class="blob-num js-line-number" data-line-number="242"></td>
        <td id="LC242" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L243" class="blob-num js-line-number" data-line-number="243"></td>
        <td id="LC243" class="blob-code js-file-line">		<span class="k">return</span> <span class="nv">$this</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L244" class="blob-num js-line-number" data-line-number="244"></td>
        <td id="LC244" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L245" class="blob-num js-line-number" data-line-number="245"></td>
        <td id="LC245" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L246" class="blob-num js-line-number" data-line-number="246"></td>
        <td id="LC246" class="blob-code js-file-line">	<span class="k">public</span> <span class="k">function</span> <span class="nf">options</span><span class="p">(</span><span class="nv">$options</span> <span class="o">=</span> <span class="k">array</span><span class="p">())</span></td>
      </tr>
      <tr>
        <td id="L247" class="blob-num js-line-number" data-line-number="247"></td>
        <td id="LC247" class="blob-code js-file-line">	<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L248" class="blob-num js-line-number" data-line-number="248"></td>
        <td id="LC248" class="blob-code js-file-line">		<span class="c1">// Merge options in with the rest - done as array_merge() does not overwrite numeric keys</span></td>
      </tr>
      <tr>
        <td id="L249" class="blob-num js-line-number" data-line-number="249"></td>
        <td id="LC249" class="blob-code js-file-line">		<span class="k">foreach</span> <span class="p">(</span><span class="nv">$options</span> <span class="k">as</span> <span class="nv">$option_code</span> <span class="o">=&gt;</span> <span class="nv">$option_value</span><span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L250" class="blob-num js-line-number" data-line-number="250"></td>
        <td id="LC250" class="blob-code js-file-line">		<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L251" class="blob-num js-line-number" data-line-number="251"></td>
        <td id="LC251" class="blob-code js-file-line">			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">option</span><span class="p">(</span><span class="nv">$option_code</span><span class="p">,</span> <span class="nv">$option_value</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L252" class="blob-num js-line-number" data-line-number="252"></td>
        <td id="LC252" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L253" class="blob-num js-line-number" data-line-number="253"></td>
        <td id="LC253" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L254" class="blob-num js-line-number" data-line-number="254"></td>
        <td id="LC254" class="blob-code js-file-line">		<span class="c1">// Set all options provided</span></td>
      </tr>
      <tr>
        <td id="L255" class="blob-num js-line-number" data-line-number="255"></td>
        <td id="LC255" class="blob-code js-file-line">		<span class="nb">curl_setopt_array</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">session</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">options</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L256" class="blob-num js-line-number" data-line-number="256"></td>
        <td id="LC256" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L257" class="blob-num js-line-number" data-line-number="257"></td>
        <td id="LC257" class="blob-code js-file-line">		<span class="k">return</span> <span class="nv">$this</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L258" class="blob-num js-line-number" data-line-number="258"></td>
        <td id="LC258" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L259" class="blob-num js-line-number" data-line-number="259"></td>
        <td id="LC259" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L260" class="blob-num js-line-number" data-line-number="260"></td>
        <td id="LC260" class="blob-code js-file-line">	<span class="k">public</span> <span class="k">function</span> <span class="nf">option</span><span class="p">(</span><span class="nv">$code</span><span class="p">,</span> <span class="nv">$value</span><span class="p">,</span> <span class="nv">$prefix</span> <span class="o">=</span> <span class="s1">&#39;opt&#39;</span><span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L261" class="blob-num js-line-number" data-line-number="261"></td>
        <td id="LC261" class="blob-code js-file-line">	<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L262" class="blob-num js-line-number" data-line-number="262"></td>
        <td id="LC262" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span><span class="nb">is_string</span><span class="p">(</span><span class="nv">$code</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="o">!</span><span class="nb">is_numeric</span><span class="p">(</span><span class="nv">$code</span><span class="p">))</span></td>
      </tr>
      <tr>
        <td id="L263" class="blob-num js-line-number" data-line-number="263"></td>
        <td id="LC263" class="blob-code js-file-line">		<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L264" class="blob-num js-line-number" data-line-number="264"></td>
        <td id="LC264" class="blob-code js-file-line">			<span class="nv">$code</span> <span class="o">=</span> <span class="nb">constant</span><span class="p">(</span><span class="s1">&#39;CURL&#39;</span> <span class="o">.</span> <span class="nb">strtoupper</span><span class="p">(</span><span class="nv">$prefix</span><span class="p">)</span> <span class="o">.</span> <span class="s1">&#39;_&#39;</span> <span class="o">.</span> <span class="nb">strtoupper</span><span class="p">(</span><span class="nv">$code</span><span class="p">));</span></td>
      </tr>
      <tr>
        <td id="L265" class="blob-num js-line-number" data-line-number="265"></td>
        <td id="LC265" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L266" class="blob-num js-line-number" data-line-number="266"></td>
        <td id="LC266" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L267" class="blob-num js-line-number" data-line-number="267"></td>
        <td id="LC267" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">options</span><span class="p">[</span><span class="nv">$code</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$value</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L268" class="blob-num js-line-number" data-line-number="268"></td>
        <td id="LC268" class="blob-code js-file-line">		<span class="k">return</span> <span class="nv">$this</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L269" class="blob-num js-line-number" data-line-number="269"></td>
        <td id="LC269" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L270" class="blob-num js-line-number" data-line-number="270"></td>
        <td id="LC270" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L271" class="blob-num js-line-number" data-line-number="271"></td>
        <td id="LC271" class="blob-code js-file-line">	<span class="c1">// Start a session from a URL</span></td>
      </tr>
      <tr>
        <td id="L272" class="blob-num js-line-number" data-line-number="272"></td>
        <td id="LC272" class="blob-code js-file-line">	<span class="k">public</span> <span class="k">function</span> <span class="nf">create</span><span class="p">(</span><span class="nv">$url</span><span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L273" class="blob-num js-line-number" data-line-number="273"></td>
        <td id="LC273" class="blob-code js-file-line">	<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L274" class="blob-num js-line-number" data-line-number="274"></td>
        <td id="LC274" class="blob-code js-file-line">		<span class="c1">// If no a protocol in URL, assume its a CI link</span></td>
      </tr>
      <tr>
        <td id="L275" class="blob-num js-line-number" data-line-number="275"></td>
        <td id="LC275" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span> <span class="o">!</span> <span class="nb">preg_match</span><span class="p">(</span><span class="s1">&#39;!^\w+://! i&#39;</span><span class="p">,</span> <span class="nv">$url</span><span class="p">))</span></td>
      </tr>
      <tr>
        <td id="L276" class="blob-num js-line-number" data-line-number="276"></td>
        <td id="LC276" class="blob-code js-file-line">		<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L277" class="blob-num js-line-number" data-line-number="277"></td>
        <td id="LC277" class="blob-code js-file-line">			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_ci</span><span class="o">-&gt;</span><span class="na">load</span><span class="o">-&gt;</span><span class="na">helper</span><span class="p">(</span><span class="s1">&#39;url&#39;</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L278" class="blob-num js-line-number" data-line-number="278"></td>
        <td id="LC278" class="blob-code js-file-line">			<span class="nv">$url</span> <span class="o">=</span> <span class="nx">site_url</span><span class="p">(</span><span class="nv">$url</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L279" class="blob-num js-line-number" data-line-number="279"></td>
        <td id="LC279" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L280" class="blob-num js-line-number" data-line-number="280"></td>
        <td id="LC280" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L281" class="blob-num js-line-number" data-line-number="281"></td>
        <td id="LC281" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">url</span> <span class="o">=</span> <span class="nv">$url</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L282" class="blob-num js-line-number" data-line-number="282"></td>
        <td id="LC282" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">session</span> <span class="o">=</span> <span class="nb">curl_init</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">url</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L283" class="blob-num js-line-number" data-line-number="283"></td>
        <td id="LC283" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L284" class="blob-num js-line-number" data-line-number="284"></td>
        <td id="LC284" class="blob-code js-file-line">		<span class="k">return</span> <span class="nv">$this</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L285" class="blob-num js-line-number" data-line-number="285"></td>
        <td id="LC285" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L286" class="blob-num js-line-number" data-line-number="286"></td>
        <td id="LC286" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L287" class="blob-num js-line-number" data-line-number="287"></td>
        <td id="LC287" class="blob-code js-file-line">	<span class="c1">// End a session and return the results</span></td>
      </tr>
      <tr>
        <td id="L288" class="blob-num js-line-number" data-line-number="288"></td>
        <td id="LC288" class="blob-code js-file-line">	<span class="k">public</span> <span class="k">function</span> <span class="nf">execute</span><span class="p">()</span></td>
      </tr>
      <tr>
        <td id="L289" class="blob-num js-line-number" data-line-number="289"></td>
        <td id="LC289" class="blob-code js-file-line">	<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L290" class="blob-num js-line-number" data-line-number="290"></td>
        <td id="LC290" class="blob-code js-file-line">		<span class="c1">// Set two default options, and merge any extra ones in</span></td>
      </tr>
      <tr>
        <td id="L291" class="blob-num js-line-number" data-line-number="291"></td>
        <td id="LC291" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span> <span class="o">!</span> <span class="nb">isset</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">options</span><span class="p">[</span><span class="nx">CURLOPT_TIMEOUT</span><span class="p">]))</span></td>
      </tr>
      <tr>
        <td id="L292" class="blob-num js-line-number" data-line-number="292"></td>
        <td id="LC292" class="blob-code js-file-line">		<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L293" class="blob-num js-line-number" data-line-number="293"></td>
        <td id="LC293" class="blob-code js-file-line">			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">options</span><span class="p">[</span><span class="nx">CURLOPT_TIMEOUT</span><span class="p">]</span> <span class="o">=</span> <span class="mi">30</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L294" class="blob-num js-line-number" data-line-number="294"></td>
        <td id="LC294" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L295" class="blob-num js-line-number" data-line-number="295"></td>
        <td id="LC295" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span> <span class="o">!</span> <span class="nb">isset</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">options</span><span class="p">[</span><span class="nx">CURLOPT_RETURNTRANSFER</span><span class="p">]))</span></td>
      </tr>
      <tr>
        <td id="L296" class="blob-num js-line-number" data-line-number="296"></td>
        <td id="LC296" class="blob-code js-file-line">		<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L297" class="blob-num js-line-number" data-line-number="297"></td>
        <td id="LC297" class="blob-code js-file-line">			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">options</span><span class="p">[</span><span class="nx">CURLOPT_RETURNTRANSFER</span><span class="p">]</span> <span class="o">=</span> <span class="k">TRUE</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L298" class="blob-num js-line-number" data-line-number="298"></td>
        <td id="LC298" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L299" class="blob-num js-line-number" data-line-number="299"></td>
        <td id="LC299" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span> <span class="o">!</span> <span class="nb">isset</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">options</span><span class="p">[</span><span class="nx">CURLOPT_FAILONERROR</span><span class="p">]))</span></td>
      </tr>
      <tr>
        <td id="L300" class="blob-num js-line-number" data-line-number="300"></td>
        <td id="LC300" class="blob-code js-file-line">		<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L301" class="blob-num js-line-number" data-line-number="301"></td>
        <td id="LC301" class="blob-code js-file-line">			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">options</span><span class="p">[</span><span class="nx">CURLOPT_FAILONERROR</span><span class="p">]</span> <span class="o">=</span> <span class="k">TRUE</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L302" class="blob-num js-line-number" data-line-number="302"></td>
        <td id="LC302" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L303" class="blob-num js-line-number" data-line-number="303"></td>
        <td id="LC303" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L304" class="blob-num js-line-number" data-line-number="304"></td>
        <td id="LC304" class="blob-code js-file-line">		<span class="c1">// Only set follow location if not running securely</span></td>
      </tr>
      <tr>
        <td id="L305" class="blob-num js-line-number" data-line-number="305"></td>
        <td id="LC305" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span> <span class="o">!</span> <span class="nb">ini_get</span><span class="p">(</span><span class="s1">&#39;safe_mode&#39;</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="o">!</span> <span class="nb">ini_get</span><span class="p">(</span><span class="s1">&#39;open_basedir&#39;</span><span class="p">))</span></td>
      </tr>
      <tr>
        <td id="L306" class="blob-num js-line-number" data-line-number="306"></td>
        <td id="LC306" class="blob-code js-file-line">		<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L307" class="blob-num js-line-number" data-line-number="307"></td>
        <td id="LC307" class="blob-code js-file-line">			<span class="c1">// Ok, follow location is not set already so lets set it to true</span></td>
      </tr>
      <tr>
        <td id="L308" class="blob-num js-line-number" data-line-number="308"></td>
        <td id="LC308" class="blob-code js-file-line">			<span class="k">if</span> <span class="p">(</span> <span class="o">!</span> <span class="nb">isset</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">options</span><span class="p">[</span><span class="nx">CURLOPT_FOLLOWLOCATION</span><span class="p">]))</span></td>
      </tr>
      <tr>
        <td id="L309" class="blob-num js-line-number" data-line-number="309"></td>
        <td id="LC309" class="blob-code js-file-line">			<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L310" class="blob-num js-line-number" data-line-number="310"></td>
        <td id="LC310" class="blob-code js-file-line">				<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">options</span><span class="p">[</span><span class="nx">CURLOPT_FOLLOWLOCATION</span><span class="p">]</span> <span class="o">=</span> <span class="k">TRUE</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L311" class="blob-num js-line-number" data-line-number="311"></td>
        <td id="LC311" class="blob-code js-file-line">			<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L312" class="blob-num js-line-number" data-line-number="312"></td>
        <td id="LC312" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L313" class="blob-num js-line-number" data-line-number="313"></td>
        <td id="LC313" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L314" class="blob-num js-line-number" data-line-number="314"></td>
        <td id="LC314" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span> <span class="o">!</span> <span class="k">empty</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">headers</span><span class="p">))</span></td>
      </tr>
      <tr>
        <td id="L315" class="blob-num js-line-number" data-line-number="315"></td>
        <td id="LC315" class="blob-code js-file-line">		<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L316" class="blob-num js-line-number" data-line-number="316"></td>
        <td id="LC316" class="blob-code js-file-line">			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">option</span><span class="p">(</span><span class="nx">CURLOPT_HTTPHEADER</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">headers</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L317" class="blob-num js-line-number" data-line-number="317"></td>
        <td id="LC317" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L318" class="blob-num js-line-number" data-line-number="318"></td>
        <td id="LC318" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L319" class="blob-num js-line-number" data-line-number="319"></td>
        <td id="LC319" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">options</span><span class="p">();</span></td>
      </tr>
      <tr>
        <td id="L320" class="blob-num js-line-number" data-line-number="320"></td>
        <td id="LC320" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L321" class="blob-num js-line-number" data-line-number="321"></td>
        <td id="LC321" class="blob-code js-file-line">		<span class="c1">// Execute the request &amp; and hide all output</span></td>
      </tr>
      <tr>
        <td id="L322" class="blob-num js-line-number" data-line-number="322"></td>
        <td id="LC322" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">response</span> <span class="o">=</span> <span class="nb">curl_exec</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">session</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L323" class="blob-num js-line-number" data-line-number="323"></td>
        <td id="LC323" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">info</span> <span class="o">=</span> <span class="nb">curl_getinfo</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">session</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L324" class="blob-num js-line-number" data-line-number="324"></td>
        <td id="LC324" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L325" class="blob-num js-line-number" data-line-number="325"></td>
        <td id="LC325" class="blob-code js-file-line">		<span class="c1">// Request failed</span></td>
      </tr>
      <tr>
        <td id="L326" class="blob-num js-line-number" data-line-number="326"></td>
        <td id="LC326" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">response</span> <span class="o">===</span> <span class="k">FALSE</span><span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L327" class="blob-num js-line-number" data-line-number="327"></td>
        <td id="LC327" class="blob-code js-file-line">		<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L328" class="blob-num js-line-number" data-line-number="328"></td>
        <td id="LC328" class="blob-code js-file-line">			<span class="nv">$errno</span> <span class="o">=</span> <span class="nb">curl_errno</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">session</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L329" class="blob-num js-line-number" data-line-number="329"></td>
        <td id="LC329" class="blob-code js-file-line">			<span class="nv">$error</span> <span class="o">=</span> <span class="nb">curl_error</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">session</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L330" class="blob-num js-line-number" data-line-number="330"></td>
        <td id="LC330" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L331" class="blob-num js-line-number" data-line-number="331"></td>
        <td id="LC331" class="blob-code js-file-line">			<span class="nb">curl_close</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">session</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L332" class="blob-num js-line-number" data-line-number="332"></td>
        <td id="LC332" class="blob-code js-file-line">			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">set_defaults</span><span class="p">();</span></td>
      </tr>
      <tr>
        <td id="L333" class="blob-num js-line-number" data-line-number="333"></td>
        <td id="LC333" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L334" class="blob-num js-line-number" data-line-number="334"></td>
        <td id="LC334" class="blob-code js-file-line">			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error_code</span> <span class="o">=</span> <span class="nv">$errno</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L335" class="blob-num js-line-number" data-line-number="335"></td>
        <td id="LC335" class="blob-code js-file-line">			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error_string</span> <span class="o">=</span> <span class="nv">$error</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L336" class="blob-num js-line-number" data-line-number="336"></td>
        <td id="LC336" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L337" class="blob-num js-line-number" data-line-number="337"></td>
        <td id="LC337" class="blob-code js-file-line">			<span class="k">return</span> <span class="k">FALSE</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L338" class="blob-num js-line-number" data-line-number="338"></td>
        <td id="LC338" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L339" class="blob-num js-line-number" data-line-number="339"></td>
        <td id="LC339" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L340" class="blob-num js-line-number" data-line-number="340"></td>
        <td id="LC340" class="blob-code js-file-line">		<span class="c1">// Request successful</span></td>
      </tr>
      <tr>
        <td id="L341" class="blob-num js-line-number" data-line-number="341"></td>
        <td id="LC341" class="blob-code js-file-line">		<span class="k">else</span></td>
      </tr>
      <tr>
        <td id="L342" class="blob-num js-line-number" data-line-number="342"></td>
        <td id="LC342" class="blob-code js-file-line">		<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L343" class="blob-num js-line-number" data-line-number="343"></td>
        <td id="LC343" class="blob-code js-file-line">			<span class="nb">curl_close</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">session</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L344" class="blob-num js-line-number" data-line-number="344"></td>
        <td id="LC344" class="blob-code js-file-line">			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">last_response</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">response</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L345" class="blob-num js-line-number" data-line-number="345"></td>
        <td id="LC345" class="blob-code js-file-line">			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">set_defaults</span><span class="p">();</span></td>
      </tr>
      <tr>
        <td id="L346" class="blob-num js-line-number" data-line-number="346"></td>
        <td id="LC346" class="blob-code js-file-line">			<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">last_response</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L347" class="blob-num js-line-number" data-line-number="347"></td>
        <td id="LC347" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L348" class="blob-num js-line-number" data-line-number="348"></td>
        <td id="LC348" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L349" class="blob-num js-line-number" data-line-number="349"></td>
        <td id="LC349" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L350" class="blob-num js-line-number" data-line-number="350"></td>
        <td id="LC350" class="blob-code js-file-line">	<span class="k">public</span> <span class="k">function</span> <span class="nf">is_enabled</span><span class="p">()</span></td>
      </tr>
      <tr>
        <td id="L351" class="blob-num js-line-number" data-line-number="351"></td>
        <td id="LC351" class="blob-code js-file-line">	<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L352" class="blob-num js-line-number" data-line-number="352"></td>
        <td id="LC352" class="blob-code js-file-line">		<span class="k">return</span> <span class="nb">function_exists</span><span class="p">(</span><span class="s1">&#39;curl_init&#39;</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L353" class="blob-num js-line-number" data-line-number="353"></td>
        <td id="LC353" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L354" class="blob-num js-line-number" data-line-number="354"></td>
        <td id="LC354" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L355" class="blob-num js-line-number" data-line-number="355"></td>
        <td id="LC355" class="blob-code js-file-line">	<span class="k">public</span> <span class="k">function</span> <span class="nf">debug</span><span class="p">()</span></td>
      </tr>
      <tr>
        <td id="L356" class="blob-num js-line-number" data-line-number="356"></td>
        <td id="LC356" class="blob-code js-file-line">	<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L357" class="blob-num js-line-number" data-line-number="357"></td>
        <td id="LC357" class="blob-code js-file-line">		<span class="k">echo</span> <span class="s2">&quot;=============================================&lt;br/&gt;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L358" class="blob-num js-line-number" data-line-number="358"></td>
        <td id="LC358" class="blob-code js-file-line">		<span class="k">echo</span> <span class="s2">&quot;&lt;h2&gt;CURL Test&lt;/h2&gt;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L359" class="blob-num js-line-number" data-line-number="359"></td>
        <td id="LC359" class="blob-code js-file-line">		<span class="k">echo</span> <span class="s2">&quot;=============================================&lt;br/&gt;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L360" class="blob-num js-line-number" data-line-number="360"></td>
        <td id="LC360" class="blob-code js-file-line">		<span class="k">echo</span> <span class="s2">&quot;&lt;h3&gt;Response&lt;/h3&gt;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L361" class="blob-num js-line-number" data-line-number="361"></td>
        <td id="LC361" class="blob-code js-file-line">		<span class="k">echo</span> <span class="s2">&quot;&lt;code&gt;&quot;</span> <span class="o">.</span> <span class="nb">nl2br</span><span class="p">(</span><span class="nb">htmlentities</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">last_response</span><span class="p">))</span> <span class="o">.</span> <span class="s2">&quot;&lt;/code&gt;&lt;br/&gt;</span><span class="se">\n\n</span><span class="s2">&quot;</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L362" class="blob-num js-line-number" data-line-number="362"></td>
        <td id="LC362" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L363" class="blob-num js-line-number" data-line-number="363"></td>
        <td id="LC363" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error_string</span><span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L364" class="blob-num js-line-number" data-line-number="364"></td>
        <td id="LC364" class="blob-code js-file-line">		<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L365" class="blob-num js-line-number" data-line-number="365"></td>
        <td id="LC365" class="blob-code js-file-line">			<span class="k">echo</span> <span class="s2">&quot;=============================================&lt;br/&gt;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L366" class="blob-num js-line-number" data-line-number="366"></td>
        <td id="LC366" class="blob-code js-file-line">			<span class="k">echo</span> <span class="s2">&quot;&lt;h3&gt;Errors&lt;/h3&gt;&quot;</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L367" class="blob-num js-line-number" data-line-number="367"></td>
        <td id="LC367" class="blob-code js-file-line">			<span class="k">echo</span> <span class="s2">&quot;&lt;strong&gt;Code:&lt;/strong&gt; &quot;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error_code</span> <span class="o">.</span> <span class="s2">&quot;&lt;br/&gt;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L368" class="blob-num js-line-number" data-line-number="368"></td>
        <td id="LC368" class="blob-code js-file-line">			<span class="k">echo</span> <span class="s2">&quot;&lt;strong&gt;Message:&lt;/strong&gt; &quot;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error_string</span> <span class="o">.</span> <span class="s2">&quot;&lt;br/&gt;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L369" class="blob-num js-line-number" data-line-number="369"></td>
        <td id="LC369" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L370" class="blob-num js-line-number" data-line-number="370"></td>
        <td id="LC370" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L371" class="blob-num js-line-number" data-line-number="371"></td>
        <td id="LC371" class="blob-code js-file-line">		<span class="k">echo</span> <span class="s2">&quot;=============================================&lt;br/&gt;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L372" class="blob-num js-line-number" data-line-number="372"></td>
        <td id="LC372" class="blob-code js-file-line">		<span class="k">echo</span> <span class="s2">&quot;&lt;h3&gt;Info&lt;/h3&gt;&quot;</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L373" class="blob-num js-line-number" data-line-number="373"></td>
        <td id="LC373" class="blob-code js-file-line">		<span class="k">echo</span> <span class="s2">&quot;&lt;pre&gt;&quot;</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L374" class="blob-num js-line-number" data-line-number="374"></td>
        <td id="LC374" class="blob-code js-file-line">		<span class="nb">print_r</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">info</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L375" class="blob-num js-line-number" data-line-number="375"></td>
        <td id="LC375" class="blob-code js-file-line">		<span class="k">echo</span> <span class="s2">&quot;&lt;/pre&gt;&quot;</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L376" class="blob-num js-line-number" data-line-number="376"></td>
        <td id="LC376" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L377" class="blob-num js-line-number" data-line-number="377"></td>
        <td id="LC377" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L378" class="blob-num js-line-number" data-line-number="378"></td>
        <td id="LC378" class="blob-code js-file-line">	<span class="k">public</span> <span class="k">function</span> <span class="nf">debug_request</span><span class="p">()</span></td>
      </tr>
      <tr>
        <td id="L379" class="blob-num js-line-number" data-line-number="379"></td>
        <td id="LC379" class="blob-code js-file-line">	<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L380" class="blob-num js-line-number" data-line-number="380"></td>
        <td id="LC380" class="blob-code js-file-line">		<span class="k">return</span> <span class="k">array</span><span class="p">(</span></td>
      </tr>
      <tr>
        <td id="L381" class="blob-num js-line-number" data-line-number="381"></td>
        <td id="LC381" class="blob-code js-file-line">			<span class="s1">&#39;url&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">url</span></td>
      </tr>
      <tr>
        <td id="L382" class="blob-num js-line-number" data-line-number="382"></td>
        <td id="LC382" class="blob-code js-file-line">		<span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L383" class="blob-num js-line-number" data-line-number="383"></td>
        <td id="LC383" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L384" class="blob-num js-line-number" data-line-number="384"></td>
        <td id="LC384" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L385" class="blob-num js-line-number" data-line-number="385"></td>
        <td id="LC385" class="blob-code js-file-line">	<span class="k">public</span> <span class="k">function</span> <span class="nf">set_defaults</span><span class="p">()</span></td>
      </tr>
      <tr>
        <td id="L386" class="blob-num js-line-number" data-line-number="386"></td>
        <td id="LC386" class="blob-code js-file-line">	<span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L387" class="blob-num js-line-number" data-line-number="387"></td>
        <td id="LC387" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">response</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L388" class="blob-num js-line-number" data-line-number="388"></td>
        <td id="LC388" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">headers</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></td>
      </tr>
      <tr>
        <td id="L389" class="blob-num js-line-number" data-line-number="389"></td>
        <td id="LC389" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">options</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></td>
      </tr>
      <tr>
        <td id="L390" class="blob-num js-line-number" data-line-number="390"></td>
        <td id="LC390" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error_code</span> <span class="o">=</span> <span class="k">NULL</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L391" class="blob-num js-line-number" data-line-number="391"></td>
        <td id="LC391" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error_string</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L392" class="blob-num js-line-number" data-line-number="392"></td>
        <td id="LC392" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">session</span> <span class="o">=</span> <span class="k">NULL</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L393" class="blob-num js-line-number" data-line-number="393"></td>
        <td id="LC393" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L394" class="blob-num js-line-number" data-line-number="394"></td>
        <td id="LC394" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L395" class="blob-num js-line-number" data-line-number="395"></td>
        <td id="LC395" class="blob-code js-file-line"><span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L396" class="blob-num js-line-number" data-line-number="396"></td>
        <td id="LC396" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L397" class="blob-num js-line-number" data-line-number="397"></td>
        <td id="LC397" class="blob-code js-file-line"><span class="cm">/* End of file Curl.php */</span></td>
      </tr>
      <tr>
        <td id="L398" class="blob-num js-line-number" data-line-number="398"></td>
        <td id="LC398" class="blob-code js-file-line"><span class="cm">/* Location: ./application/libraries/Curl.php */</span></td>
      </tr>
</table>

  </div>

  </div>
</div>

<a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" style="display:none">Jump to Line</a>
<div id="jump-to-line" style="display:none">
  <form accept-charset="UTF-8" class="js-jump-to-line-form">
    <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" autofocus>
    <button type="submit" class="button">Go</button>
  </form>
</div>

        </div>

      </div><!-- /.repo-container -->
      <div class="modal-backdrop"></div>
    </div><!-- /.container -->
  </div><!-- /.site -->


    </div><!-- /.wrapper -->

      <div class="container">
  <div class="site-footer" role="contentinfo">
    <ul class="site-footer-links right">
      <li><a href="https://status.github.com/">Status</a></li>
      <li><a href="http://developer.github.com">API</a></li>
      <li><a href="http://training.github.com">Training</a></li>
      <li><a href="http://shop.github.com">Shop</a></li>
      <li><a href="/blog">Blog</a></li>
      <li><a href="/about">About</a></li>

    </ul>

    <a href="/" aria-label="Homepage">
      <span class="mega-octicon octicon-mark-github" title="GitHub"></span>
    </a>

    <ul class="site-footer-links">
      <li>&copy; 2014 <span title="0.03499s from github-fe116-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="/site/terms">Terms</a></li>
        <li><a href="/site/privacy">Privacy</a></li>
        <li><a href="/security">Security</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
  </div><!-- /.site-footer -->
</div><!-- /.container -->


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-suggester-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="fullscreen-contents js-fullscreen-contents js-suggester-field" placeholder=""></textarea>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped tooltipped-w" aria-label="Exit Zen Mode">
      <span class="mega-octicon octicon-screen-normal"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped tooltipped-w"
      aria-label="Switch themes">
      <span class="octicon octicon-color-mode"></span>
    </a>
  </div>
</div>



    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      <a href="#" class="octicon octicon-x flash-close js-ajax-error-dismiss" aria-label="Dismiss error"></a>
      Something went wrong with that request. Please try again.
    </div>


      <script crossorigin="anonymous" src="https://assets-cdn.github.com/assets/frameworks-baafc7fe2c3ef575c8bcd5ae98c322c1e333a6c520e64e31b8a56a462e252006.js" type="text/javascript"></script>
      <script async="async" crossorigin="anonymous" src="https://assets-cdn.github.com/assets/github-b5b13912747fbf959193da31b1678b2a0cd890ab41baba08a8b1a90d5dcbc57f.js" type="text/javascript"></script>
      
      
        <script async src="https://www.google-analytics.com/analytics.js"></script>
  </body>
</html>

