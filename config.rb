# 'config.rb' is used in the gulp 'styles' task for compass settings
# Use sass globbing so that 'main.scss' can import sass files that are in a sub folder, for example @import "pages/*.sass";
require 'sass-globbing';

line_comments = false
output_style = :compact # or :nested, :expanded, :compressed, :compact
environment = :development

# Require any additional compass plugins here.
# require 'lemonade'

# Set this to the root of your project when deployed:
http_path        = "/www/"
css_dir          = "www/css"
sass_dir         = "sass"
images_dir       = "www/images"
fonts_dir        = "www/fonts"
javascripts_dir  = "www/js"
preferred_syntax = :sass

# To enable relative paths to assets via compass helper functions. Uncomment:
relative_assets = true

=begin
require 'fileutils'
on_stylesheet_saved do |file|
  if File.exists?(file) && File.basename(file) == "style.css"
    puts "Moving: #{file}"
    FileUtils.mv(file, File.dirname(file) + "/../" + File.basename(file))
  end
end
=end
