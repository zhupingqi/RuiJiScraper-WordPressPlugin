=== Import RuiJi Scraper article to WordPress ===
Contributors: ruiji scraper
Requires at least: 4.9
Tested up to: 4.9.6
Stable tag: 4.9
Tags: wordpress import, datafeed, import, migrate, import artilce to wordpress, advanced import, scraper, crawler

RuiJi Scraper Import is an extremely powerful importer that makes it easy to import ruiji scraper extract artile to WordPress.

= 1.0 =
* This is demo version.

WordPress is a personal blogging system, and small business websites are being used by more and more users. The personal webmaster or corporate web editor will forward some wonderful content to his site in daily editing.

Repeated copy and paste operations are often irritating. RuiJi Scraper noticed this, using RuiJi Scraper's import tool to easily import articles extracted by RuiJi Scraper into WordPress.

You need to refer to the following operations to configure this function (version 2.2.4 and above).

**First, install the RuiJiScraper-WordPressPlugin plugin**

1\. You need to install the RuiJiScraper-WordPressPlugin plugin in WordPress. This plugin will display some information we need in Ruij Scraper.

Download the plugin from github https://github.com/zhupingqi/RuiJiScraper-WordPressPlugin

![](http://118.31.61.230:88/wp-content/uploads/2018/11/1-1.png)  

Save the zip file to your destination folder.

2\. Log in to the WordPress backend, go to the plugin page, click Install Plugin

![](http://118.31.61.230:88/wp-content/uploads/2018/11/2-1.png)  

3\. Click Upload Plugin

![](http://118.31.61.230:88/wp-content/uploads/2018/11/3.png)  

4\. Select the file you just downloaded and click Install now.

![](http://118.31.61.230:88/wp-content/uploads/2018/11/4.png)  

5\. Wait for the plugin installation to complete and enable the plugin. After the Enable Management menu will appear RuiJi Scarper's menu

![](http://118.31.61.230:88/wp-content/uploads/2018/11/5.png)  

6\. Click on the RuiJi Scraper menu

![](http://118.31.61.230:88/wp-content/uploads/2018/11/6.png)  

If you see a similar page, the WordPress RuiJi Scraper plugin is installed successfully.

Next, you need to install the RuiJi Scraper. You can find the tutorial on the website. We assume that you have mastered the RuiJi Scraper usage skills and are able to successfully extract page data. Next we will show you how to import articles into WordPress using RuiJi Scraper.

**Second, use the RuiJi Scraper workbook to export articles to WordPress**

1\. First you need to confirm that your current browser is logged in to WordPress and the login account has the appropriate permissions. RuiJi Scraper uses WPAPI for article import and uses current browser cookies and Cookie Nonce for authentication.

2\. You need to extract some data and then open the workbook

![](http://118.31.61.230:88/wp-content/uploads/2018/11/1-2.png)  

3\. Select some articles from the workbook that you need to import into WordPress and click on WordPress under Export To

![](http://118.31.61.230:88/wp-content/uploads/2018/11/2-2.png)  
![](http://118.31.61.230:88/wp-content/uploads/2018/11/3-1.png)  

4\. Refer to the following picture to take charge of the contents of the WordPress background RuiJi Scraper page to the corresponding location.

![](http://118.31.61.230:88/wp-content/uploads/2018/11/4-1.png)  

Note: the nonce will expire after a specified period of time. If it expires, you will need to reset the item.

5\. Edit the template

The content of the template is the name of the field when you define the rule. These field names can be combined in the import template. If you do not define the two items, the content in the above image will be used as the default.

6\. Click on Export

If your configuration is correct, you can check out the article you just imported in the WordPress article list.
