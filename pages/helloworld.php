<h1>Hello, world!</h1>

{% for key, item in menu_items %}
  {{ key }}: {{ url(item.route, item.args) }}<br />
{% endfor %}
