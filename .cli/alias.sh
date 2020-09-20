#!/bin/zsh

alias dc="docker-compose"

dc:exec() {
  dc exec app $@
}
dc:composer() {
  dc:exec composer $@
}
