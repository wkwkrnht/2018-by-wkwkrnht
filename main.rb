require 'bundler'
Bundler.require

require 'json'
require 'slim'
require 'sass'

def make_page(name)
    name_slim = name.to_s + '.slim'
    body = Slim::Template.new(name_slim).render
    File.open(name,"w") do |text|
        text.puts(body)
    end
end

make_page('index.html')
make_page('./article/test.html')
make_page('./article/article.html')