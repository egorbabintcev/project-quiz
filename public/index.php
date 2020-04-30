<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>v 1.0</title>
  <link rel="stylesheet" href="./css/main.css">
</head>
<body>
  <div class="quiz">
    <form action="submit.php" class="form" id="quiz-form" method="POST">
      <input type="hidden" name="quiery_string" value="<?=$_SERVER['QUERY_STRING'] ?>">
      <div class="form__inner">
        <div class="form__step is-active" data-hint="on">
          <div class="form__cols">
            <div class="form__col">
              <div class="form__cont">
                <div class="form__progress">
                  <div class="progress__title">Осталось 6 вопросов из 6</div>
                  <div class="progress__line">
                    <span class="progress__fill progress__fill_w20"></span>
                  </div>
                </div>
                <div class="form__words">
                  <span class="form__words-num">1 /</span>
                  <span class="form__words-text">Какой формат сцены вы хотите приобрести</span>
                </div>
                <div class="form__radio-items">
                  <div class="form__radio-item">
                    <label class="radio">
                      <input type="radio" name="scene_type" class="radio__input" value="Стационарная сцена">
                      <svg class="radio__bg">
                        <use xlink:href="./img/radio__bg.svg#isvg_radio__bg"></use>
                      </svg>
                      <span class="radio__round"></span>
                      <span class="radio__text">Стационарная сцена</span>
                    </label>
                  </div>
                  <div class="form__radio-item">
                    <label class="radio">
                      <input type="radio" name="scene_type" class="radio__input" value="Стационарная сцена">
                      <svg class="radio__bg">
                        <use xlink:href="./img/radio__bg.svg#isvg_radio__bg"></use>
                      </svg>
                      <span class="radio__round"></span>
                      <span class="radio__text">Стационарная сцена</span>
                    </label>
                  </div>
                </div>
                <div class="form__controls">
                  <div class="form__controls-next">
                    <button type="button" class="form__controls-btn form__controls-btn_next btn_next btn_callback" disabled>
                      <svg class="btn__bg">
                        <use xlink:href="./img/radio__bg.svg#isvg_radio__bg"></use>
                      </svg>
                      На следующий шаг
                    </button>
                  </div>
                  <div class="form__controls-skip">
                    <button type="button" class="form__controls-btn form__controls-btn_skip btn_callback">пропустить вопрос</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="form__col">
              <div class="form__hint">
                <img class="form__hint-img is-hidden" src="./img/scene-type_1.jpg" alt="">
                <img class="form__hint-img is-hidden" src="./img/scene-type_2.jpg" alt="">
              </div>
              <div class="form__youget">
                <div class="form__youget-title">
                  <span>По окончанию теста вы получите:</span>
                </div>
                <div class="form__youget-items">
                  <div class="form__youget-item">
                    <div class="form__youget-item-text">
                      <span>Проект комплекса с&nbsp;учётом <br>снеговых и&nbsp;ветровых нагрузок <br>в вашем регионе</span>
                    </div>
                    <img src="./img/form_youget_pic_1.png" class="form__youget-item-pic" />
                  </div>
                  <div class="form__youget-item">
                    <div class="form__youget-item-text">
                      <span>Коммерческое предложение <br>с оптимизацией сметы <br>на 30%</span>
                    </div>
                    <img src="./img/form_youget_pic_2.png" class="form__youget-item-pic" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="form__step" data-hint="off">
          <div class="form__cols">
            <div class="form__col">
              <div class="form__cont">
                <div class="form__progress">
                  <div class="progress__title">Осталось 5 вопросов из 6</div>
                  <div class="progress__line">
                    <span class="progress__fill progress__fill_w30"></span>
                  </div>
                </div>
                <div class="form__words">
                  <span class="form__words-num">2 /</span>
                  <span class="form__words-text">Есть ли у вас персонал для монтажа и демонтажа сценического комплекса?</span>
                </div>
                <div class="form__radio-items">
                  <div class="form__radio-item">
                    <label class="radio">
                      <input type="radio" name="scene_has_montagers" class="radio__input" value="Да, есть персонал">
                      <svg class="radio__bg">
                        <use xlink:href="./img/radio__bg.svg#isvg_radio__bg"></use>
                      </svg>
                      <span class="radio__round"></span>
                      <span class="radio__text">Да, есть персонал</span>
                    </label>
                  </div>
                  <div class="form__radio-item">
                    <label class="radio">
                      <input type="radio" name="scene_has_montagers" class="radio__input" value="Да, но его необходимо обучить монтажу и демонтажу сцены">
                      <svg class="radio__bg">
                        <use xlink:href="./img/radio__bg.svg#isvg_radio__bg"></use>
                      </svg>
                      <span class="radio__round"></span>
                      <span class="radio__text">Да, но его необходимо обучить монтажу и демонтажу сцены</span>
                    </label>
                  </div>
                  <div class="form__radio-item">
                    <label class="radio">
                      <input type="radio" name="scene_has_montagers" class="radio__input" value="Нет, планируем привлекать">
                      <svg class="radio__bg">
                        <use xlink:href="./img/radio__bg.svg#isvg_radio__bg"></use>
                      </svg>
                      <span class="radio__round"></span>
                      <span class="radio__text">Нет, планируем привлекать</span>
                    </label>
                  </div>
                </div>
                <div class="form__controls">
                  <div class="form__controls-next">
                    <button type="button" class="form__controls-btn form__controls-btn_next btn_next btn_callback" disabled>
                      <svg class="btn__bg">
                        <use xlink:href="./img/radio__bg.svg#isvg_radio__bg"></use>
                      </svg>
                      На следующий шаг
                    </button>
                  </div>
                  <div class="form__controls-skip">
                    <button type="button" class="form__controls-btn form__controls-btn_skip btn_callback">пропустить вопрос</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="form__col">
              <div class="form__hint">
                <img class="form__hint-img" src="./img/scene_has_montagers.jpg" alt="">
              </div>
              <div class="form__youget">
                <div class="form__youget-title">
                  <span>По окончанию теста вы получите:</span>
                </div>
                <div class="form__youget-items">
                  <div class="form__youget-item">
                    <div class="form__youget-item-text">
                      <span>Проект комплекса с&nbsp;учётом <br>снеговых и&nbsp;ветровых нагрузок <br>в вашем регионе</span>
                    </div>
                    <img src="./img/form_youget_pic_1.png" class="form__youget-item-pic" />
                  </div>
                  <div class="form__youget-item">
                    <div class="form__youget-item-text">
                      <span>Коммерческое предложение <br>с оптимизацией сметы <br>на 30%</span>
                    </div>
                    <img src="./img/form_youget_pic_2.png" class="form__youget-item-pic" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="form__step" data-hint="off">
          <div class="form__cols">
            <div class="form__col">
              <div class="form__cont">
                <div class="form__progress">
                  <div class="progress__title">Осталось 4 вопроса из 6</div>
                  <div class="progress__line">
                    <span class="progress__fill progress__fill_w50"></span>
                  </div>
                </div>
                <div class="form__words">
                  <span class="form__words-num">3 /</span>
                  <span class="form__words-text">На какой вид покрытия будет установлен сценический комплекс?</span>
                </div>
                <div class="form__radio-items form__radio-items_multiple">
                  <div class="form__radio-item">
                    <label class="radio radio_smaller">
                      <input type="radio" name="scene_floor_type" class="radio__input" value="Бетонное основание">
                      <svg class="radio__bg">
                        <use xlink:href="./img/radio__bg.svg#isvg_radio__bg"></use>
                      </svg>
                      <span class="radio__round"></span>
                      <span class="radio__text">Бетонное основание</span>
                    </label>
                  </div>
                  <div class="form__radio-item">
                    <label class="radio radio_smaller">
                      <input type="radio" name="scene_floor_type" class="radio__input" value="Грунт">
                      <svg class="radio__bg">
                        <use xlink:href="./img/radio__bg.svg#isvg_radio__bg"></use>
                      </svg>
                      <span class="radio__round"></span>
                      <span class="radio__text">Грунт</span>
                    </label>
                  </div>
                  <div class="form__radio-item">
                    <label class="radio radio_smaller">
                      <input type="radio" name="scene_floor_type" class="radio__input" value="Асфальт">
                      <svg class="radio__bg">
                        <use xlink:href="./img/radio__bg.svg#isvg_radio__bg"></use>
                      </svg>
                      <span class="radio__round"></span>
                      <span class="radio__text">Асфальт</span>
                    </label>
                  </div>
                  <div class="form__radio-item">
                    <label class="radio radio_smaller">
                      <input type="radio" name="scene_floor_type" class="radio__input" value="Тротуарная плитка">
                      <svg class="radio__bg">
                        <use xlink:href="./img/radio__bg.svg#isvg_radio__bg"></use>
                      </svg>
                      <span class="radio__round"></span>
                      <span class="radio__text">Тротуарная плитка</span>
                    </label>
                  </div>
                  <div class="form__radio-item">
                    <label class="radio radio_smaller">
                      <input type="radio" name="scene_floor_type" class="radio__input" value="Затрудняюсь ответить">
                      <svg class="radio__bg">
                        <use xlink:href="./img/radio__bg.svg#isvg_radio__bg"></use>
                      </svg>
                      <span class="radio__round"></span>
                      <span class="radio__text">Затрудняюсь ответить</span>
                    </label>
                  </div>
                </div>
                <div class="form__controls">
                  <div class="form__controls-next">
                    <button type="button" class="form__controls-btn form__controls-btn_next btn_next btn_callback" disabled>
                      <svg class="btn__bg">
                        <use xlink:href="./img/radio__bg.svg#isvg_radio__bg"></use>
                      </svg>
                      На следующий шаг
                    </button>
                  </div>
                  <div class="form__controls-skip">
                    <button type="button" class="form__controls-btn form__controls-btn_skip">пропустить вопрос</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="form__col">
              <div class="form__hint">
                <img class="form__hint-img" src="./img/scene_floor_type.jpg" alt="">
              </div>
              <div class="form__youget">
                <div class="form__youget-title">
                  <span>По окончанию теста вы получите:</span>
                </div>
                <div class="form__youget-items">
                  <div class="form__youget-item">
                    <div class="form__youget-item-text">
                      <span>Проект комплекса с&nbsp;учётом <br>снеговых и&nbsp;ветровых нагрузок <br>в вашем регионе</span>
                    </div>
                    <img src="./img/form_youget_pic_1.png" class="form__youget-item-pic" />
                  </div>
                  <div class="form__youget-item">
                    <div class="form__youget-item-text">
                      <span>Коммерческое предложение <br>с оптимизацией сметы <br>на 30%</span>
                    </div>
                    <img src="./img/form_youget_pic_2.png" class="form__youget-item-pic" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="form__step" data-hint="off">
          <div class="form__cols">
            <div class="form__col">
              <div class="form__cont">
                <div class="form__progress">
                  <div class="progress__title">Осталось 3 вопроса из 6</div>
                  <div class="progress__line">
                    <span class="progress__fill progress__fill_w75"></span>
                  </div>
                </div>
                <div class="form__words">
                  <span class="form__words-num">4 /</span>
                  <span class="form__words-text">Когда необходимо произвести и доставить сценический комплекс?</span>
                </div>
                <div class="form__radio-items form__radio-items_multiple">
                  <div class="form__radio-item">
                    <label class="radio radio_smaller">
                      <input type="radio" name="scene_when_need" class="radio__input" value="В течение месяца">
                      <svg class="radio__bg">
                        <use xlink:href="./img/radio__bg.svg#isvg_radio__bg"></use>
                      </svg>
                      <span class="radio__round"></span>
                      <span class="radio__text">В течение месяца</span>
                    </label>
                  </div>
                  <div class="form__radio-item">
                    <label class="radio radio_smaller">
                      <input type="radio" name="scene_when_need" class="radio__input" value="Через 2-4 месяца">
                      <svg class="radio__bg">
                        <use xlink:href="./img/radio__bg.svg#isvg_radio__bg"></use>
                      </svg>
                      <span class="radio__round"></span>
                      <span class="radio__text">Через 2-4 месяца</span>
                    </label>
                  </div>
                  <div class="form__radio-item">
                    <label class="radio radio_smaller">
                      <input type="radio" name="scene_when_need" class="radio__input" value="Через полгода">
                      <svg class="radio__bg">
                        <use xlink:href="./img/radio__bg.svg#isvg_radio__bg"></use>
                      </svg>
                      <span class="radio__round"></span>
                      <span class="radio__text">Через полгода</span>
                    </label>
                  </div>
                  <div class="form__radio-item">
                    <label class="radio radio_smaller">
                      <input type="radio" name="scene_when_need" class="radio__input" value="Через год и более">
                      <svg class="radio__bg">
                        <use xlink:href="./img/radio__bg.svg#isvg_radio__bg"></use>
                      </svg>
                      <span class="radio__round"></span>
                      <span class="radio__text">Через год и более</span>
                    </label>
                  </div>
                </div>
                <div class="form__controls">
                  <div class="form__controls-next">
                    <button type="button" class="form__controls-btn form__controls-btn_next btn_next btn_callback" disabled>
                      <svg class="btn__bg">
                        <use xlink:href="./img/radio__bg.svg#isvg_radio__bg"></use>
                      </svg>
                      На следующий шаг
                    </button>
                  </div>
                  <div class="form__controls-skip">
                    <button type="button" class="form__controls-btn form__controls-btn_skip">пропустить вопрос</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="form__col">
              <div class="form__hint">
                <img class="form__hint-img" src="./img/scene_when_need.jpg" alt="">
              </div>
              <div class="form__youget">
                <div class="form__youget-title">
                  <span>По окончанию теста вы получите:</span>
                </div>
                <div class="form__youget-items">
                  <div class="form__youget-item">
                    <div class="form__youget-item-text">
                      <span>Проект комплекса с&nbsp;учётом <br>снеговых и&nbsp;ветровых нагрузок <br>в вашем регионе</span>
                    </div>
                    <img src="./img/form_youget_pic_1.png" class="form__youget-item-pic" />
                  </div>
                  <div class="form__youget-item">
                    <div class="form__youget-item-text">
                      <span>Коммерческое предложение <br>с оптимизацией сметы <br>на 30%</span>
                    </div>
                    <img src="./img/form_youget_pic_2.png" class="form__youget-item-pic" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="form__step is-last" data-hint="off">
          <div class="form__cols">
            <div class="form__col">
              <div class="form__cont">
                <div class="form__progress">
                  <div class="progress__title">Осталось 2 вопроса из 6</div>
                  <div class="progress__line">
                    <span class="progress__fill progress__fill_w90"></span>
                  </div>
                </div>
                <div class="form__words">
                  <span class="form__words-num">5 /</span>
                  <span class="form__words-text">Каким способом вы планируете приобретать сценический комплекс?</span>
                </div>
                <div class="form__radio-items">
                  <div class="form__radio-item">
                    <label class="radio">
                      <input type="radio" name="scene_buy_type" class="radio__input" value="Через аукцион">
                      <svg class="radio__bg">
                        <use xlink:href="./img/radio__bg.svg#isvg_radio__bg"></use>
                      </svg>
                      <span class="radio__round"></span>
                      <span class="radio__text">Через аукцион</span>
                    </label>
                  </div>
                  <div class="form__radio-item">
                    <label class="radio">
                      <input type="radio" name="scene_buy_type" class="radio__input" value="Через договор">
                      <svg class="radio__bg">
                        <use xlink:href="./img/radio__bg.svg#isvg_radio__bg"></use>
                      </svg>
                      <span class="radio__round"></span>
                      <span class="radio__text">Через договор</span>
                    </label>
                  </div>
                  <div class="form__radio-item">
                    <label class="radio">
                      <input type="radio" name="scene_buy_type" class="radio__input" value="Затрудняюсь ответить">
                      <svg class="radio__bg">
                        <use xlink:href="./img/radio__bg.svg#isvg_radio__bg"></use>
                      </svg>
                      <span class="radio__round"></span>
                      <span class="radio__text">Затрудняюсь овтетить</span>
                    </label>
                  </div>
                </div>
                <div class="form__controls">
                  <div class="form__controls-next">
                    <button type="button" class="form__controls-btn form__controls-btn_next btn_next btn_callback" disabled>
                      <svg class="btn__bg">
                        <use xlink:href="./img/radio__bg.svg#isvg_radio__bg"></use>
                      </svg>
                      На следующий шаг
                    </button>
                  </div>
                  <div class="form__controls-skip">
                    <button type="button" class="form__controls-btn form__controls-btn_skip">пропустить вопрос</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="form__col">
              <div class="form__hint">
                <img class="form__hint-img" src="./img/scene_buy_type.jpg" alt="">
              </div>
              <div class="form__youget">
                <div class="form__youget-title">
                  <span>По окончанию теста вы получите:</span>
                </div>
                <div class="form__youget-items">
                  <div class="form__youget-item">
                    <div class="form__youget-item-text">
                      <span>Проект комплекса с&nbsp;учётом <br>снеговых и&nbsp;ветровых нагрузок <br>в вашем регионе</span>
                    </div>
                    <img src="./img/form_youget_pic_1.png" class="form__youget-item-pic" />
                  </div>
                  <div class="form__youget-item">
                    <div class="form__youget-item-text">
                      <span>Коммерческое предложение <br>с оптимизацией сметы <br>на 30%</span>
                    </div>
                    <img src="./img/form_youget_pic_2.png" class="form__youget-item-pic" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>

  <script src="./js/jquery.min.js"></script>
  <script src="./js/main.js"></script>
</body>
</html>
