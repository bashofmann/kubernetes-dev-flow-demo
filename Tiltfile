docker_build('bashofmann/hello-svc', './hello-svc')

hello_svc_yaml = local('helm template charts/hello-svc --name dev -f ./hello-svc-values-dev.yaml')

k8s_resource('dev-hello-svc', hello_svc_yaml, port_forwards=3001)


docker_build('bashofmann/quote-svc', './quote-svc')

quote_svc_yaml = local('helm template charts/quote-svc --name dev -f ./quote-svc-values-dev.yaml')

k8s_resource('dev-quote-svc', quote_svc_yaml, port_forwards=3000)


docker_build('bashofmann/web', './web')

web_yaml = local('helm template charts/web --name dev -f ./web-values-dev.yaml')

k8s_resource('dev-web', web_yaml, port_forwards="8080:80")
