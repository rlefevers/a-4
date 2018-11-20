<?php

class HomeController extends Controller{

	public function index(){

		$feed="https://www.cnet.com/rss/news/";
		$rss = new RssDisplay($feed);

		$feed_data = $rss->getFeedItems();
		$channel_title = $feed_data->channel->title;
		$article_title = $feed_data->channel->item->title;
		$article_date = $feed_data->channel->item->pubDate;
		$article_description = $feed_data->channel->item->description;
		$article_link = $feed_data->channel->item->link;

		$this->set('rss_title', $channel_title);
		$this->set('post_title', $article_title);
		$this->set('post_date', $article_date);
		$this->set('description', $article_description);
		$this->set('link', $article_link);

	}

}

?>
