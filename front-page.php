<!DOCTYPE html>
<html lang="ja">
<head>
	<title>More Publishing by Susumu Seino</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri();?>/src/js/app.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/skill.js"></script>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/app.css">
	<style>
		h1 {
			color: #ffffff;
		}
	</style>
</head>
<body>
<div class="page">
	<div class="box red">
		<div class="typewriter">
			<h1>More Publishing</h1><a href="" data-period="2000"
									   data-type="[ &quot;     &quot;, &quot;Hi, I am  Susumu.&quot;, &quot;I am Creative.&quot;, &quot;I Love to Develop.&quot;, &quot;I Love WordPress.&quot; ]"
									   class="typewrite"></a><span class="wrap"></span>
			<ul class="menu">
				<li class="menu__item"><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">BLOG</a></li>
				<li class="menu__item"><a href="https://profiles.wordpress.org/musus">WordPress</a></li>
				<li class="menu__item"><a href="https://github.com/musus">CODE</a></li>
			</ul>
		</div>
		<div id="large-header" class="large-header">
			<canvas id="demo-canvas"></canvas>
		</div>
	</div>
	<div class="box street skill">
		<div class="row">
			<div class="col-sm-6 col-xs-12 text-left">
				<h1 class="text-center">Susumu Seino</h1>
				<p>I'm a Japanese digital nomad that loves creating products online. My typical day to day consists of
					Digital Marketing, WordPress, and Front-End Design.</p>
				<p>Usually, I live in Tokyo but that lives multiple residences in various locations because in the
					middle of different environment lies new idea.</p>
				<hr>
				<p>
					デジタルマーケティング・WordPressを活用したサイトやサービス開発・フロントエンドデザインを行いながら生活しているデジタルノマドな日本人です。9歳の頃にHTMLを書き始めてからオンラインプロダクトに対する夢と憧れがあり、26歳で独立して今に至ります。</p>
				<p>普段は東京に住んでいますが新しいアイディアを探すために多拠点という生活を目指し、年間1/3は国内外問わず東京以外で生活しています。</p>
			</div>
			<div class="col-sm-6 col-xs-12"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/profile-pic.jpg"></div>
		</div>
	</div>
</div>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/canvas.js"></script>
</body>
<?php wp_footer();?>
</html>