## 0. Set up a namespace
* Download kubeconfig
* Copy kubeconfig to `~/.kube/config`
* Install kubectl: https://kubernetes.io/docs/tasks/tools/install-kubectl/
* Try connection
```
kubectl version
```
* List Namespaces
```
kubectl get namespaces
```
* Create Namespace
```
kubectl create namespace bastian
```
* Set default namespace to context
```
kubectl config set-context default --namespace=bastian
```
* See change in kubeconfig
```
cat ~/.kube/config
```
